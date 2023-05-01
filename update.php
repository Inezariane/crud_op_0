<?php
include 'connection.php';
$id = $_GET['updateid'];

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $gender = $_POST['gender'];

    $sql="UPDATE users SET fname='$first_name', lname='$last_name', email='$email', password='$password', gender='$gender' WHERE id='$id'";
    $results = $conn->query($sql);
    if ($results === true) {
        // echo 'Record updated successfully';
        header('location:users2.php');
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="connection.css">
</head>
<body>
    <h2>Sign up</h2>
    <form method="post">
        <fieldset>
            <legend>Personal information:</legend>
            First name: 
            <input type="text" name="firstname"><br>
            Last name: 
            <input type="text" name="lastname"><br>
            Email: 
            <input type="email" name="email"><br>
            Password: 
            <input type="password" name="password"><br>
            Gender: 
            <label for="male">
                <input type="radio" name="gender" id="male" value="male">Male
            </label>
            <label for="female">
                <input type="radio" name="gender" id="female" value="female">Female
            </label><br>
            <input type="submit" name="submit" value="Update">
        </fieldset>
    </form>
</body>
</html>
