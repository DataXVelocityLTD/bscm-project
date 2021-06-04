<?php

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles/admin.css">
</head>
<?php include('includes/header.php'); ?>
<body>
<div class="main">
	<div class="headers">
		<p class="admin-header">Admin Account</p>
		<p class="admin-subheader">Fill Profile</p>
	</div>

	<div class="register">
		<form name="registration" method="post" action="" enctype="multipart/form-data">
			<div class="info">
				<label>Surname: </label>
				<input type="text" class="text" value="" name="s_name" required>
			</div>

			<div class="info">
				<label>First Name: </label>
				<input type="text" class="text" value="" name="f_name" required>
			</div>

			<div class="info">
				<label>Other Names: </label>
				<input type="text" class="text" value="" name="other_names">
			</div>
			<div class="info">
				<label for="gender">Select a gender:</label>
				<select class="gender-select" style="position: relative; top:0px" name="gender" id="gender">
					<option value="">Select a gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="others">Others</option>
				</select>
			</div>

			<div class="info">
				<label for="phone">Enter your phone number:</label>
				<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
			</div>
			<br><br>
			<p class="office-info">Office Information</p>
			<div class="info">
				<label>Company Name: </label>
				<input type="text" class="text" value="" name="company" required>
			</div>

			<div class="info">
				<label>Designation: </label>
				<input type="text" class="text" name="designation">
			</div>

			<div class="info">
				<label>Address: </label>
				<input type="text" value="" name="address" required>
			</div><br><br>

			<div class="info">
				<label>Email: </label>
				<input type="email" value="" name="email" required>
			</div>

			<div class="info">
				<label>Region/State: </label>
				<input type="text" value="" name="state" required>
			</div>

			<div class="info">
				<label>Country: </label>
				<input type="text" value="" name="country" required>
			</div>

			<div class="info">
				<label>Phone Number: </label>
				<input type="tel" value="" name="phone_number" required>
			</div>

			<div class="info">
				<label>Government ID: </label>
				<input type="text" value="" name="govt_id" required>
			</div>

			<div class="info">
				<input class="upload-input" type="file" name="fileupload" value="fileupload" id="fileupload">
				<label class="upload-label" for="fileupload">Upload ID</label>
			</div>
			<br><br>
			<input class="submit-button" type="submit">

		</form>

	</div>
</div>
<div>
<br><br><br><br><br><br>


	<?php include('includes/footer.php'); ?>
</div>
</html>