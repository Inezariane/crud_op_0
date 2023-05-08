<?php
include 'connection.php';

if(isset($_POST['submit'])){
  
    $email = $_POST['email'];
    $password = sha1($_POST['password']); // or you can replace sha1 by MD5 for hashing password
    $result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
    
    if(!$result){
        echo "Error: " . $sql . "<br>" . $mysql->error;    
        exit();
    }
    
    if($result->num_rows > 0){
        session_start();
        $_SESSION["email"]=$email;
        header("Location:users2.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connection.css">
    <title>Login</title>
</head>
<body>
    <h2>Sign in</h2>
    <form method="POST">
        <fieldset>
            Email: 
            <input type="email" name="email"><br>
            Password: 
            <input type="password" name="password"><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>
