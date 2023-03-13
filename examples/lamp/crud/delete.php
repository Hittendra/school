<?php
  require_once '../pdo/pdo.php';
  session_start();

  if ( isset($_POST['delete']) && isset($_POST['id'])) {
    $sql = "DELETE FROM users WHERE id = :zip";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['id']));
    $_SESSION['success'] = 'Record Deleted';
    header ('Location: index.php');
    return;
  }

  //Making sure that user id is present
  if  (!isset($_GET['user_id'])) {
    $_SESSION['error'] = "Missing User Id";
    header('Location: index.php');
    return;
  }

  $stmt = $conn->prepare("SELECT name, id FROM users WHERE id = :xyz");
  $stmt->execute(array(':xyz' => $_GET['user_id']));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  if ( $row === false) {
    $_SESSION['error'] = 'Bad value for user_id';
    header('Location: index.php');
    return;
  }

  //Confirming the delete action 
  ?>
  <p> Confirm Deleting : <?=htmlentities($row['name']) ?> </p>

  <form action="" method="post">
    <input type="hidden" name = "id" value = "<?=$row['id'] ?>">
    <input type="submit" value = "Delete" name = "delete">
    <a href = "index.php" > Cancel</a>
  </form>

