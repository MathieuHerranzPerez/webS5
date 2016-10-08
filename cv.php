<?php
    require_once("./core/util.php");
?>

<!DOCTYPE html>
    <?php
        displayHeader("Mathieu HP Cv");
    ?>
    <body onload="readStyleCookie()" onscroll="displayAnchor('.returnH')">
        <?php
            displayMenu("cv");
        ?>
        <div class="container">
            <div class="cv">
                <a href="download/CV_General_MathieuHerranzPerez.pdf"><span class="maj">Mon Cv</span></a>
                <hr/>
                <div>
                    <h2>Mathieu HERRANZ PEREZ</h2>
                    <p>Bât. K, av. JP Coste, rés. Le Bel Ormeau
                       13100 Aix-en-Provence</p>
                    <strong>+33 (0)6 70 88 22 85<br/>
                        mathieu.herranzperez@gmail.com<br/>
                        <a href="https://github.com/MathieuHerranzPerez"><span class="maj">GitHub</span></a><br/>
                    </strong><br/>
                    20 ans<br/>
                    Nationalité française, Permis B
                </div>

                <h3><span class="maj">D</span>iplômes et <span class="maj">F</span>ormations</h3><hr class="separationCv"/>
                <table class="center">
                    <tr>
                        <th class="thLeft"><strong>2016</strong></th>
                        <th class="thRight">Première année école d'ingénieurs<span class="tabulation">(en cours)</span></th>
                    </tr>
                    <tr>
                        <th class="thLeft"><strong>2016</strong></th>
                        <th class="thRight">DUT informatique, IUT Aix Marseille Université, site d'Aix</th>
                    </tr>
                    <tr>
                        <th class="thLeft"><strong>2014</strong></th>
                        <th class="thRight">Bac S SI (mention Assez-bien) Lycée Emile Zola, site d'Aix</th>
                    </tr>
                </table>


                <h3><span class="maj">C</span>ompétences <span class="maj">S</span>pécialisées</h3><hr class="separationCv"/>
                <table class="center">
                    <tr>
                        <th class="thLeft">Programmation</th>
                        <th class="thRight">C/C++, Java, Orientée objet, Design Pattern</th>
                    </tr>
                    <tr>
                        <th class="thLeft">Web</th>
                        <th class="thRight">HTML 5, CSS 3, PHP, JavaScript, JQuery</th>
                    </tr>
                    <tr>
                        <th class="thLeft">Bases de données</th>
                        <th class="thRight">SQL, PL/SQL, JDBC, MySQL, Data mining</th>
                    </tr>
                    <tr>
                        <th class="thLeft">Réseaux</th>
                        <th class="thRight">modèle OSI, TCP/IP, routage, BOOTP, DHCP, NAT/PAT</th>
                    </tr>
                    <tr>
                        <th class="thLeft">Modélisation</th>
                        <th class="thRight">UML</th>
                    </tr>
                </table>


                <h3><span class="maj">C</span>ompétences <span class="maj">A</span>ssociées</h3><hr class="separationCv"/>
                <table class="center">
                    <tr>
                        <th class="thLeft">Gestion</th>
                        <th class="thRight">droit, économie, comptabilité analytique et financière</th>
                    </tr>
                    <tr>
                        <th class="thLeft">Gestion de projet</th>
                        <th class="thRight">méthodes agiles, outils d'ordonnancement</th>
                    </tr>
                    <tr>
                        <th class="thLeft">Linguistique</th>
                        <th class="thRight">Anglais niveau intermediaire, Espagnol niveau académique</th>
                    </tr>
                    <tr>
                        <th class="thLeft">Mathématiques</th>
                        <th class="thRight">théorie des graphes et des ensembles, probabilités, analyse, algèbre linéaire</th>
                    </tr>
                </table>


                <h3><span class="maj">R</span>éalisations</h3><hr class="separationCv"/>
                <p><strong>Librairie de moteur de jeu vidéo</strong>, projet sur 1 an, 5 personnes<br/>
                    Cette librairie offre des outils pour des programmeurs expérimentés, leur permettant
                    de créer plus facilement des jeux en 2D.<br/>
                    <i><span class="tabulation">Langage utlisé : C++</span></i>
                </p>
                <p><strong>Logiciel de simulation de feu de forêt</strong>, 15 heures, 3 personnes<br/>
                    Ce projet de 2e année simule sur une grille (composée d’un nombre prédéfini de carrés
                    symbolisant des arbres) un départ de feu de forêt sur le carré sur lequel l’utilisateur
                    clique.<br/>
                    <i><span class="tabulation">Langages utilisés : C++, librairie Qt IHM</span></i>
                </p>
                <p><strong>Programme de gestion d'ascenseurs</strong>, 25 heures, 3 personnes<br/>
                    Projet de 2e année simulant un système de x ascenseur(s) dans un hôtel et qui en fonction
                    de la stratégie choisie, change de méthode pour sélectionner le meilleur ascenseur. Réalisé
                    en utilisant des design patterns.<br/>
                    <i><span class="tabulation">Langage utilisé : Java</span></i>
                </p>
                <p><strong>Site web agrégateur de flux</strong>, 25 heures, 4 personnes<br/>
                    Site réalisé en 2e année ; c’est un réseau social qui permet de créer des articles, afficher
                    des flux RSS, twitter et mail.<br/>
                    <i><span class="tabulation">Langages utilisés : PHP, HTML5 / CSS3</span></i>
                </p>


                <h3><span class="maj">E</span>xpérience <span class="maj">P</span>rofessionnelle</h3><hr class="separationCv"/>
                <p><strong>Stage de dix semaines</strong> en entreprise.<br/>Web développeur, Le Puy Sainte Réparade, 04 avril
                    au 10 Juin 2016 ; pour la refonte du site web de Powersys.
                    Site dynamique avec interface d'administration pour ajouter modifier et supprimer 90% du contenu.<br/>
                    <a href="http://powersys-solutions.com/wp-nvsite/"><span class="maj">Future site de Powersys</span></a>
                </p>
            </div>
            <div class="colorJ">
                <div class="line">
                    <div class="blocP">
                        <strong>Logciciels</strong>
                        <ul class="tabulation">
                            <li>Qt creator</li>
                            <li>Eclipse</li>
                            <li>Android studio</li>
                            <li>Oracle</li>
                            <li>MySQL</li>
                            <li>Outils JetBrains</li>
                        </ul>
                    </div>
                    <div class="blocP">
                        <strong>Gestionnaire de version</strong>
                        <ul class="tabulation">
                            <li>Git</li>
                        </ul>
                    </div>
                    <div class="blocP">
                        <strong>Centres d'intérêt</strong>
                        <ul class="tabulation">
                            <li>Sports</li>
                            <li>Jeux stratégiques</li>
                            <li>Jeux vidéo</li>
                            <li>Programmation</li>
                        </ul>
                    </div>
                </div>
                <div class="line">
                    <div class="blocP">
                        <strong>Systèmes d'exploitation</strong>
                        <ul class="tabulation">
                            <li>Linux</li>
                            <li>Windows</li>
                        </ul>
                    </div>
                    <div class="blocP">
                        <Strong>Outils bureautiques</Strong>
                        <ul class="tabulation">
                            <li>Microsoft Office</li>
                            <li>Open Office</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="returnH">
            <a class="returnHLink" href="#topNav">
                <img class="btnAncre" src="./img/fleche.png" alt="retourner en haut">
            </a>
        </div>

        <?php
            displayFooter();
        ?>
    </body>
</html>