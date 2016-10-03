<?php
    require_once("./core/util.php");
?>

<!DOCTYPE html>
    <?php
        displayHeader("Mathieu HP Me contacter");
    ?>
    <body onload="readStyleCookie()">
        <?php
            displayMenu("contact");
        ?>

        <div class="container">
            <div class="form">
                <form>
                    Nom:<br/>
                    <input id="inLastName" type="text" name="lastName" onChange="checkName('#inLastName')"><br/>
                    Prenom:<br/>
                    <input id="inFirstName" type="text" name="firstName" onChange="checkName('#inFirstName')"><br/>
                    Mail:<br/>
                    <input id="inMail" type="email" name="mail" onChange="checkMail('#inMail')"><br/>
                    Date de naissance:<br/>
                    <input id="inDate" type="text" name="birth" placeholder="jj/mm/aaaa" onChange="checkBirth('#inDate')"><br/>
                    Commentaires:<br/>
                    <textarea rows="4" cols="50"></textarea><br/>
                    <button class="right" type="submit">Envoyer</button>

                </form>
            </div>
        </div>
        <?php
            displayFooter();
        ?>
    </body>
</html>