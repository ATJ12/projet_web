<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['id_med']) && isset($_POST['id_patient']) && isset($_POST['jour']) && isset($_POST['heure'])&& isset($_POST['dataval']) ){

		$id_med= $user_fun->htmlvalidation($_POST['id_med']);
		$id_patient = $user_fun->htmlvalidation($_POST['id_patient']);
		$jour= $user_fun->htmlvalidation($_POST['jour']);
		$heure = $user_fun->htmlvalidation($_POST['heure']);
		$update_id = $user_fun->htmlvalidation($_POST['dataval']);

		if((!preg_match('/^[ ]*$/', $id_med)) &&
		 (!preg_match('/^[ ]*$/', $id_patient)) && ($jour != NULL)){
			$condition['id'] = $update_id;
			$field_val['id_med'] = $id_med;
			$field_val['id_patient'] = $id_patient;
			$field_val['jour'] = $jour;
			$field_val['heure'] = $heure;
			$update_id = $user_fun->htmlvalidation($_POST['dataval']);
			$update = $user_fun->update("rvd1", $field_val, $condition);
		

			if($update){
				$json['status'] = 101;
				$json['msg'] = "Data Successfully Updated";
			}
			else{
				$json['status'] = 102;
				$json['msg'] = "Data Not Updated";
			}

		}
		else{

			if(preg_match('/^[ ]*$/', $id_med)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter id de medcin";

			}
			if(preg_match('/^[ ]*$/', $id_patient)){

				$json['status'] = 104;
				$json['msg'] = "Please Enterid de patient";

			}

			if($jour == NULL){

				$json['status'] = 107;
				$json['msg'] = "Please Enter le jour";

			}

		}

	}
	else{

		$json['status'] = 108;
		$json['msg'] = "Invalid Values Passed";

	}

}
else{

	$json['status'] = 109;
	$json['msg'] = "Invalid Method Found";

}


echo json_encode($json);

?>