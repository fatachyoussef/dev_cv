<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cvstyle.css">
        <title>CV</title>
    </head>
    <body>
    <?php
        include('function.php');
        connexion();
        $emm = $_POST['Email'];
        $sql="select * from cv where email_n='".$emm."'";
		$reponse = $bdd->query($sql);
        $enreg = $reponse->fetch();
        ?>




    <div id="partie_gauche">
            <div class="zone_text_gauche">
            <!-- partie profile -->
            <h2 class="bouton" id="profil">PROFIL</h2>
            <br>
            <div style="display: flex;">
                <img src="cvicons/iconadress.png" alt="icon1" height="50px" width="50px"> 
                <h4>ADRESSE</h4>
            </div>
            <?php echo "<p>".$enreg['Adresse_n']."</p>" ?>
            <br>
            <div style="display: flex;">
                <img src="cvicons/2.png" alt="icon2" height="50px" width="50px">
                <h4>E-MAIL</h4>
            </div>
            <?php echo "<p>".$enreg['email_n']."</p>" ?>
            <br>
            <div style="display: flex;">
                <img src="cvicons/3.png" alt="icon3" height="50px" width="50px">
                <h4>TELEPHONE</h4>
            </div>
            <?php echo "<p>".$enreg['tel_n']."</p>" ?>
            <br>
            <div style="display: flex;">
                <img src="cvicons/4.png" alt="icon4" height="50px" width="50px">
                <h4>DATE DE NAISSANCE</h4>
            </div>
            <?php echo "<p>".$enreg['date_n']."</p>" ?>
            <br>

            
            <!-- partie langues  -->
            <h2 class="bouton" id="langues">LANGUES</h2>
            <?php echo "<p>".$enreg['langues_n']."</p>" ?>
            
            </div>

        </div>



        <div id="partie_droite">
            <div id="nometprenom">
                <div id="zone_titre">
                <?php echo "<h1>".$enreg['nom_n']."&nbsp; &nbsp;".$enreg['prenom_n']."</h1>" ?>
                </div>
                <nav>
                    <ul style="font-size: smaller;">
                        <li style="margin-right: 9px;"><a href="#profil" class="lien">PROFIL</a></li>
                        <li style="margin-right: 9px;"><a href="#langues" class="lien">LANGUES</a></li>
                        <li style="margin-right: 9px;"><a href="#interets">INTERETS</a></li>
                        <li style="margin-right: 9px;"><a href="#formations">FORMATIONS</a></li>
                        <li style="margin-right: 9px;"><a href="#competences">COMPETANCES</a></li>
                        <li style="margin-right: 9px;"><a href="authentificationcv.php">votre-compte</a></li>
                    </ul>
                </nav>
            </div>
            <!-- partie formation -->
            <div class="zone_chapitre">
                <h2 id="formations">formations</h2>
            </div>
            <?php echo "<p>".$enreg['formations_n']."</p>" ?>
            <br>
            <!-- partie experiences -->
            <div class="zone_chapitre">
                <h2 id="experiences">experiences</h2>
            </div>
            <?php echo "<p>".$enreg['experiences_n']."</p>" ?>
            <br>
            <!-- partie compétances -->
            <div class="zone_chapitre">
                <h2 id="competences">compétances</h2>
            </div>
            <?php echo "<p>".$enreg['competances_n']."</p>" ?>
            <br>
            <!-- partie loisirs -->
            <div class="zone_chapitre">
                <h2 id="loisirs">loisirs</h2>
            </div>
            <?php echo "<p>".$enreg['loisirs_n']."</p>" ?>
            <br>
        </div>

    </body>
</html>