<?php
require_once 'C:\wamp64\www\health-lab\rdv\front\partie med\rdvC.php';
require_once 'C:\wamp64\www\health-lab\rdv\front\partie med\rvd1.php';

$error = "";

// create user
$user = null;

// create an instance of the controller     Mohamed Ali mohamed.ali@esprit.tn med med
$userC = new rdv1C ();
if (
    isset($_POST["nom_patient"]) &&       
    isset($_POST["pre_patient"]) &&
    isset($_POST["gender"]) && 
    isset($_POST["discribtion"]) && 
    isset($_POST["email"])
) {
    if (
        !empty($_POST["nom_patient"]) && 
        !empty($_POST["pre_patient"]) && 
        !empty($_POST["gender"]) && 
        !empty($_POST["discribtion"]) && 
        !empty($_POST["email"])
    ) {
        $user = new Utilisateur(           
            $_POST['nom_patient'],
            $_POST['pre_patient'], 
            $_POST['gender'],
            $_POST['discribtion'],
            $_POST['email']
        );
        $userC->ajouterUtilisateur($user);
        
        header('Location:index.php');
    }
    else
        $error = "Missing information";
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.box-title{
			border-radius: 5px;
			box-shadow: 0px 0px 3px 1px gray;
			padding: 10px 0px;
		}
		.error-msg{
			color: #dc3545;
			font-weight: 600;
		}
		.success-msg{
			color: green;
			font-weight: 600;
		}
		.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Site Metas -->
   <title>Health Lab - Responsive HTML5 Template</title>  
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/favicon.icon" type="image/x-icon">
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Pogo Slider CSS -->
   <link rel="stylesheet" href="css/pogo-slider.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style.css">    
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
   <!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Display</title>
</head>
   <body>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
   
   <!-- Start top bar -->
   <div class="main-top">
	   <div class="container">
		   <div class="row">
			   <div class="col-lg-6">
				   <div class="left-top">
					   <a class="new-btn-d br-2" href="#"><span>Book Appointment</span></a>
					   <div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
				   </div>
			   </div>
			   <div class="col-lg-6">
				   <div class="wel-nots">
					   <p>Welcome to Our Health Lab!</p>
				   </div>
				   <div class="right-top">
					   <ul>
						   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						   <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					   </ul>
				   </div>
			   </div>
		   </div>
	   </div>
   </div>
   <div>
   <ul>
   <div class="navbar">
  <a href="index.php">LISTE des patients</a>
  <a href="">MESSAGES</a>
  <a href="">Espace des ordaunances</a>
  </div> 
</div>
<form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20"></td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" >
                    </td>
                </tr>
             
                <tr>
                    <td></td>
                   
                </tr>
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn">
                    </td>
                </tr>
            </table>
        </form>
</body>