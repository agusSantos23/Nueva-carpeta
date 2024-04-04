<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formulario";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);  
// Check connection
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}
mysqli_select_db($conn,$database);


$nombre = $_POST['Nombre'];
$email = $_POST['email'];
$mensaje = $_Post['mensaje'];

