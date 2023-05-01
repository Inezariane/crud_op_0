<?php

include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo"Deleted successfully";
        header('location:users2.php');

    }else{
        die(mysqli_error($conn));
    }
}
?>