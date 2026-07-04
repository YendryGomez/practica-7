<?php

$host = "mysql";
$user = "estudiante";
$password = "estudiante";
$database = "holamundo";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){

    die("Error de conexión");

}

?>