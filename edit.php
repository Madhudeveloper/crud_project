<?php 

include ('db_connect.php');

$id = $_GET['editid'];

$sql = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$city = $row['city'];
$state = $row['state'];
$dob = $row['dob'];

if(isset($_POST['update_user']))
{
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$password = md5($_POST['password']);
	$city  = $_POST['city'];
	$state = $_POST['state'];
	$dob = $_POST['dob'];

	$sql = ("UPDATE `users` SET `id`='$id',`name`='$name',`email`='$email',`password`='$password',`city`='$city',`state`='$state',`dob`='$dob' WHERE id = $id");

	$result = mysqli_query($conn, $sql);

	if($result)
	{
		echo "<script>alert('Users Updated successfully');</script>";
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
						<input type="text" name="name" placeholder="Enter your Name" class="form-control" required="" value="<?php echo $name; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="Enter your Email" class="form-control" required="" value="<?php echo $email; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter your Password" class="form-control" required="" value="<?php echo $password ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" placeholder="Enter your City" class="form-control" required="" value="<?php echo $city; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>State</label>
						<select class="form-control" name="state" value="<?php echo $state; ?>">
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
						<input type="date" name="dob" placeholder="Enter your DOB" class="form-control" required="" value="<?php echo $dob ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<button type="submit" name="update_user" class="btn btn-primary">Update User</button>
					</div>
				</div>
		    </form>
		</div>
	</div>

</body>
</html>