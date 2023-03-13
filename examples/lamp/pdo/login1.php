  <h3>SQL Injection demonstration</h3>
  
  <?php 
  require_once 'pdo.php';
   if (isset($_POST['email'])  && isset($_POST['password'])) {
    $e = $_POST['email'];
    $p = $_POST['password'];
    $sql = "SELECT name FROM users WHERE email = '$e' AND password = '$p'";
    $stmt = $conn->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row === false) {
        echo'<br> OOPs!! <br>';
    }
     else{
        echo '<br> Login Successful <br>';
     }
    }
   
?>
   
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login1</title>
   </head>
   <body>
    <p>Please Login:</p>

    <form action="" method="post">
        <p><label for="email">Email:</label>
    <input type="email" name="email"></p>
    <p><label for="password">Password:</label>
        <input type="text" name="password"></p>
        <p><input type="submit" value="Login"></p>
    </form>
   </body>
   </html>