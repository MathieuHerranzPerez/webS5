<?php

/**
 * display the menu with the right activated page
 * @param $pageActive
 */
    function displayMenu($pageActive) {
        echo '<nav class="topNav">
            <a href="./index.php" id="prenomNom"><span class="maj">M</span>athieu HERRANZ PEREZ</a>
            <a class="dropBtn icon" href="#">☰</a>
            <hr id="menuSeparation" />
            <ul class="ulTopNav">
                <a href="index.php" id="home"><li class="ongletPage' . (($pageActive == "index") ? ' active' : '') . '">Accueil</li></a>
                <a href="cv.php" id="cv"><li class="ongletPage' . (($pageActive == "cv") ? ' active' : '') . '">CV en ligne</li></a>
                <a href="download.php" id="projects"><li class="ongletPage'  . (($pageActive == "download") ? ' active' : '') . '">Mes projets</li></a>
                <a href="contact.php" id="contact"><li class="ongletPage' . (($pageActive == "contact") ? ' active' : '') . '">Me contacter</li></a>

            </ul>
        </nav>';
    }
/**
 * display the header with the title
 * @param $title
 */
    function displayHeader($title) {
        echo '<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
              <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
              <!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
              <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
                  <head>
                      <meta charset="utf-8">
                      <title>' . $title . '</title>
                      <meta name="description" content="">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <link rel="stylesheet" href="css/main.css" id="css">
                
                  </head>';
    }

/**
 * display the footer
 */
    function displayFooter() {
        echo '<footer>
              </footer>
              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
              <script>window.jQuery || document.write(\'<script src="js/vendor/jquery-1.11.2.min.js"><\/script>\')</script>
      
              <script src="js/vendor/bootstrap.min.js"></script>
      
              <script src="js/main.js"></script>';
    }