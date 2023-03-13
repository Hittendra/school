<?php 
   require_once "pdo.php";


   if (isset($_POST['user_id'])) {
    $sql="DELETE FROM users WHERE id = :uid";
    echo "<pre>".$sql."</pre><br>";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':uid'=>$_POST['user_id']));
   }
   echo'<pre>'.var_dump($_POST).'</pre>';
     ?>
   
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
   </head>
   <body>
    <p>Delete a User</p>
    <p><form action="" method="post">
        <label for="Delete a user">ID to Delete:</label>
        <input type="text" name="user_id">
        <input type="submit" value="Delete">
    </form></p>
   </body>
   </html>