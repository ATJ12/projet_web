<?PHP
     include 'C:\wamp64\www\health-lab\rdv\control\rdvC.php';
	$rdv1C=new rdv1C();
	if (isset($_GET["id"])){
		$rdv1C->supprimerrdv($_GET["id"]);
		header('Location:afficherrdv.php');
	}

?>