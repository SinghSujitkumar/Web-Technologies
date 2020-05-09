<?php $servername = "localhost"; $username = "root"; $password = ""; 
// Create connection 
$conn = mysqli_connect($servername, $username, $password);
//Check connection 
if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); }
 // Create database
$sql = "CREATE DATABASE FORM"; 
 if (mysqli_query($conn, $sql)) { 
echo "Database created successfully"; } else { 
echo "Error creating database: " . mysqli_error($conn); } mysqli_close($conn); ?> TABLE CREATION: <?php $servername = "localhost"; $username = "root"; $password = ""; $dbname = "FORM"; 
// Checking connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection 
if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); } 
// sql code to create table 
$sql = "CREATE TABLE regus ( 
fname VARCHAR(30) NOT NULL, lname VARCHAR(30), gender VARCHAR(10), email VARCHAR(30), pass VARCHAR(30), mobile INT(20), bike VARCHAR(20), car VARCHAR(20), 
company VARCHAR(20), model VARCHAR(35) )"; if (mysqli_query($conn, $sql)) { 
echo "User Registration Table Created Successfully"; } 
else { 
echo "Error creating table: " . mysqli_error($conn); } mysqli_close($conn); ?> INSERTION IN TABLE: <?php $servername ="localhost"; $username ="root"; $password = ""; $dbname = "FORM"; 
$firstname = $_POST["firstname"]; $lastname = $_POST["lastname"]; $gender = $_POST["gender"]; $emailA = $_POST["emailA"]; $psw = $_POST["psw"]; $phone = $_POST["phone"]; $two = $_POST["two"]; $four = $_POST["four"]; $cars = $_POST["cars"]; $model = $_POST["model"]; 
$conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error) { die("Connection failed: " . $conn- >connect_error); } $sql = "INSERT INTO regus (fname,lname,gender,email,pass,mobile,bike, car,company,model) VALUES ('$firstname','$lastname','$gender','$emailA',' $psw','$phone','$two','$four','$cars','$model') "; if ($conn->query($sql) === TRUE) { 
echo "New record created successfully"; } 
?> else { 
echo "Error: " . $sql . "<br>" .$conn->error; 
<?php } if(!isset($_COOKIE["TestCookie"])) { $conn->close(); }{ ?> echo "Name entered in form saved in cookies COOKIE: 
: ".$_COOKIE["TestCookie"]; <?php 
} ?> setcookie("TestCookie", $_POST["name1"], time()+3600); 
