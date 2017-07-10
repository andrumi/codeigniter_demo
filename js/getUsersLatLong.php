<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 05/12/2015
 * Time: 20:29
 */

$server = "localhost";
$database="db1228264";
$username = "***********";
$password = "***********";

// Create connection
$conn = mysqli_connect($server, $username, $password,$database);
if ($conn->connect_error) {
    print_r("inside conn failed");
    die("Connection failed: " . $conn->connect_error);
}

$query=("SELECT username, latitude,longtitude FROM members where longtitude != 'null' ");
$to_encode = array();

if ($result=mysqli_query($conn,$query)){
   while ($row=mysqli_fetch_row($result))
    {
        $to_encode[] = $row;
    }
}
else{
    print_r("inside php result failure!");
}

echo json_encode($to_encode);
