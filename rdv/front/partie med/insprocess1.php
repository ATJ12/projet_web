<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['nom_patient']) && isset($_POST['email']) && isset($_POST['pre_patient']) && isset($_POST['date']) && isset($_POST['discription'])){

		$nom_patient = $user_fun->htmlvalidation($_POST['nom_patient']);
		$pre_patient= $user_fun->htmlvalidation($_POST['pre_patient']);
		$gender = $user_fun->htmlvalidation($_POST['gender']);
		$discription = $user_fun->htmlvalidation($_POST['discription']);
		$email = $user_fun->htmlvalidation($_POST['email']);
		$date = $user_fun->htmlvalidation($_POST['date']);

		if((!preg_match('/^[ ]*$/', $nom_patient)) && (!preg_match('/^[ ]*$/', $pre_patient)) && (!preg_match('/^[ ]*$/', $gender)) && (!preg_match('/^[ ]*$/', $discription)) &&($email !=NULL) &&($date != NULL)){

			$field_val['nom_patient'] = $nom_patient;
			$field_val['pre_patient'] = $email;
			$field_val['gender'] = $gender;
			$field_val['discription'] = $discription;	
			$field_val['email'] = $email;
			$field_val['date'] = $date;
			$insert = $user_fun->insert("consultation", $field_val);

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

			if(preg_match('/^[ ]*$/', $nom_patient)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter Username";

			}
			if(preg_match('/^[ ]*$/', $pre_patient)){

				$json['status'] = 104;
				$json['msg'] = "Please Enter Email";
			}
			
			if(preg_match('/^[ ]*$/', $gender)){

				$json['status'] = 105;
				$json['msg'] = "Please Choice Gender";

			}
			if(preg_match('/^[ ]*$/', $discription)){

				$json['status'] = 106;
				$json['msg'] = "Please Select Country";

			}
			if(preg_match('/^[ ]*$/', $email)){

				$json['status'] = 107;
				$json['msg'] = "Please Select Country";

			}
			if($date == NULL){

				$json['status'] = 108;
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