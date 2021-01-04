<?php

include_once('confi.php');
$user_fun = new Userfunction();
$counter = 1;

if(isset($_POST['keyword']) && !empty(trim($_POST['keyword']))){

	$keyword = $user_fun->htmlvalidation($_POST['keyword']);

	$match_field['nom_patient'] = $keyword;
	$match_field['email'] = $keyword;
	$select = $user_fun->search("consultation", $match_field, "OR");

}
else{

	$select = $user_fun->select("consultation");

}


?>

				<table class="table" style="vertical-align: middle; text-align: center;">
				  <thead class="thead-dark">
					<tr>
					  	<th scope="col">#</th>
					  	<th scope="col">Name</th>
						  <th scope="col">prenom</th>
						<th scope="col">Gender</th>
					  	<th scope="col">Discription</th>
						  <th scope="col">Email</th>
						<th scope="col">Date</th>
						<th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  	<?php if($select){ foreach($select as $se_data){ ?>
					<tr>
					  <th scope="row"><?php echo $counter; $counter++; ?></th>
					  	<td><?php echo $se_data['nom_patient']; ?></td>
					  	<td><?php echo $se_data['pre_patient']; ?></td>
					  	<td><?php echo $se_data['gender']; ?></td>
						  <td><?php echo $se_data['discription']; ?></td>
						  <td><?php echo $se_data['email']; ?></td>
						<td><?php echo $se_data['date']; ?></td>
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