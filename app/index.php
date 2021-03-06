<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require dirname(__FILE__).'/autoload.php';

$ModuleHandler = new SteemPi\Modules\Handler();
$modules       = $ModuleHandler->getModules();
$background    = SteemPi\SteemPi::getBackground();

?>
<!-- SteemPi webinterface V2.0 -->
<!-- SteemPi is made by @dehenne -->
<!-- SteemPi is made by @techtek -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>STEEMPI | A system for Steemit</title>

    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">

    <script>
        paceOptions = {
            ajax    : false,
            document: false,
            eventLag: false
        };
    </script>
    <script src="/app/js/pace.min.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/app/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/app/css/font-awesome/css/font-awesome.min.css" type="text/css"/>
</head>
<body style="background-image: url('<?php echo $background; ?>')">

<div id="app">
    <nav>
        <a href="/" class="steemPi-logo">
            <img src="/app/images/logo.svg" class="logo"/>
            <img src="/app/images/logo-text.svg" class="logo-text"/>
        </a>

        <ul class="navigation">
            <?php foreach ($modules as $Module) {
                /* @var $Module \SteemPi\Modules\Module */
                if (!$Module->extendsLeftMenu() || !$Module->isActive()) {
                    continue;
                }

                ?>
                <li class="navigation-entry" data-module="<?php echo $Module->getName() ?>">
                    <?php
                    $MenuItem = $Module->getLeftMenu();
                    echo $MenuItem->create();
                    ?>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <header>
        <div class="header-menu">
            <img src="/app/images/logo.svg" class="logo"/>
        </div>

        <section class="header-buttons">
            <!--            <a href="" class="header-buttons-button">-->
            <!--                <span class="fa fa-bell-o"></span>-->
            <!--            </a>-->

            <div class="header-buttons-button module-loop">
                <span class="fa fa-repeat"></span>
            </div>

            <?php foreach ($modules as $Module) {
                /* @var $Module \SteemPi\Modules\Module */
                if (!$Module->extendsTopMenu() || !$Module->isActive()) {
                    continue;
                }

                $MenuItem = $Module->getTopMenu();
                $MenuItem->addClass('header-buttons-button');

                echo $MenuItem->create();

            } ?>
        </section>
    </header>

    <main>
        <iframe id="module" src="/app/frame.php"></iframe>
    </main>
</div>

<script src="/app/js/anime.min.js"></script>
<script src="/app/js/navigo.min.js"></script>

<script src="/app/js/index.js"></script>
<script src="/app/js/index.loop.js"></script>
</body>
</html>
