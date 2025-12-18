<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <style>
        #chatbot-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            color: white;
            padding: 15px 18px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s;
        }
        #chatbot-icon:hover { transform: scale(1.1); }
        
        #chat-window {
            display: none;
            position: fixed;
            bottom: 85px;
            right: 20px;
            width: 350px;
            height: 450px;
            background: white;
            border-radius: 15px;
            flex-direction: column;
            z-index: 1000;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            overflow: hidden;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 style="font-family: 'Arial', sans-serif; color: white; text-align: center; font-size: 3rem; letter-spacing: 2px; text-transform: uppercase; padding: 20px 0; position: relative; background: linear-gradient(45deg, #ff7e5f, #feb47b); -webkit-background-clip: text; background-clip: text; animation: pulse 2s infinite;"> Happiness per Square Foot </h2>
        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="chatbot-icon">
        <i class="fas fa-robot fa-2x"></i>
    </div>

    <div id="chat-window">
        <div style="background: linear-gradient(45deg, #ff7e5f, #feb47b); color: white; padding: 15px; font-weight: bold; display: flex; justify-content: space-between; align-items: center;">
            <span><i class="fas fa-magic mr-2"></i> LivEasy AI Assistant</span>
            <i class="fas fa-times" id="close-chat" style="cursor:pointer;"></i>
        </div>
        <div id="chat-content" style="flex: 1; padding: 15px; overflow-y: auto; background: #f9f9f9; display: flex; flex-direction: column; gap: 10px;">
            <div style="background: #eee; padding: 10px; border-radius: 10px; align-self: flex-start; max-width: 85%;">
                Hi! I'm your rental assistant. Try typing: <b>"Student budget 8k near metro with food"</b>
            </div>
        </div>
        <div style="padding: 15px; border-top: 1px solid #eee; display: flex; background: white;">
            <input type="text" id="chat-input" placeholder="Type your requirements..." style="flex: 1; border: 1px solid #ddd; border-radius: 20px; padding: 8px 15px; outline: none;">
            <button id="send-btn" style="margin-left: 10px; background: #ff7e5f; color: white; border: none; border-radius: 50%; width: 35px; height: 35px; cursor: pointer;">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

    <script src="js/chatbot.js"></script>
</body>

</html>
