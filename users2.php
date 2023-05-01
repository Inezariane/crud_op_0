<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connection.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Crud operation</title>
    <style>
     a{
        text-decoration:none;
        color:white;

     }
    </style>
</head>
<body>
    <div class="add" style="padding-left: 60px;">
    <button type="button" class="btn btn-primary my-5"  style="background:#0d6efdff;"><a href="signup.php" class="text-light" style="background:#0d6efdff;">Add user</a></button>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if($result) {
  

while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $password=$row['password'];
    $gender=$row['gender'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$fname.'</td>
    <td>'.$lname.'</td>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td>'.$gender.'</td>
    <td>
    <button class="btn btn-primary" style="background:#0d6efdff;"><a href="update.php?updateid='.$id.'" class="text-light" style="background:#0d6efdff;">Update</a></button>
    <button class="btn btn-danger" style="background:#dc3545ff;"><a href="delete.php?deleteid='.$id.'" class="text-light" style="background:#dc3545ff;">Delete</a></button>
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
