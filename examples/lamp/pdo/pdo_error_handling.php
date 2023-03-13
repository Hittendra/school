<?php
include 'pdo.php';
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $conn -> prepare("SELECT * FROM users WHERE id = :xyz");
  $stmt -> execute(array(":abc" => $_GET['id']));
  $row = $stmt -> fetch(PDO::FETCH_ASSOC);

  if ($row === false) {
    echo '<p> User id not found</p>';
  } else {
    echo '<p> User id found</p>';
  }
  
  