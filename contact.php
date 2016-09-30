<?php
    require_once("./core/util.php");
?>

<!DOCTYPE html>
    <?php
        displayHeader("Me contacter");
    ?>
    <body onload="readStyleCookie()">
        <?php
            displayMenu("contact");
        ?>

        <div class="container">
            <div class="form">
                <form>
                    Nom:<br/>
                    <input type="text" name="lastName"><br/>
                    Prenom:<br/>
                    <input type="text" name="firstName"><br/>
                    Mail:<br/>
                    <input type="email" name="mail"><br/>
                    Commentaires:<br/>
                    <textarea rows="4" cols="50"></textarea>


                </form>
            </div>
        </div>
        <?php
            displayFooter();
        ?>
    </body>
</html>