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

        <button onclick="setStyleCookies('main.css', 'style')">Style1</button>
        <button onclick="setStyleCookies('style2.css', 'style')">Style2</button>

        <?php
            displayFooter();
        ?>

    </body>
</html>
