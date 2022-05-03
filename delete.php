<?php 

include('db_connect.php');

if(isset($_GET['deleteid']))
{
	$id= $_GET['deleteid'];

	$sql = "DELETE FROM users WHERE id = $id";

	$result = mysqli_query($conn,$sql);

	if($result)
	{
		echo "<script>alert('Delete Users successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
	}
}


?>