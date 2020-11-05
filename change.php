<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aadhar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="UPDATE contact SET cnumber='$_POST[cnumber]' WHERE aadhar_num='$_POST[aadhar]'";
if (mysqli_query($conn, $sql)){
echo "DONE";
  }
