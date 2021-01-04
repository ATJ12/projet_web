<?php
    require_once 'C:\wamp64\www\health-lab\rdv\model\rvd1.php';
    require_once 'C:\wamp64\www\health-lab\rdv\control\rdvC.php';
    include 'C:\wamp64\www\medcin\model\utilisateur.php';


    $error = "";

    // create user
    $user = null;

    // create an instance of the controller     Mohamed Ali mohamed.ali@esprit.tn med med
    $userC = new rdv1C();
   if (
        isset($_POST["nom_med"]) &&       
        isset($_POST["nom_patient"])
       // isset($_POST["jour"]) && 
        //isset($_POST["huere"]) 
   
    ) {
        if (
            !empty($_POST["nom_med"]) && 
            !empty($_POST["nom_patient"]) 
           // !empty($_POST["jour"]) && 
            //!empty($_POST["huere"]) 
        ) {
            $user = new rvd1(           
                $_POST['nom_medcin'],
                $_POST['Nom_patient'],
                $_POST['jour'],
                $_POST['heure']
               
            );
            $userC->ajouterrdv($user);
            var_dump($user);
            header('Location:afficherrdv.php');
        }
        else
            $error = "Missing information";
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
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
    <header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="email">Nom_med:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Nom_med" id="nom_med" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Nom_patient:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Nom_patient" id="nom_patient" maxlength="20">
                    </td>
                </tr>
                <tr>
                <td>
                        <label for="date">jour:
                            </td>
                    <td>
                        <input type="date" name="jour" id="jour">
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Heure:
                        </label>
                    </td>
                    <td>
                    <input type="time" id="heure" name="heure"
       min="09:00" max="18:00" required>

<small>Office hours are 9am to 6pm</small>                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
            </table>
        </form>
    </body>
</html>