<?php
 require_once "pdo.php";

 if (isset($_POST['name'])) {
    $sql = "SELECT * FROM users WHERE name LIKE concat('%',:name,'%')";
    echo "<pre> <br>".$sql. "<br></pre>";
    $stmt = $conn -> prepare($sql);
    $stmt->execute(array(':name'=>$_POST['name']));
   // var_dump($stmt);


//    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  echo ('<table>
   <thead><tr>
       <td>Id</td>
       <td>Name</td>
       <td>Email</td>
       <td>Password</td>
   </tr></thead>
   <tbody>');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>";
        echo($row['id']);
        echo("</td><td>");
        echo($row['name']);
        echo("</td><td>");
        echo($row['email']);
        echo("</td><td>");
        echo($row['password']);
        echo("</td></tr><br>");
    }

 } echo '<strong>No record found</strong><br>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <p>Search a user by name.</p>
    <p>
        <form action="" method="post">
            <p><label for="search">Enter the name to search</label>
                <input type="text" name="name"></p>
                <p><input type="submit" value="Search"></p>
        </form>
    </p>
</body>
</html>