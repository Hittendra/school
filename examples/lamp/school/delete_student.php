<!-- <pre>
   <?php var_dump($_POST); ?>
</pre> -->
<?php 
$id = $_POST['del'];
$sql = "DELETE FROM students WHERE id = '$id'";
include 'mysql_connect.php';

try {
    $conn -> query($sql);
    echo 'Data Deleted Successfully <br>'; 
    header('location: student_list.php');
 } catch(PDOException $e) {
    echo 'Error: '. $e -> getMessage();
 }

