<?php
  require_once '../pdo/pdo.php';
  session_start();

  if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['id']))  {

       $sql = "UPDATE users SET name = :name,
                                email = :email,
                                password = :password
                                WHERE id = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
                     ':name' => $_POST['name'],
                     ':email' => $_POST['email'],
                     ':password' => $_POST['password'],
                     ':user_id' => $_POST['id'] ));
     $_SESSION['success'] = 'Record Updated';
     header('Location: index.php');
     return;
  }

  //checking against bad value for user id 
  $stmt = $conn->prepare("SELECT name, id, email, password FROM users WHERE id = :xyz");
  $stmt->execute(array(':xyz' => $_GET['user_id']));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  if ( $row === false) {
    $_SESSION['error'] = 'Bad value for user_id';
    header('Location: index.php');
    return;
  }

  $name = htmlentities($row['name']);
  $email = htmlentities($row['email']);
  $password = htmlentities($row['password']);
  $id = htmlentities($row['id']);

  ?>
  <p>Edit User</p>
  <form action="" method="post">
    <p>Name:
        <input type="text" name = "name" value = "<?=$name ?>">
    </p>
    <p>Email: 
        <input type="text" name="email" value="<?=$email?>">
    </p>
    <p>Password:
        <input type="text" name="password" value="<?=$password?>">
    </p>
    <input type="hidden" name="id" value="<?=$id?>">
    <p><input type="submit" value="Update">
        <a href="index.php">Cancel</a></p>
  </form>
