<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="newcvstyle.css">
    </head>
    <body>
    <script lang="javascript" type="text/javascript">
            function Verif(){
                if((document.getElementById("newnom").value=="") || (document.getElementById("newprenom").value=="") || (document.getElementById("newdate").value=="") || (document.getElementById("newtel").value=="") || (document.getElementById("newemail").value=="") || (document.getElementById("newAdresse").value=="Votre Adresse") || (document.getElementById("newFormations").value=="Votre formation") || (document.getElementById("newExpérienceprofessionnelle").value=="Votre Expérience professionnelle") || (document.getElementById("newlangues").value=="Votre langues") || (document.getElementById("newLoisirs").value=="Votre Loisirs") || (document.getElementById("newcompetances").value=="Votre competances")){
                    alert("veuillez completer touts les champs !!");
                    return false;
                }
                
                if(document.getElementById("newemail").value.indexOF('@')==-1){
                    alert("Adresse e-mail incorrect!");
                    return false;
                }
                
            }
        </script>











        <form action="newcv.php" method="post">
            <fieldset>
                <legend>créer votre CV</legend>
                <table>
                    <tr>
                        <td>Nom:</td>
                        <td><input type="text" id="newnom" name="newnom" placeholder="Votre Nom"></td>
                    </tr>
                    <tr>
                        <td>Prénom:</td>
                        <td><input type="text" id="newprenom" name="newprenom" placeholder="Votre Prénom"></td>
                    </tr>
                    
                    <tr>
                        <td>Date de naissance:</td>
                        <td><input type="date" id="newdate" name="newdate" ></td>
                    </tr>
                    <tr>
                        <td>Téléphone:</td>
                        <td><input type="text" id="newtel" name="newtel" placeholder="votre Téléphone"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" id="newemail" name="newemail" placeholder="Votre Email"></td>
                    </tr>
                    <tr>
                        <td>Adresse:</td>
                        <td><textarea name="newAdresse" id="newAdresse" cols="30" rows="5">Votre Adresse</textarea></td>
                    </tr>
                    <tr>
                        <td>Formations:</td>
                        <td><textarea name="newFormations" id="newFormations" cols="30" rows="5">Votre formation</textarea></td>
                    </tr>
                    <tr>
                        <td>Expérience professionnelle:</td>
                        <td><textarea name="newExpérienceprofessionnelle" id="newExpérienceprofessionnelle" cols="30" rows="5">Votre Expérience professionnelle</textarea></td>
                    </tr>
                    <tr>
                        <td>langues:</td>
                        <td><textarea name="newlangues" id="newlangues" cols="30" rows="5">Votre langues</textarea></td>
                    </tr>
                    <tr>
                        <td>Loisirs:</td>
                        <td><textarea name="newLoisirs" id="newLoisirs" cols="30" rows="5">Votre Loisirs</textarea></td>
                    </tr>
                    <tr>
                        <td>competances:</td>
                        <td><textarea name="newcompetances" id="newcompetances" cols="30" rows="5">Votre competances</textarea></td>
                    </tr>
                    <tr>
                        <td>votre photo (*):</td>
                        <td><input type="file" id="newphoto"></td>
                    </tr>
                </table>
            </fieldset>
            <br><input type="submit" onclick="Verif()" > &nbsp; &nbsp; <input type="reset">
            <br><p>(*) champ facultatife</p>
            <a href="authentificationcv.php">s'authentifier</a><br><br>
        </form>



        <?php 
            include('function.php');
            connexion();
            if(isset($_POST['newnom']) and isset($_POST['newprenom']) and isset($_POST['newdate']) 
            and isset($_POST['newtel']) and isset($_POST['newemail']) and isset($_POST['newAdresse']) 
            and isset($_POST['newFormations']) and isset($_POST['newExpérienceprofessionnelle']) and isset($_POST['newlangues']) 
            and isset($_POST['newLoisirs']) and isset($_POST['newcompetances'])){

                if(!empty($_POST['newnom']) and !empty($_POST['newprenom']) and !empty($_POST['newdate']) 
                and !empty($_POST['newtel']) and !empty($_POST['newemail']) 
                and !empty($_POST['newAdresse']) and !empty($_POST['newFormations']) and !empty($_POST['newExpérienceprofessionnelle']) 
                and !empty($_POST['newlangues']) and !empty($_POST['newLoisirs']) and !empty($_POST['newcompetances'])){   

                        $sql="insert into cv(email_n, nom_n, prenom_n, date_n, tel_n, Adresse_n, formations_n, experiences_n, langues_n, loisirs_n, competances_n) values('".$_POST['newemail']."','".$_POST['newnom']."','".$_POST['newprenom']."','".$_POST['newdate']."','".$_POST['newtel']."','".$_POST['newAdresse']."','".$_POST['newFormations']."','".$_POST['newExpérienceprofessionnelle']."','".$_POST['newlangues']."','".$_POST['newLoisirs']."','".$_POST['newcompetances']."')";
                        $sql1="insert into users(email_cv, nom_cv) values('".$_POST['newemail']."','".$_POST['newnom']."')";
                        $bdd->exec($sql);
                        $bdd->exec($sql1);


                        echo "<center>votre cv est enregisté en succès !!</center>";

                }

                else

                echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 

            }
        ?>

    </body>
</html>