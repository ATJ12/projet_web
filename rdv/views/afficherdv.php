<?PHP
	include 'c:\wamp64\www\health-lab\rdv\control\rdvC.php';
	include 'C:\wamp64\www\medcin\model\utilisateur.php';
	$rdv1C =new rdv1C();
	$listeUsers=$rdv1C->afficherrdv();
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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
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
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>id-med</th>
				<th>id-patient</th>
				<th>jour</th>
				<th>heure</th>
				<th>Nom-med</th>
				<th>Nom-patient</th>
				<th>supprimer</th>
				<th>modifier</th>
				<th>confirmer </th>
			</tr>

			<?php
				foreach($listeUsers as $user){
					$username='';

					$Utilisateur=new Utilisateur($user['id_med']);
					$username=$Utilisateur->getNomById();
	
					$Utilisateur2=new Utilisateur($user['id_patient']);
					$username2=$Utilisateur2->getpatientById();
	
					?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['id_med']; ?></td>
					<td><?PHP echo $user['id_patient']; ?></td>
					<td><?PHP echo $user['jour']; ?></td>
					<td><?PHP echo $user['heure']; ?></td>
					<td><?PHP echo $username; ?></td>
					<td><?PHP echo $username2; ?></td>
					<td>
						<!--form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form-->
						<a href="supprimerrdv.php?id=<?PHP echo $user['id']; ?>"> supprimer </a>
					</td>
					<td>
						<a href="modifierrdv.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
					</td>
					<td>
					<button onclick="myFunction(<?PHP echo $user['id']; ?>)">Confirmer le rdv</button>
					
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
		<script>
jQuery(myFunction1() {
  jQuery('#delete').click(function() {
    jQuery.ajax({
      type: 'POST',
      url: "./admin.php?page=delete_contenu_nouvelle",
      timeout: 3000,
      success: function() {
        alert("OK"); },
        error: function() {
          alert('La requête n\'a pas abouti'); }
        });   
  }); 
});

</script>	
<script>
function myFunction(id) {
  if (confirm('Voulez vous valider le rendez-vous?')) {
	// Save it!
	//alert(id);
	$.ajax({
	type: "POST",
	url: "confirmerrdv.php",
	data: "id_rdv="+id,
	success: function(data){
		phpResult = data;
		alert(phpResult);
	// document.getElementById("demo").innerHTML = "The text from the intro paragraph is " + phpResult;
	}
	});
	//console.log('Thing was saved to the database.');
	} else {
	// Do nothing!
	console.log('Thing was not saved to the database.');
	}
}
</script>
	</body>
</html>