<?php
    require_once("./core/util.php");
?>
<!doctype html>
    <?php
        displayHeader("Accueil");
    ?>
    <body onload="readStyleCookie()">
        <?php
            displayMenu("index");
        ?>
        <h1>Bienvenue</h1>
        <div class="changeStyle">
            <h3>Changez de style en toute simplicité</h3>
            <div class="center">
                <div class="btnStyle" id="btnStyle1" onclick="setStyleCookies('main.css', 'style')"></div>
                <div class="btnStyle" id="btnStyle2" onclick="setStyleCookies('style2.css', 'style')"></div>
            </div>
        </div>

        <?php
            displayFooter();
        ?>

    </body>
</html>
