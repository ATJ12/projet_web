<?php

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.box-title{
			border-radius: 5px;
			box-shadow: 0px 0px 3px 1px gray;
			padding: 10px 0px;
		}
		.error-msg{
			color: #dc3545;
			font-weight: 600;
		}
		.success-msg{
			color: green;
			font-weight: 600;
		}
	</style>
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Site Metas -->
   <title>Health Lab - Responsive HTML5 Template</title>  
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/favicon.icon" type="image/x-icon">
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Pogo Slider CSS -->
   <link rel="stylesheet" href="css/pogo-slider.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style.css">    
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
   <!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Display</title>
</head>
   <body>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
   
   <!-- Start top bar -->
   <div class="main-top">
	   <div class="container">
		   <div class="row">
			   <div class="col-lg-6">
				   <div class="left-top">
					   <a class="new-btn-d br-2" href="#"><span>Book Appointment</span></a>
					   <div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
				   </div>
			   </div>
			   <div class="col-lg-6">
				   <div class="wel-nots">
					   <p>Welcome to Our Health Lab!</p>
				   </div>
				   <div class="right-top">
					   <ul>
						   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						   <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					   </ul>
				   </div>
			   </div>
		   </div>
	   </div>
   </div>
		<div class="container">
			<div class="row m-3 text-center">
				<div class="col-lg-12">
				</div>
			</div>
			<div  class="row justify-content-center">
				<div class="col-lg-6">
				<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Add rendez_vous</button>	
				</div>
				<div class="col-lg-6">
					<input type="text" id="search" class="form-control" placeholder="Search For patient">
				</div>
			</div>
			<div class="row mt-5" id="tbl_rec">
			<tr>tat</tr>
			</div>
		</div>
	</div>
	
<!-- Insert Design Modal -->
	
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="ins_rec">
	      <div class="modal-body">
			  	<div class="form-group">
					<label><b>ID_MED</b></label>
					<input type="text" name="id_med" class="form-control" placeholder="medcin">
					<span class="error-msg" id="msg_1"></span>
			  	</div>
				  <div class="form-group">
					<label><b>ID_PATIENT</b></label>
					<input type="text" name="id_patient" class="form-control" placeholder="patient">
					<span class="error-msg" id="msg_1"></span>
			  	</div>
				<div class="form-group">
					<label><b>Jour</b></label>
					<input type="date" name="jour" class="form-control">
					<span class="error-msg" id="msg_4"></span>
			  	</div>
				  <div class="form-group">
					<label><b>heure</b></label>
					<input type="time" name="heure" class="form-control" placeholder="Username">
					<span class="error-msg" id="msg_1"></span>
			  	</div>
				<div class="form-group">
					<span class="success-msg" id="sc_msg"></span>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" id="close_click" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" >Add Record</button>
	      </div>
      </form>
    </div>
  </div>
</div>
	
<!-- End Insert Modal -->
		
<!-- Update Design Modal -->
	
<div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalCenterTitle">Update Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="updata">
      <div class="modal-body">
		  	<div class="form-group">
				<label><b>ID_MED</b></label>
				<input type="text" class="form-control" name="id_med" id="upd_1" placeholder="Username">
				<span class="error-msg" id="umsg_1"></span>
		  	</div>
			  <div class="form-group">
					<label><b>ID_PATIENT</b></label>
					<input type="text" name="id_patient" class="form-control" placeholder="Username">
					<span class="error-msg" id="msg_2"></span>
			  	</div>
				  <div class="form-group">
				<label><b>Jour</b></label>
				<input type="date" class="form-control" name="jour" id="upd_2" placeholder="YourEmail@email.com">
				<span class="error-msg" id="umsg_2"></span>
		  	</div>
			
				  <div class="form-group">
					<label><b>heure</b></label>
					<input type="time" name="heure" class="form-control" placeholder="Username">
					<span class="error-msg" id="msg_3"></span>
			  	</div>
			<div class="form-group">
				<input type="hidden" name="dataval" id="upd_7">
				<span class="success-msg" id="umsg_6"></span>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_cancle">Cancle</button>
        <button type="submit" class="btn btn-primary">Update Record</button>
      </div>
      </form>	
    </div>
  </div>
</div>	
	
<!-- End Update Design Modal -->
	
<!-- Delete Design Modal -->
	
<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalCenterTitle">Are You Sure Delete This Record ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <p>If You Click On Delete Button Record Will Be Deleted. We Don't have Backup So Be Carefull.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="de_cancle" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="deleterec">Delete Now</button>
      </div>
    </div>
  </div>
</div>	
	
<!-- End Delete Design Modal -->

<!-- Validate RDV Design Modal -->
	
<div class="modal fade" id="validateModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="validateModalCenterTitle">Are You Sure to validate this appointment ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <p>If You Click On Validate Button Record appointment Will Be validated.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="validaterec_cancle" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="validaterec">Validate Now</button>
      </div>
    </div>
  </div>
</div>	
<!--annuler le confirmation de rdv-->
<div class="modal fade" id="annulerModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="validateModalCenterTitle">Are You Sure to annulate this appointment ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <p>If You Click On annulate Button Record appointment Will Be unvalidated.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="annulerrec_cancle" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="annulerrec">Annulate Now</button>
      </div>
    </div>
  </div>
</div>	
	
<!-- End Validate RDV Design Modal -->
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>


<script type="text/javascript">
	
$(document).ready(function (){
	$('#tbl_rec').load('record.php');

	$('#search').keyup(function (){
		var search_data = $(this).val();
		$('#tbl_rec').load('record.php', {keyword:search_data});
	});

	//insert Record

	$('#ins_rec').on("submit", function(e){
		e.preventDefault();
		$.ajax({

			type:'POST',
			url:'insprocess.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#close_click').trigger('click');
				}
				else if(json.status == 102){
					$('#sc_msg').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 103){
					$('#msg_1').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 104){
					$('#msg_2').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 105){
					$('#msg_3').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 106){
					$('#msg_4').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 107){
					$('#msg_5').text(json.msg);
					console.log(json.msg);
				}
				else{
					console.log(json.msg);
				}

			}

		});

	});

	//select data

	$(document).on("click", "button.editdata", function(){
		$('#umsg_1').text("");
		$('#umsg_2').text("");
		$('#umsg_3').text("");
		$('#umsg_4').text("");
		$('#umsg_5').text("");
		$('#umsg_6').text("");
		$('#umsg_7').text("");
		var check_id = $(this).data('dataid');
		$.getJSON("updateprocess.php", {checkid : check_id}, function(json){
			if(json.status == 0){
				$('#upd_1').val(json.ID_MED);
				$('#upd_3').val(json.ID_PATIENT);
				$('#upd_3').val(json.jour);
				$('#upd_2').val(json.Heure);
				$('#upd_7').val(check_id);
				if(json.gender == 'Male'){
					$('#upd_5').prop("checked", true);
				}
				else{
					$('#upd_6').prop("checked", true);
				}
			}
			else{
				console.log(json.msg);
			}
		});
	});

	//Update Record

	$('#updata').on("submit", function(e){
		e.preventDefault();

		$.ajax({

			type:'POST',
			url:'updateprocess2.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#up_cancle').trigger('click');
				}
				else if(json.status == 102){
					$('#umsg_6').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 103){
					$('#umsg_1').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 104){
					$('#umsg_2').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 105){
					$('#umsg_3').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 107){
					$('#umsg_4').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 106){
					$('#umsg_5').text(json.msg);
					console.log(json.msg);
				}

				else{
					console.log(json.msg);
				}

			}

		});

	});

	//delete record

	var deleteid;

	$(document).on("click", "button.deletedata", function(){
		deleteid = $(this).data("dataid");
	});

	$('#deleterec').click(function (){
		$.ajax({
			type:'POST',
			url:'deleteprocess.php',
			data:{delete_id : deleteid},
			success:function(data){
				var json = JSON.parse(data);
				if(json.status == 0){
					$('#tbl_rec').load('record.php');
					$('#de_cancle').trigger("click");
					console.log(json.msg);
				}
				else{
					console.log(json.msg);
				}
			}
		});
	});

	//Validate rdv record

	var deleteid;

	$(document).on("click", "button.validatedata", function(){
		deleteid = $(this).data("dataid");
	});

	$('#validaterec').click(function (){
		$.ajax({
			type:'POST',
			url:'validateprocess.php',
			data:{delete_id : deleteid},
			success:function(data){
				var json = JSON.parse(data);
		//		if(json.status == 0){
					$('#tbl_rec').load('record.php');
					$('#validaterec_cancle').trigger("click");
					console.log(json.msg);
		//		}
		//		else{
		//			console.log(json.msg);
		//		}
			}
		});
	});


//Annulate rdv record

var deleteid;

$(document).on("click", "button.annulerdata", function(){
	deleteid = $(this).data("dataid");
});

$('#annulerrec').click(function (){
	$.ajax({
		type:'POST',
		url:'annulerprocess.php',
		data:{delete_id : deleteid},
		success:function(data){
			var json = JSON.parse(data);
	//		if(json.status == 0){
				$('#tbl_rec').load('record.php');
				$('#annulerrec_cancle').trigger("click");
				console.log(json.msg);
	//		}
	//		else{
	//			console.log(json.msg);
	//		}
		}
	});
});

});

</script>

</body>
</html>
