<pre>
<?php var_dump($_POST); ?>
</pre>
<?php 
$id = $_GET['id'];
$sql = "SELECT `first_name`, `last_name`, `father_name`, `mother_name`, `email`, `father_mobile`, `address` FROM students WHERE id = '$id'";
include 'mysql_connect.php';

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        die('Student does not exist.');
    }
    
    echo '<p><form action="edit_student_secondpost.php" method ="post">
    <label for="upFirst_name">Updated First name:</label>
    <input type="text" name = "upFirst_name" id= "upFirst_name" value = "'.$result['0']['first_name'].'">'.'</p>';
   
    echo '<p>
    <label for="upLast_name">Updated Last name:</label>
    <input type="text" name = "upLast_name" id= "upLast_name"  value = "'.$result['0']['last_name'].'">'.'</p>';
   
    echo '<p>
    <label for="upFather_name">Updated Father name:</label>
    <input type="text" name = "upFather_name" id= "upFather_name"  value = "'.$result['0']['father_name'].'">'. '</p>';
    
    echo '<p>
    <label for="upMother_name">Updated Mother name:</label>
    <input type="text" name = "upMother_name" id= "upMother_name" value = "'.$result['0']['mother_name'].'">'. '</p>';
   
    echo '<p>
    <label for="upEmail">Updated Email:</label>
    <input type="email" name = "upEmail" id= "upEmail"  value = "'.$result['0']['email'].'">'. '</p>';
   
    echo '<p>
    <label for="upFatherMobile">Updated FatherMobile:</label>
    <input type="text" name = "upFatherMobile" id= "upFatherMobile"  value = "'.$result['0']['father_mobile'].'">'.'</p>';
   
    echo '<p>
    <label for="upAddress">Updated Address:</label>
    <textarea  name ="upAddress" id = "upAddress" row = "40" column = "40"  value = "'.$result['0']['address'].'"></textarea>'.'</p>';
     foreach ($result as $k => $v) {
          foreach($v as $value) {
     
       echo '<input type="hidden" name = "row[]" value ="'.$value.'">';
     }}
     echo '<input type="hidden" name = "id" value ="'.$id.'">';
   echo'<input type = "submit" value = "Update"></p></form>';



   
     //    $name = $za['name'] ?? 'not found';

    // // header('location: student_list.php');
 } catch(PDOException $e) {
    echo 'Error: '. $e -> getMessage();
 }
