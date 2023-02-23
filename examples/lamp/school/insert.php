<?php
// include 'mysql_connect.php';
// $sql = "INSERT INTO dummy VALUES ('qwerty')";

// try {
//     $conn -> query($sql);
//     echo 'Data inserted <br>';
// } catch (PDOException $e){
//     echo 'Error:'.$e->getMessage();
// }

$sql = "INSERT INTO `students` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `email`, `father_mobile`, `address`) VALUES ('$first_name', '$last_name', '$father_name', '$mother_name', '$email', '$father_mobile', '$address')";
 
include 'mysql_connect.php';

try {
  $conn -> query($sql);
  echo 'Data Inserted Successfully <br>'; 
} catch(PDOException $e) {
  echo 'Error: '. $e -> getMessage();
}