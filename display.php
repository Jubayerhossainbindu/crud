<?php
include "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link rel="stylesheet" href="bootsrap/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-success text-light my-5"><a href="user.php" class="text-light">add user</a></button>        
  <table class="table table-hover" border="1px">
    <thead>
      <tr>
        <th>sl no</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>password</th>
        <th>opeartion</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $sql = "select * from `student-info`";
            $result = mysqli_query($conn,$sql);
            if($result){                
              while($row = mysqli_fetch_assoc($result)){
                    $Id = $row['Id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $password = $row['password'];
                    echo '<tr>
                    <td>'.$Id.'</td>
                    <td>'.$firstname.'</td>
                    <td>'.$lastname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td><button class="btn btn-danger btn-lg"><a href="delet.php?deletid='.$Id.'" class="text-light">Delet</a></button>
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
