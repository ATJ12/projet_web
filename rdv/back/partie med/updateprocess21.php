<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['nom_patient']) && isset($_POST['pre_patient']) && isset($_POST['discription']) && isset($_POST['date']) && isset($_POST['gender']) && isset($_POST['dataval'])){

		$nom_patient = $user_fun->htmlvalidation($_POST['nom_patient']);
		$pre_patient = $user_fun->htmlvalidation($_POST['pre_patient']);
		$email = $user_fun->htmlvalidation($_POST['email']);
		$discription = $user_fun->htmlvalidation($_POST['discription']);
		$date = $user_fun->htmlvalidation($_POST['date']);
		$gender = $user_fun->htmlvalidation($_POST['gender']);
		$update_id = $user_fun->htmlvalidation($_POST['dataval']);

		if((!preg_match('/^[ ]*$/', $)) && (!preg_match('/^[ ]*$/', $email)) && (!preg_match('/^[ ]*$/', $discription)) && (!preg_match('/^[ ]*$/', $gender)) && ($date != NULL)){

			$condition['id'] = $update_id;

			$field_val['nom_patient'] = $nom_patient;
			$field_val['pre_patient'] = $pre_patient;
			$field_val['gender'] = $gender;
			$field_val['discription'] = $discription;
			$field_val['email'] = $email;
			$field_val['date'] = $bod;	

			$update = $user_fun->update("user", $field_val, $condition);

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

			if(preg_match('/^[ ]*$/', $nom_patient)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter Username";

			}
			if(preg_match('/^[ ]*$/', $pre_patient)){

				$json['status'] = 104;
				$json['msg'] = "Please Enter Email";

			}
			if(preg_match('/^[ ]*$/', $discription)){

				$json['status'] = 105;
				$json['msg'] = "Pleasedzdz";

			}
			if(preg_match('/^[ ]*$/', $gender)){

				$json['status'] = 106;
				$json['msg'] = "Please Choice Gender";

			}
			if(preg_match('/^[ ]*$/', $email)){

				$json['status'] = 107;
				$json['msg'] = "Please Enter Email";

			}
			if($bod == NULL){

				$json['status'] = 10;
				$json['msg'] = "Please Enter BOD";

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