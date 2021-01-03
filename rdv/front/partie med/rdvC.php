<?PHP
	include 'C:\wamp64\www\health-lab\rdv\front\partie med\confi.php';
	require_once 'C:\wamp64\www\health-lab\rdv\front\partie med\rvd1.php';
	
	class rdv1C {
	//chercher par critére 
		public function fetchUtilisateur($id){
			$sql="SELECT * from rvd1 where id=$id";
			$sql="SELECT * from rdv.utlisateur1 where Nom=$Nom_patient";
			$sql="SELECT * from rdv.utlisateur1  where Prenom=$Pre_patient";
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
			$stmt = $pdo->query("SELECT * FROM consultation");
			$users = $stmt->fetchAll();
				return $users;
		   }
		function ajouterrdv($rvd1){
			$config = new config();
			$pdo=$config::getConnexion();
			$data = [
				'nom_patient' =>$consultation->getnom_patient(),
				'pre_patient' =>$consultation->getpre_patient(),
				'gender' =>$consultation->getpre_gender(),
				'dicribtion' =>$consultation->getpre_discribtion(),
				'email' =>$consultation->getpre_email()

			];
			$sql = "INSERT INTO consultation(nom_patient,pre_med,gender,discribtion,email) VALUES (:nom_patient,:pre_med,:gender,:discribtion,:email)";
			$stmt= $pdo->prepare($sql);
			$stmt->execute($data);
	}
}

?>