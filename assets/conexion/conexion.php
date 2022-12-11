<?php
  $host_name = 'localhost';
  $database = 'application';
  $user_name = 'root';
  $password = '';

  $conn = mysqli_connect($host_name, $user_name, $password, $database);

  if (mysqli_connect_errno()) {
    die('<p>Error al conectar con servidor MySQL: '. $conn->connect_error .'</p>');
  }
?>