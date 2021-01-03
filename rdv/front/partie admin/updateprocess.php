<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if(isset($_GET['checkid']) && $_GET['checkid'] > 0){

		$update_ch_id = $user_fun->htmlvalidation($_GET['checkid']);

		$condition0['id'] = $update_ch_id;
		$select_pre = $user_fun->select_assoc("rvd1", $condition0);

		if($select_pre){

			$json['status'] = 0;
			$json['id_med'] = "NULL";
			$json['id_patient'] = "NULL";
			$json['jour'] = "NULL";
			$json['heure'] = "NULL";
			$json['msg'] = "Success";

		}
		else{

			$json['status'] = 1;
			$json['status'] = 0;
			$json['id_med'] = "NULL";
			$json['id_patient'] = "NULL";
			$json['jour'] = "NULL";
			$json['heure'] = "NULL";

		}

	}
	else{
			$json['status'] = 2;
			$json['status'] = 0;
			$json['id_med'] = "NULL";
			$json['id_patient'] = "NULL";
			$json['jour'] = "NULL";
			$json['heure'] = "NULL";
	}
}
else{
			$json['status'] = 3;
			$json['status'] = 0;
			$json['id_med'] = "NULL";
			$json['id_patient'] = "NULL";
			$json['jour'] = "NULL";
			$json['heure'] = "NULL";
}


echo json_encode($json);

?>