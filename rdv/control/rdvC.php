<?PHP
	include 'C:\wamp64\www\health-lab\rdv\config.php';
	require_once 'C:\wamp64\www\health-lab\rdv\model\rvd1.php';
	
	class rdv1C {
	//chercher par critére 
		public function fetchUtilisateur($id){
			$sql="SELECT * from rvd1 where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
	
				$user=$query->fetchall();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function afficherrdv(){
			$config = new config();
			$pdo=$config::getConnexion();
			$stmt = $pdo->query("SELECT * FROM rvd1");
			$users = $stmt->fetchAll();
				return $users;
		   }
		function ajouterrdv($rvd1){
			$config = new config();
			$pdo=$config::getConnexion();
			$data = [
				'nom_med' =>$rvd1->getnom_med(),
				'nom_patient' =>$rvd1->getnom_patient(),
				'jour' => $rvd1->getjour(),
				'heure' =>$rvd1->getheure()
				
			];
			$sql = "INSERT INTO rvd1 (nom_med,nom_patient,jour,heure) VALUES (  :nom_patient, :nom_med, :jour, :heure)";
			$stmt= $pdo->prepare($sql);
			$stmt->execute($data);
	}}
?>