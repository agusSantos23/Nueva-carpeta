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

$sql = "INSETT INTO formulario_contacto (nombre,email,mensaje) VALUES ("$nombre","$email","$mensaje")";

if($conn->query($sql) === TRUE){
    echo "ole";
}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>