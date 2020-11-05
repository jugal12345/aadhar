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

$sql="SELECT name, cnumber, aadhar_num FROM contact WHERE aadhar_num='$_POST[aadhar]'";
$result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<form action='change1.php' method='post'>
  <input type='text' name='name' id='name' value='$row[name]' readonly>
  <input type='text' name='cnumber' id='cnumber' value='$row[cnumber]' readonly>
  <input type='text' name='aadhar' id='aadhar' value='$row[aadhar_num]' readonly>
  <input type='submit' value='Update'>
  <a href='thankyou.html'>No update</a>
";
    }



  }
