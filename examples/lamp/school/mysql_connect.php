<?php
// $servername = "localhost";
// $username = "lamp";
// $password = "lamp";

// Create connection
try{ 
  $conn = new PDO('mysql:host=database;dbname=school', 'lamp', 'lamp');
  echo 'connection established <br>';
}

catch (PDOException  $e) {
  echo 'Connection could not be established  ' . $e -> getMessage();
}