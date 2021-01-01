<?php
	include 'C:\wamp64\www\health-lab\rdv\config.php';
if(isset($_POST["id_rdv"])){
    $config = new config();
    $pdo=$config::getConnexion();
    $sql = "UPDATE rvd1 SET `status`= 1  WHERE `id`=".$_POST["id_rdv"];
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    $result = $_POST["id_rdv"]." confirmed";
    echo $result;
}
?>


    