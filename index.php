<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$config = array(
    'steemitUsername' => '',
    'steempiLanguage' => 'en_EN'
);

if (file_exists('conf/config.php')) {
    $config = require 'conf/config.php';
}


?>
<!DOCTYPE html>

<!-- SteemPi webinterface V1.0 -->
<!-- SteemPi webinterface is build with profoundgrid, made by Profound Creative Studio LLC -->
<!-- SteemPi is made by @techtek -->
<!-- SteemPi is made by @dehenne -->

<html lang="en">
<head>
    <title>STEEMPI | A system for Steemit</title>

    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="app/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="app/css/font-awesome/css/font-awesome.min.css" type="text/css"/>
</head>

<body>

<div id="app">
    <nav>
        <a href="/" class="steemPi-logo">
            <span class="fa fa-bandcamp"></span>
        </a>

        <ul class="navigation">
            <li class="navigation-entry">
                <a href="">
                    <span class="navigation-entry-icon">
                        <span class="fa fa-home"></span>
                    </span>
                    <span class="navigation-entry-text">
                        Your Feed
                    </span>
                </a>
            </li>
            <li class="navigation-entry">
                <a href="">
                    <span class="navigation-entry-icon">
                        <span class="fa fa-hashtag"></span>
                    </span>
                    <span class="navigation-entry-text">
                        Steemitpond
                    </span>
                </a>
            </li>
            <li class="navigation-entry">
                <a href="">
                    <span class="navigation-entry-icon">
                        <span class="fa fa-heartbeat"></span>
                    </span>
                    <span class="navigation-entry-text">
                        Whale Sonar
                    </span>
                </a>
            </li>
            <li class="navigation-entry">
                <a href="">
                    <span class="navigation-entry-icon">
                        <span class="fa fa-globe"></span>
                    </span>
                    <span class="navigation-entry-text">
                        ISS Live
                    </span>
                </a>
            </li>
        </ul>
    </nav>

    <header>
        <section class="header-buttons">
            <a href="" class="header-buttons-button">
                <span class="fa fa-bell-o"></span>
            </a>
            <a href="" class="header-buttons-button">
                <span class="fa fa-gears"></span>
            </a>
        </section>
    </header>

    <main>

    </main>
</div>

<script src="app/js/init.js"></script>
</body>
</html>
