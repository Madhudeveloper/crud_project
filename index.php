<?php include ('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">User Details</h2> 
  <a href="add.php"><input type="button" class="btn btn-primary" value="Add User"></a>
  <br>
  <br>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>City</th>
        <th>State</th>
        <th>DOB</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php 

        $sql = "SELECT * FROM `users`";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
          while($row = mysqli_fetch_assoc($result)) { 
            $id= $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            $city = $row['city'];
            $state = $row['state'];
            $dob = $row['dob'];

            echo '<tr>
              
              <td>'.$id.'</td>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>'.$password.'</td>
              <td>'.$city.'</td>
              <td>'.$state.'</td>
              <td>'.$dob.'</td>
              <td>
                <button class="btn btn-primary"><a href="edit.php?editid='.$id.'" style="color: #fff;">Edit</a></button>
                &nbsp
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" style="color: #fff;">Delete</a></button>
              </td>  
            </tr>';
          }  
        }
    
        ?>
    </tbody>
  </table>
</div>

</body>
</html>
