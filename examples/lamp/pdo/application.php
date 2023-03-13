


<?php
  require_once "pdo.php";
//code for inserting data into the users table.
  
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    //echo("<pre><br>".$sql."<br></pre><br>");
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(array(
         ':name' => $_POST['name'],
         ':email' => $_POST['email'],
         ':password' => $_POST['password']));
    }

    require_once "pdo.php";
   //code for deleting a user record
    if (isset($_POST['id'])) {
     $sql="DELETE FROM users WHERE id = :uid";
     //echo "<pre>".$sql."</pre><br>";
     $stmt = $conn->prepare($sql);
     $stmt->execute(array(':uid'=>$_POST['id']));
    }
    //echo'<pre>'.var_dump($_POST).'</pre>';
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>Application</title>
</head>
<body>
    <table>
        <thead><tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr></thead>
        <tbody>
    <?php

    // code for the select query to display the the users table data.
    include_once ("pdo.php");
    $stmt = $conn -> query ("SELECT * FROM users");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>";
        echo($row['id']);
        echo("</td><td>");
        echo($row['name']);
        echo("</td><td>");
        echo($row['email']);
        echo("</td><td>");
        echo($row['password']);
        echo("<td><form method=\"post\">  
        <input type=\"hidden\" name=\"id\"value=\"".$row['id']."\">
        <input type=\"submit\" value=\"Delete\"></form></td>");
        echo("</td></tr><br>");
    }


 

    ?>
    </tbody> </table>

     <!-- data input form for the user table  -->
    <p>Add A New User</p>
    <form method="post" action="">
        <p><label for="Name">Name:</label>
           <input type="text" name="name"></p>
        <p><label for="Email">Email:</label>
            <input type="text" name="email"></p>
        <p><label for="Password">Password:</label>
        <input type="password" name="password"></p>
        <p><input type="submit" value="Add New"></p>
    </form>

</body>
</html>