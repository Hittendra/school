<?php
// try{
//         $pdo = new PDO('mysql:host=database;dbname=lamp', 'lamp', 'lamp');
//         echo 'Connected';
//         // $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

//     }  catch(PDOException, $e) {

//     echo 'Error:'.$e->getMessage;

// }
?>
<?php
// $servername = "localhost";
// $username = "lamp";
// $password = "lamp";

// Create connection
try{ 
  $conn = new PDO('mysql:host=database;dbname=lamp', 'lamp', 'lamp');
  echo 'connection established <br>';
  $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

}

catch (PDOException  $e) {
  echo 'Connection could not be established  ' . $e -> getMessage();
}