<?PHP
	include 'C:\wamp64\www\health-lab\rdv\config.php';
	require_once 'C:\wamp64\www\health-lab\rdv\model\rvd1.php';
	
	class rdv1C {
	//chercher par critére 
		public function fetchUtilisateur($id){
			$sql="SELECT * from rvd1 where id=$id";
			$sql="SELECT * from rdv.user where id=$id_med";
			$sql="SELECT * from rdvcin1.user where Nom =$nom_med";
			$sql="SELECT * from rdv.utlisateur1 where id=$id_patient";
			$sql="SELECT * from rdv.utlisateur1  where Nom=$nom_patient";
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

		public function modifierrvd1($user, $id){
			$config = new config();
			$pdo=$config::getConnexion();
			$data = [
				'jour' => $user->getjour(),
				'heure'=>$user->getheure(),
				'id'=>$id
			];
			var_dump($user);
			$sql = "UPDATE utilisateur SET `jour`= :jour , `heure`= :heure WHERE `id`=:id";
			$stmt= $pdo->prepare($sql);
			$stmt->execute($data);
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
				'id_med' => $rvd1->getid_med(),
				'id_patient' => $rvd1->getid_patient(),
				'jour' => $rvd1->getjour(),
				'heure' =>$rvd1->getheure(),
				'nom_med' =>$rvd1->getnom_med(),
				'nom_patient' =>$rvd1->getnom_patient()
			];
			$sql = "INSERT INTO rvd1 (id_med,id_patient,jour,heure,nom_med,nom_patient) VALUES ( :id_med, :id_patient, :jour, :heure, :nom_patient, :nom_med)";
			$stmt= $pdo->prepare($sql);
			$stmt->execute($data);
	}
	function supprimerrdv($id){
		$config = new config();
		$db=$config::getConnexion();
		$sql="DELETE FROM rvd1 WHERE id= :id";
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}



	function recupererUtilisateur1($id){
		$sql="SELECT * from rvd1 where id=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();
			
			$user = $query->fetchall(PDO::FETCH_OBJ);
			return $user;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}



}
}
?>