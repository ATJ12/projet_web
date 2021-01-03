<?php
    require_once "C:\wamp64\www\atoulier7\model\utilisateur.php";
    require_once "C:\wamp64\www\atoulier7\controler\utilisateurC.php";

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller     Mohamed Ali mohamed.ali@esprit.tn med med
    $userC = new UtilisateurC();
    if (
        isset($_POST["nom"]) &&       
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["login"]) && 
        isset($_POST["pass"])
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["pass"])
        ) {
            $user = new Utilisateur(           
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['login'],
                $_POST['pass']
            );
            $userC->ajouterUtilisateur($user);
            
            header('Location:affichierutilisateur.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherutilisateur.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom patient:
                        </label>
                    </td>
                    <td><input type="text" name="nom_pateint" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="pre_patient" id="prenom" maxlength="40"></td>
                </tr>
                
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Gender:
                            <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter">
                            <label for="subscribeNews">MALE</label>
                            <label for="subscribeNews">FEMALE</label>
                        </label>
                    </td>
                    <td>
                    <input type="text" name"discr"
       cols="40" 
       rows="5" 
       style="width:200px; height:50px;" 
       name="Text1" 
       id="Text1" 
       value="" />

                    </td>
                </tr>
             
                </tr>
            </table>
        </form>
    </body>
</html>