<?php
require "../includes/database_connect.php";
header('Content-Type: application/json');

$property_id = $_GET['property_id'];

// Fetch testimonials for this property
$sql = "SELECT content FROM testimonials WHERE property_id = $property_id";
$result = mysqli_query($conn, $sql);
$testimonials = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Simplified NLP keywords for aspect analysis
$aspects = [
    'cleanliness' => ['clean', 'tidy', 'dirty', 'hygiene', 'sweep'],
    'food' => ['meal', 'food', 'breakfast', 'dinner', 'tasty', 'cook'],
    'owner' => ['owner', 'landlord', 'behavior', 'rude', 'helpful'],
    'safety' => ['safe', 'security', 'cctv', 'guard', 'lock']
];

$sentiment_scores = ['positive' => 0, 'negative' => 0, 'neutral' => 0];
$aspect_insights = ['cleanliness' => 'Neutral', 'food' => 'Neutral', 'behavior' => 'Neutral'];

foreach ($testimonials as $t) {
    $text = strtolower($t['content']);
    // Simple rule-based sentiment tagging
    if (preg_match('/(good|great|best|safe|clean|tasty)/', $text)) $sentiment_scores['positive']++;
    elseif (preg_match('/(bad|dirty|worst|unsafe|rude)/', $text)) $sentiment_scores['negative']++;
    else $sentiment_scores['neutral']++;
}

echo json_encode([
    "overall" => $sentiment_scores,
    "insights" => $aspect_insights 
]);
