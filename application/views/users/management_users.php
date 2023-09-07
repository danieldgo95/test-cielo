<main class="container mt-5">
	<h2>User Management</h2>
	<form action="<?php echo base_url('users/form_create'); ?>" method="post">
	<label for="input_first_name">First Name</label>
	<input type="text" name="first_name" class="form-control" id="input_first_name" placeholder="Enter First Name">
	<label for="input_Last_name">Last Name</label>
	<input type="text" name="last_name" class="form-control" id="input_last_name" placeholder="Enter Last Name">
	<label for="input_email">Email</label>
	<input type="email" name="email" class="form-control" id="input_email" placeholder="Enter Email">
	<label for="input_gender">Gender</label>
	<input type="text" name="gender" class="form-control" id="input_gender" placeholder="Enter Gender">
	<label for="input_country">Country</label>
	<input type="text" name="country" class="form-control" id="input_country" placeholder="Enter Country">
	<button type="submit" class="btn btn-primary mt-2">Create</button>
	</form>
</main>