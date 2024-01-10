<!doctype html>
<html>
    <head>
       <meta charset="utf-8" />
        <link rel="stylesheet" href="newcvstyle.css" />
        <title></title>
    </head>
    <body>
    <script lang="javascript" type="text/javascript">
            function authen(){
                if((document.getElementById("Nom").value=="") || (document.getElementById("Email").value=="")){
                    alert("veuillez taper votre email et votre nom !!");
                    return false;
                }
                
                if(document.getElementById("Email").value.indexOF('@')==-1){
                    alert("Adresse e-mail incorrect!");
                    return false;
                }
                
            }
        </script>



        <form action="affichagecv.php" method="POST" onsubmit="authen()">
            <fieldset>
                <legend>Contacter-moi</legend>
                <p>email: <br><input type="email" name="Email" id="Email" placeholder="Votre email"></p>
                <p>Nom: <br><input type="text" name="Nom" id="Nom" placeholder="Votre nom"></p>
                <input type="submit"> <input type="reset">
                <p><a href="newcv.php">sign up</a></p>
                </fieldset>
        </form>


        <?php
            include('function.php');
            connexion();
            $reponse = $bdd->query('select * from users');
            $authentification=false;
            if(isset($_POST['Email']) and isset($_POST['Nom'])){
                while($donnees = $reponse->fetch())
            {
                $A=$donnees['email_cv'];
                $B=$donnees['nom_cv'];
                if($_POST['Email']==$A and $_POST['Nom']==$B){
                    $authentification=true;
                    header( "location: affichagecv.php");
                }
            }
            if($authentification==false){
                echo "<center> Mot de passe incorrect</center>";
            }
            }
        ?>
    </body>

</html>