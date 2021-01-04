<?php

include_once('config.php');
$user_fun = new Userfunction();
$counter = 1;

if(isset($_POST['keyword']) && !empty(trim($_POST['keyword']))){

	$keyword = $user_fun->htmlvalidation($_POST['keyword']);

	$match_field['Nom'] = $keyword;
	$match_field['Prenom'] = $keyword;
	$select = $user_fun->search("user", $match_field, "OR");

}
else{

	$select = $user_fun->select("user");

}


?>

				<table class="table" style="vertical-align: middle; text-align: center;">
				  <thead class="thead-dark">
					<tr>
					  	<th scope="col">#</th>
					  	<th scope="col">Nom</th>
					  	<th scope="col">Prenom</th>
						<th scope="col">Login</th>
					  	<th scope="col">Email</th>
						<th scope="col">DOB</th>
						<th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  	<?php if($select){ foreach($select as $se_data){ 
						 if($se_data['type_user']=='patient')
						 {
						  ?>
				
					<tr>
					  <th scope="row"><?php echo $counter; $counter++; ?></th>
					  	<td><?php echo $se_data['Nom']; ?></td>
					  	<td><?php echo $se_data['Prenom']; ?></td>
					  	<td><?php echo $se_data['Login']; ?></td>
						<td><?php echo $se_data['Email']; ?></td>
						<td><?php echo $se_data['DOB']; ?></td>

						<td>
							<button type="button" class="btn btn-danger editdata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#updateModalCenter">Update</button>
							<button type="button" class="btn btn-danger deletedata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#deleteModalCenter">Delete</button>
						</td>
					</tr>
					<?php 
						 }
				}}else{ echo "<tr><td colspan='7'><h2>No Result Found</h2></td></tr>"; } ?>
				  </tbody>
				</table>	