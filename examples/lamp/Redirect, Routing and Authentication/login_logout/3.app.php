<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
</head>
<body>
    <h1>Cool application</h1>
      
    <?php
    session_start();
    //var_dump($_SESSION);
    
    if ( isset($_SESSION["success"]) ) {
        echo('<p style="color:green">'.$_SESSION["success"].'</p><br>');
        unset($_SESSION["success"]);
    }  
 
    // Check if we are logged in!
    if ( ! isset($_SESSION["account"]) ) { ?>
       <p>Please <a href="2.login.php">Log In</a> to start.</p>
    <?php } else { ?>
       <p>This is where a cool application would be.</p>
       <p>Please <a href="4.logout.php">Log Out</a> when you are done.</p>
    <?php } ?>
</body>
</html>