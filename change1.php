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

echo"


<!DOCTYPE html>

  <head>
    <title></title>
  </head>
  <body>
    <p>ENTER NEW NUMBER</p>
    <form  action='change.php' method='post'>
      <input type='text' name='cnumber' id='cnumber'>
      <input type='hidden' name='aadhar' id='aadhar' value='$_POST[aadhar]' readonly>
      <input type='hidden' name='name' id='name' value='$_POST[name]' readonly>
      <input type='submit' value='CHANGE'>
    </form>
  </body>
</html>
";
