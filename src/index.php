<?php

require '../Instagram/src/Instagram.php';
use MetzWeb\Instagram\Instagram;

// initialize class
$instagram = new Instagram(array(
    'apiKey' => 'b6446a69f86a4e06bb807270b908c5a8',
    'apiSecret' => '38df69501f064350921ae5dab0bb0a0d',
    'apiCallback' => 'http://macklemore.local/Map-It/src/success.php'
));

// create login URL
$loginUrl = $instagram->getLoginUrl();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram - OAuth Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <style>
        .login {
            display: block;
            font-size: 20px;
            font-weight: bold;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="clearfix">
        <h1>Map It <span>find photos anywhere</span></h1>
    </header>
    <div class="main">
        <ul class="grid">
            <li><img src="../assets/img/instagram-big.png" alt="Instagram logo"></li>
            <li>
                <a class="login" href="<?php echo $loginUrl ?>">» Login with Instagram</a>
                <h4>Use your Instagram account to login.</h4>
            </li>
        </ul>
        <!-- GitHub project -->
        <footer>
            <p>created by <a href="https://github.com/hughhan1">Hugh Han</a>.</p>
        </footer>
    </div>
</div>
</body>
</html>
