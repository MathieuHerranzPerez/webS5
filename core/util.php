<?php

/**
 * display the menu with the right activated page
 * @param $pageActive
 */
    function displayMenu($pageActive) {
        echo '<nav class="topNav" id="topNav">
            <a href="./index.php" id="prenomNom"><span class="maj">M</span>athieu HERRANZ PEREZ</a>
            <a class="dropBtn" href="#">☰</a>
            <ul class="ulTopNav">
                <li class="ongletPage' . (($pageActive == "index") ? ' active' : '') . '"><a href="index.php" id="home">Accueil</a></li>
                <li class="ongletPage' . (($pageActive == "cv") ? ' active' : '') . '"><a href="cv.php" id="cv">CV en ligne</a></li>
                <li class="ongletPage'  . (($pageActive == "download") ? ' active' : '') . '"><a href="download.php" id="projects">Mes projets</a></li>
                <li class="ongletPage' . (($pageActive == "contact") ? ' active' : '') . '"><a href="contact.php" id="contact">Me contacter</a></li>

            </ul>
        </nav>';
    }

/*function displayMenu($pageActive) {
    echo '<nav class="topNav">
            <a href="./index.php" id="prenomNom"><span class="maj">M</span>athieu HERRANZ PEREZ</a>
            <a class="dropBtn icon" href="#">☰</a>
            <hr id="menuSeparation" />
            <ul class="ulTopNav">
                <li class="ongletPage' . (($pageActive == "index") ? ' active' : '') . '"><a href="index.php" id="home">Accueil</a></li>
                <li class="ongletPage' . (($pageActive == "cv") ? ' active' : '') . '"><a href="cv.php" id="cv">CV en ligne</a></li>
                <li class="ongletPage'  . (($pageActive == "download") ? ' active' : '') . '"><a href="download.php" id="projects">Mes projets</a></li>
                <li class="ongletPage' . (($pageActive == "contact") ? ' active' : '') . '"><a href="contact.php" id="contact">Me contacter</a></li>

            </ul>
        </nav>';
}*/

/**
 * display the header with the title
 * @param $title
 */
    function displayHeader($title) {
        echo '<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
              <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
              <!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
              <!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
                  <head>
                      <meta charset="utf-8">
                      <title>' . $title . '</title>
                      <meta name="description" content="">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <link rel="stylesheet" href="css/main.css" id="css">
                      <link rel="icon" type="image/png" href="../img/orange.png" />
                  </head>';
    }

/**
 * display the footer
 */
    function displayFooter() {
        echo '<footer>
                  <div class="footer">
                      <span class="maj">&copy;</span> 2017-Tous droits réservés, M. HERRANZ PEREZ
                  </div>
              </footer>
              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
              <script>window.jQuery || document.write(\'<script src="js/vendor/jquery-1.11.2.min.js"><\/script>\')</script>
      
              <script src="js/main.js"></script>';
    }