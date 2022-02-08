<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in CodeIgniter - CREATE</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('crud/update_post')?>">
		<h2>UPDATE Operation in CRUD Application</h2>
		<?php //echo print_r($crud_data); ?>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname" value="<?php echo $crud_data->first_name; ?>" class="form-control" id="input1" />
			    </div>
			</div>
		
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname" value="<?php echo $crud_data->last_name; ?>" class="form-control" id="input1" placeholder="Last Name" />
			    </div>
			</div>
		
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" value="<?php echo $crud_data->email_id; ?>" class="form-control" id="input1" placeholder="E-Mail" />
			    </div>
			</div>
		
			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" <?php if($crud_data->gender == 'male'){ echo "checked";} ?> value="male"> Male
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" <?php if($crud_data->gender == 'female'){ echo "checked";} ?> value="female"> Female
			  </label>
			</div>
			</div>
		
			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Age</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Select Your Age</option>
					<option value="20" <?php if($crud_data->age == 20){ echo "selected";} ?>>20</option>
					<option value="21" <?php if($crud_data->age == 21){ echo "selected";} ?>>21</option>
					<option value="22" <?php if($crud_data->age == 22){ echo "selected";} ?>>22</option>
					<option value="23" <?php if($crud_data->age == 23){ echo "selected";} ?>>23</option>
					<option value="24" <?php if($crud_data->age == 24){ echo "selected";} ?>>24</option>
					<option value="25" <?php if($crud_data->age == 25){ echo "selected";} ?>>25</option>
				</select>
			</div>
			</div>
			<input type="hidden" value="<?php echo $crud_data->id; ?>"  name="id" />
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Actualizar" />
		</form>
	</div>
</div>
</body>
</html>