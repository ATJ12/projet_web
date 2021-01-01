<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if(isset($_GET['checkid']) && $_GET['checkid'] > 0){

		$update_ch_id = $user_fun->htmlvalidation($_GET['checkid']);

		$condition0['id'] = $update_ch_id;
		$select_pre = $user_fun->select_assoc("user", $condition0);

		if($select_pre){

			$json['status'] = 0;
			$json['nom'] = "NULL";
			$json['Prenom'] = "NULL";
			$json['Email'] = "NULL";
			$json['Login'] = "Fail";
			$json['bod'] = "NULL";
			$json['msg'] = "Success";

		}
		else{

			$json['status'] = 1;
			$json['nom'] = "NULL";
			$json['Prenom'] = "NULL";
			$json['Email'] = "NULL";
			$json['Login'] = "Fail";
			$json['bod'] = "NULL";

		}

	}
	else{
			$json['status'] = 2;
			$json['nom'] = "NULL";
			$json['Prenom'] = "NULL";
			$json['Email'] = "NULL";
			$json['Login'] = "Fail";
			$json['bod'] = "NULL";
			$json['msg'] = "Invalid Values Passed";
	}
}
else{
			$json['status'] = 3;
			$json['nom'] = "NULL";
			$json['Prenom'] = "NULL";
			$json['Email'] = "NULL";
			$json['Login'] = "Fail";
			$json['bod'] = "NULL";
			$json['msg'] = "Invalid Method Found";
}


echo json_encode($json);

?>