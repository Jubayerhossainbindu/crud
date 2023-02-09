<?php
include "connect.php";
if(isset($_POST['submit'])){
    
    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into `student-info`(firstname,lastname,email,password)
    values(' $firstname','$lastname','$email','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo("data inserted succecssfully");
        header('location:display.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-php</title>
    <link rel="stylesheet" href="bootsrap/bootstrap.min.css">
</head>
<body>




<div class="container">
<form method="POST" >
  <div class="form-group">
    <label>Firstname</label>
    <input type="text" name="firstname" class="form-control"   placeholder="Enter firstname">
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" name="lastname" class="form-control"   placeholder="Enter lastname">
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" name="email" class="form-control"   placeholder="Enter email">
    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>

  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"   placeholder="Enter Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>