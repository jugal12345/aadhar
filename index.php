<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Hello World";

// Create database

$sql = "CREATE DATABASE IF NOT EXISTS aadhar";
if (mysqli_query($conn, $sql)) {
  echo "<html><head>

<style>

body{
  background-color:#f6f5f5;
}

.div{
  background-color:#d6e0f0;
  margin: auto;
  width: 40%;
  height: 40%;
  border: 3px solid black;
  padding: 10px;
  text-align:center;
}

img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 250px;
}

button{
  background-color: #8d93ab;
  border: none;
  color: white;
  padding: 25px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  color:#000000;
  width:40%;
  border-radius: 12px;
}

h1{
  color:#393b44;
  font-size:90px;
}

button:hover{
  background-color:black;
  color:white;
}

</style>
<title>Homepage</title>
  </head><body>
  <h1 style='text-align:center;'>Welcome to Con-Find</h1>
  <div class='div'><br><br>
  <a href='signup.php'><button><b>Register as a new user</b></button></a><br><br><br><br>
  <a href='login.html'><button><b>View my contact</b></button></a><br><br>
  </div>
  <img src='https://p.kindpng.com/picc/s/37-373983_people-talking-silhouette-png-transparent-two-people-talking.png' height='250px'>
  </body></html>";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
