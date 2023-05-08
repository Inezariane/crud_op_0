<?php
include("connection.php");
$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

$fp = fopen('data.csv', 'w');

fputcsv($fp, array('id', 'fname', 'lname', 'email','password','gender'));

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($fp, $row);
}

// Close the CSV file
fclose($fp);

// Send CSV file to the browser for download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data.csv"');
readfile('data.csv');
exit();
?>