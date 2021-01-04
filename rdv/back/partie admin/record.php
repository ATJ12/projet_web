<?php

include_once('config.php');
$user_fun = new Userfunction();
$counter = 1;

if(isset($_POST['keyword']) && !empty(trim($_POST['keyword']))){

	$keyword = $user_fun->htmlvalidation($_POST['keyword']);

	$match_field['jour'] = $keyword;
	$match_field['id'] = $keyword;
	$select = $user_fun->search("rvd1", $match_field, "OR");

}
else{

	$select = $user_fun->select("rvd1");

}


?>

				<table class="table" style="vertical-align: middle; text-align: center;">
				  <thead class="thead-dark">
					<tr>
					  	<th scope="col">#</th>
					  	<th scope="col">Medcin</th>
					  	<th scope="col">Patient</th>
						<th scope="col">Jour</th>
						<th scope="col">Heure</th>
						<th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  	<?php if($select){ foreach($select as $se_data){
						 
						$match_field['id'] = $se_data['id_med'];
						$select_medecin = $user_fun->search("user", $match_field);
						$se_data['id_med'] = $select_medecin[0]['Nom'];
						 
						$match_field['id'] = $se_data['id_patient'];
						$select_medecin = $user_fun->search("user", $match_field);
						$se_data['id_patient'] = $select_medecin[0]['Nom'];
						 ?>
					<tr>
					  <th scope="row"><?php echo $counter; $counter++; ?></th>
					  	<td><?php echo $se_data['id_med'] ; ?></td>
					  	<td><?php echo $se_data['id_patient']; ?></td>
					  	<td><?php echo $se_data['jour']; ?></td>
						<td><?php echo $se_data['heure']; ?></td>
						<td>
							<button type="button" class="btn btn-danger editdata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#updateModalCenter">Update</button>
							<button type="button" class="btn btn-danger deletedata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#deleteModalCenter">Delete</button>
							<?php if(!$se_data['status']) { 
							   echo '<button type="button" class="btn btn-info validatedata" 
							   data-dataid="'. $se_data['id'].'" data-toggle="modal" 
							   data-target="#validateModalCenter">valider</button>';
							   
							} 
							else{
								echo '<button type="button" class="btn btn-warning annulerdata" 
							   data-dataid="'. $se_data['id'].'" data-toggle="modal" 
							   data-target="#annulerModalCenter">Annuler le rdv</button>';
							}
							?>
						</td>
					</tr>
					<?php }}else{ echo "<tr><td colspan='7'><h2>No Result Found</h2></td></tr>"; } ?>
				  </tbody>
				</table>	