<?php
session_start();
require "../includes/database_connect.php";

header('Content-Type: application/json');

$user_message = isset($_POST['message']) ? strtolower(mysqli_real_escape_string($conn, $_POST['message'])) : "";

if (empty($user_message)) {
    echo json_encode(["message" => "Please tell me what you are looking for!"]);
    exit;
}

// 1. Basic NLP - Extracting potential filters
$budget = 0;
if (preg_match('/(\d+)\s?k/i', $user_message, $matches)) {
    $budget = $matches[1] * 1000;
} elseif (preg_match('/budget (\d+)/i', $user_message, $matches)) {
    $budget = $matches[1];
}

$food_included = strpos($user_message, 'food') !== false || strpos($user_message, 'meal') !== false;

// 2. Build Query based on extracted keywords
$sql = "SELECT p.*, c.name as city_name 
        FROM properties p 
        INNER JOIN cities c ON p.city_id = c.id 
        WHERE 1=1";

if ($budget > 0) {
    $sql .= " AND p.rent <= $budget";
}

// Logic for finding food could involve joining with amenities table if your DB supports it
// For this example, we'll fetch the top 5 matches
$sql .= " LIMIT 5";

$result = mysqli_query($conn, $sql);
$properties = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 3. Construct Bot Response
if (count($properties) > 0) {
    $bot_reply = "Based on your request, I found " . count($properties) . " great options for you:<br><br>";
    foreach ($properties as $p) {
        $bot_reply .= "🏠 <b>" . $p['name'] . "</b> in " . $p['city_name'] . "<br>";
        $bot_reply .= "💰 Rent: ₹" . number_format($p['rent']) . "/mo<br>";
        $bot_reply .= "✨ Why it matches: It fits your budget and offers great ratings!<br>";
        $bot_reply .= "<a href='property_detail.php?property_id=" . $p['id'] . "'>View Details</a><br><br>";
    }
} else {
    $bot_reply = "I couldn't find a exact match for that budget, but check out these popular PGs in Delhi or Mumbai!";
}

echo json_encode(["message" => $bot_reply]);
