<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['username']) && isset($_POST['email']) 
	   && isset($_POST['bod']) ) {

		$username = $user_fun->htmlvalidation($_POST['username']);
		$email = $user_fun->htmlvalidation($_POST['email']);
		$prenom = $user_fun->htmlvalidation($_POST['Prenom']);
		$bod = $user_fun->htmlvalidation($_POST['bod']);
		$login = $user_fun->htmlvalidation($_POST['Login']);

		if((!preg_match('/^[ ]*$/', $username)) && (!preg_match('/^[ ]*$/', $email)) && 
		    ($bod != NULL)){


			$field_val['Nom'] = $username;
			$field_val['Prenom'] = $prenom;
			$field_val['Login'] = $username;
			$field_val['Email'] = $email;
			$field_val['DOB'] = $bod;

			$insert = $user_fun->insert("user", $field_val);

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

			if(preg_match('/^[ ]*$/', $username)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter Username";

			}
			if(preg_match('/^[ ]*$/', $email)){

				$json['status'] = 104;
				$json['msg'] = "Please Enter Email";

			}
			if(preg_match('/^[ ]*$/', $country)){

				$json['status'] = 105;
				$json['msg'] = "Please Select Country";

			}
			if(preg_match('/^[ ]*$/', $gender)){

				$json['status'] = 106;
				$json['msg'] = "Please Choice Gender";

			}
			if($bod == NULL){

				$json['status'] = 107;
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