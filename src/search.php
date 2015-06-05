<?php

require '../Instagram/src/Instagram.php';

use MetzWeb\Instagram\Instagram;

$instagram = new Instagram('b6446a69f86a4e06bb807270b908c5a8');

$result = $instagram->getPopularMedia();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram - search by location</title>
    <link href="https://vjs.zencdn.net/4.2/video-js.css" rel="stylesheet">
    <link href="../assets/style.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/4.2/video.js"></script>
</head>
<body>
<div class="container">
    <header class="clearfix">
        <img src="../assets/instagram.png" alt="Instagram logo">

        <h1>Instagram <span>search by location</span></h1>
    </header>
    <div class="main">
        <div class="search">
            <form  method="post" action="search.php?go"  id="search_form"> 
                <input type="text" class="search_box" placeholder="Search..."> 
            </form> 
            <?php 
                if (isset($_POST['submit'])) { 
                    // Call Instagram API and search.
                } 
            ?> 
        </div>
        <!-- GitHub project -->
        <footer>
            <p>created by <a href="https://github.com/hughhan1">Hugh Han</a>.</p>
        </footer>
    </div>
</div>
<!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Something Cool
    });
</script>
</body>
</html>
