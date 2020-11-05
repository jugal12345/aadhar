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

$sql = "CREATE TABLE IF NOT EXISTS contact (
aadhar_num VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15)
)";
if (mysqli_query($conn, $sql)){
  echo "<html><head><script>

  function phonenumber(inputtxt)
  {
    var phoneno = /^\d{10}$/;
    if((inputtxt.value.match(phoneno))
          {
        return true;
          }
        else
          {
          alert('invalid phone number');
          return false;
          }
  }
</script>

<style>
  body{
    background-color:#f6f5f5;
  }

  .div{
    background-color:#d6e0f0;
    margin: auto;
    width: 40%;
    height: 95%;
    border: 3px solid black;
    text-align:center;
    font-size:20px;
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
    margin:0;
  }

  button:hover{
    background-color:black;
    color:white;
  }

  .submit {
    background-color: #8d93ab; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
    border-radius: 12px;
  }

  .submit1{
    background-color: white;
  color: black;
  border: 2px solid #8d93ab;
  }

  .submit1:hover {
    background-color: #8d93ab;
  color: white;
  }

  input[type=text, email, password] {
    width: 69%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: solid 1px black;
    background-color: #f1f3f8;
    color: black;
  }
  input[type=file] {
    width: 39%;
    padding: 12px 20px;
    margin-left: 44.6969px;


    background-color: #d6e0f0;
    color: black;
  }

  p{
    color:#393b44;
  }

  </style>




  </head><body>
  <h1 style='text-align:center'>SIGNUP</h1><br><br><br>
  <form action='update.php' method='post' name='f1' id='f1'><div class='div'>
    <p>Enter your name:</p>
    <input type='text' name='name' id='name' required>
    <p>Enter your aadhar number</p>
    <input type='text' name='aadhar' id='aadhar' required>
    <p>Enter your contact number:</p>
    <input type='text' name='cnumber' id='cnumber' required onblur='phonenumber(document.f1.cnumber)'><br><br>
    <input type='submit' name='submit' id='submit' class='submit submit1'>
  </div></form><br><br><br><br><Br><br>
  </body></html>";
}

// sql to create table

mysqli_close($conn);
?>
