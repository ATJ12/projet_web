<?php
    require_once "C:\wamp64\www\atoulier7\controler\utilisateurc.php";
    include_once "C:\wamp64\www\atoulier7\Model\Utilisateur.php";

	$utilisateurC = new UtilisateurC();
    $error = "";
    $Nom="";
    $Prenom="";
    $Email="";
    $Login="";
    $Mdp="";
    $id=$_GET["id"];
    $user=$utilisateurC->fetchUtilisateur($id);

    if (!empty($user)) {
        $Nom=$user[0]['Nom'];
        $Prenom=$user[0]['Prenom'];
        $Login=$user[0]['Email'];
        $Mdp=$user[0]['Mdp'];
    }
	if (
        isset($_POST["Nom"]) && 
        isset($_POST["Prenom"]) &&
        isset($_POST["Email"]) && 
        isset($_POST["Login"]) && 
        isset($_POST["Mdp"])
    ){
		if (
            !empty($_POST["Nom"]) && 
            !empty($_POST["Prenom"]) && 
            !empty($_POST["Email"]) && 
            !empty($_POST["Login"]) && 
            !empty($_POST["Mdp"])
        ) {
            $user = new Utilisateur(
                $_POST['Nom'],
                $_POST['Prenom'], 
                $_POST['Email'],
                $_POST['Login'],
                $_POST['Mdp']
            );
            var_dump($utilisateurC);
            $update = $utilisateurC->modifierUtilisateur($user, $id);
            header('Location:afficherutilisateur.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        <div id="error">
            <?php echo $error; ?>
        </div>
		<?php
			if (isset($_POST['id'])){
				$user = $utilisateurC->recupererUtilisateur1($_POST['id']);
            }
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="Nom" id="Nom" maxlength="20" value = "<?php echo $Nom; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="Prenom" id="Prenom" maxlength="20" value = "<?php echo $Prenom; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="Email" id="Email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $Email; ?>">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Login" id="Login" value = "<?php echo $Login; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="Mdp" id="Mdp" value = "<?php echo $Mdp; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
	</body>
</html>

                                                               