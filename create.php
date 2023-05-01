<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password);
    $gender = $_POST['gender'];
    $sql="INSERT INTO users(fname,lname,email,password,gender)VALUES('$first_name','$last_name','$email','$password','$gender')";
$results = $conn->query($sql);
    if($results == true){
        // echo 'Record created sucessfully';
        header('location:users2.php');
    }else{
        echo 'Error:'.$sql.'<br>' .$conn->error;
    }
    $conn->close();
}
?>