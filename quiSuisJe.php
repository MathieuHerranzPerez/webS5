<?php
    require_once("./core/util.php");
?>
<!DOCTYPE html>
    <?php
        displayHeader("Mathieu HP Qui suis-je ?");
    ?>
    <body onload="readStyleCookie()">
        <?php
            displayMenu("quiSuisJe");
        ?>
        <div class="container">
            <p>
                Bonjour,<br/>
                Je suis né à <a href="https://www.google.fr/maps/place/Clamart/@48.7553892,2.2006278,10.49z/data=!4m5!3m4!1s0x47e67a150fecd221:0x40b82c3688b3e40!8m2!3d48.799815!4d2.257289" target="_blank">
                <span class="maj">Clamart (92)</span></a> en janvier 1996. J'ai un super frère,
                Cédric, né juste avant moi.
            </p>
            <table class="tableWhoAmI">
                <tr>
                    <th class="thLeft"><b>Points Forts</b></th>
                    <th class="thRight">logique, patient, calme</th>
                </tr>
                <tr>
                    <th class="thLeft"><b>Points faibles</b></th>
                    <th class="thRight">timide, confiance</th>
                </tr>
                <tr>
                    <th class="thLeft"><b>Caractère</b></th>
                    <th class="thRight">gentil, reste en retrait</th>
                </tr>
                <tr>
                    <th class="thLeft"><b>Qualités</b></th>
                    <th class="thRight">altruiste, patient, actif</th>
                </tr>
            </table>

            description par <a href="#"><span class="maj">Amna</span></a>, <a href="#"><span class="maj">Anaïs</span></a>,
            <a href="#"><span class="maj">Florian</span></a>, <a href="#"><span class="maj">Guillaume</span></a>,
            <a href="#"><span class="maj">Isis</span></a> et <a href="#"><span class="maj">Vincent</span></a>.

            <a class="right" href="https://www.facebook.com/profile.php?id=100009885273406">
                <img class="logo" src="img/logoFacebook.png" alt="logo facebook">
            </a>
        </div>


        <?php
            displayFooter();
        ?>
    </body>
</html>