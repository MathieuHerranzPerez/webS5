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
            <hr/>
            <div>
                <h2><stong>Mathieu HERRANZ PEREZ</stong></h2>
                <p>Bât. K, av. JP Coste, rés. Le Bel Ormeau
                   13100 Aix-en-Provence</p>
                <strong>06 70 88 22 85<br/>
                    mathieu.herranzperez@gmail.com<br/>
                    <a href="https://github.com/MathieuHerranzPerez"><span class="maj">github</span></a><br/>
                </strong><br/>
                20 ans<br/>
                Nationalité française, Permis B

            </div>
        </div>

        <?php
            displayFooter();
        ?>
    </body>
</html>