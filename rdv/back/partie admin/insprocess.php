<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['id_med']) && isset($_POST['id_patient']) 
	   && isset($_POST['jour'])&& isset($_POST['heure'] )) {

		$id_med = $user_fun->htmlvalidation($_POST['id_med']);
		$id_patient = $user_fun->htmlvalidation($_POST['id_patient']);
		$jour = $user_fun->htmlvalidation($_POST['jour']);
		$heure = $user_fun->htmlvalidation($_POST['heure']);

		if((!preg_match('/^[ ]*$/', $id_med)) && (!preg_match('/^[ ]*$/',$id_patient)) && 
		    ($jour != NULL)){


			$field_val['id_med'] = $id_med;
			$field_val['id_patient'] = $id_patient;
			$field_val['jour'] = $jour;
			$field_val['heure'] = $heure;

			$insert = $user_fun->insert("rvd1", $field_val);

			if($insert){
				$json['status'] = 101;
				$json['msg'] = "Data Successfully Inserted";
			}
			else{
				$json['status'] = 102;
				$json['msg'] = "Data Not Inserted";
			}

		}
		else{

			if(preg_match('/^[ ]*$/', $id_med)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter Username";

			}
			if(preg_match('/^[ ]*$/', $id_patient)){

				$json['status'] = 104;
				$json['msg'] = "Please Enter Email";

			}
			if(preg_match('/^[ ]*$/', $jour)){

				$json['status'] = 105;
				$json['msg'] = "Please Select date";

			}
			if(preg_match('/^[ ]*$/', $heure)){

				$json['status'] = 106;
				$json['msg'] = "Please Choice time";

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