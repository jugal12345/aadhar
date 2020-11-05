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
$sql = "INSERT INTO contact (aadhar_num, name, cnumber)
  VALUES ('$_POST[aadhar]', '$_POST[name]', '$_POST[cnumber]')";

if (mysqli_query($conn, $sql)){
  header("Location: index.php");
  }
