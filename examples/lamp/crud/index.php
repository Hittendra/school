<?php
  require_once '../pdo/pdo.php';
  session_start();
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud app</title>
  </head>
  <body>
 <h3>Crud Application</h3>
         <?php
         if ( isset($_SESSION['error']) )  {
            echo '<p style = "color:red">'.$_SESSION['error']. '</p><br>';
            unset($_SESSION['error']);
         }
         if ( isset($_SESSION['success']) ) {
            echo '<p style ="color:green">'.$_SESSION['success']. '</p><br>';
            unset($_SESSION['success']);
         }

         // dispalying the content of the table
         echo '<table>';
         echo '<thead>
                    <tr> 
                     <th> Id </th>
                     <th> Name </th>
                     <th> Email</th>
                     <th> Password </th> 
                     <th> Action </th>
                     </tr>
                     </thead>';
          echo '<tbody>';
          $stmt = $conn->query("SELECT id, name, email, password FROM users");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            echo '<tr> <td>';
            echo (htmlentities($row['id']));
            echo '</td> <td>';
            echo (htmlentities($row['name']));
            echo '</td> <td>';
            echo (htmlentities($row['email']));
            echo '</td> <td>';
            echo (htmlentities($row['password']));
            echo '</td> <td>';
            echo ('<a href="edit.php?user_id='.$row['id'].'" id="edit">Edit</a> ');
            echo ('<a href="delete.php?user_id='.$row['id'].'" id="del">Delete</a> ');
            echo '</td> </tr>';
          }
          echo '</tbody> 
                </table>';

    ?>

    <a href="add.php" id="addNew">Add New</a>
  </body>
  </html>