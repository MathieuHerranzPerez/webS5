<?php
    require_once("./core/util.php");
?>

<!DOCTYPE html>
    <?php
        displayHeader("Cv");
    ?>
    <body onload="readStyleCookie()">
        <?php
            displayMenu("cv");
        ?>
        <div class="container">
            <a href="download/CV_General_MathieuHerranzPerez.pdf">Mon Cv</a>
        </div>
        <?php
            displayFooter();
        ?>
    </body>
</html>