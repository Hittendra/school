<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    <table>
        <thead><tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr></thead>
        <tbody>
    <?php
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
        echo("</td></tr><br>");
    }
    ?>
    </tbody> </table>
</body>
</html>