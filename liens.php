<?php
    require_once("./core/util.php");
?>
<!doctype html>
    <?php
        displayHeader("Mes liens");
    ?>
    <body onload="readStyleCookie()">
    <?php
        displayMenu("liens");
    ?>

    <div class="container">
        <ul>
            <li><a href="tpHtml.php"><span class="maj">TP HTML</span></a></li>
            <li><a href="#"><span class="maj">TP Linux</span></a></li>
            <li><a href="js/out/index.html"><span class="maj">Documentation JS</span></a></li>
        </ul>
    </div>

    <?php
        displayFooter();
    ?>
    </body>
</html>