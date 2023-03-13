<?php
  require_once "../pdo/pdo.php";
  session_start();
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    echo("<pre><br>".$sql."<br></pre><br>");
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(array(
         ':name' => $_POST['name'],
         ':email' => $_POST['email'],
         ':password' => $_POST['password']));
         $_SESSION['success'] = 'Record Added';
         header('Location: index.php');
         return;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <p>Add A New User</p>
    <form method="post" action="">
        <p><label for="Name">Name:</label>
           <input type="text" name="name"></p>
        <p><label for="Email">Email:</label>
            <input type="text" name="email"></p>
        <p><label for="Password">Password:</label>
        <input type="password" name="password"></p>
        <p><input type="submit" value="Add New">
        <a href ="index.php">Cancel</a></p>
    </form>
</body>
</html>