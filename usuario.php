<?php

//Importar la coneccion a la db
require 'includes/config/database.php';
$db = conectarDB();

//Crear email y password
$email = "correo@correo.com";
$password = "12345678";

//Hash de la password
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//query para agregar al usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";
// echo $query;

//Agragarlo a la db
mysqli_query($db, $query);