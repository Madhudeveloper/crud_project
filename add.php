<?php 

include ('db_connect.php');

if(isset($_POST['add_user']))
{
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$password = md5($_POST['password']);
	$city  = $_POST['city'];
	$state = $_POST['state'];
	$dob = $_POST['dob'];

	$sql = ("INSERT INTO users (name, email, password, city, state, dob) VALUES ('".$name."', '".$email."', '".$password."', '".$city."', '".$state."', '".$dob."')");

	$result = mysqli_query($conn, $sql);

	if($result)
	{
		echo "<script>alert('Users Added successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
	}
	else
	{
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Users</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h2 class="text-center">Add User</h2>
	<hr>
	<div class="container">
		<div class="row">
			<form method="POST">
				<div class="col-md-6">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter your Name" class="form-control" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="Enter your Email" class="form-control" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter your Password" class="form-control" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" placeholder="Enter your City" class="form-control" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>State</label>
						<select class="form-control" name="state">
							<option>Select Your State</option>
							<option>TamilNadu</option>
							<option>Andhrapradesh</option>
							<option>Telangana</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>DOB</label>
						<input type="date" name="dob" placeholder="Enter your DOB" class="form-control" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<button type="submit" name="add_user" class="btn btn-primary">Add User</button>
					</div>
				</div>
		    </form>
		</div>
	</div>

</body>
</html>