
  <form action="add_student.php" method ="post">
    <label for="first_name">First name:</label>
    <input type="text" name = first_name id= first_name>
    <br>

    <label for="last_name"> Last name:</label>
    <input type="text" name = last_name id = "last_name">
    <br>

    <label for="father_name">Father's Name:</label>
    <input type="text" name = "father_name" id = "father_name">
    <br>

    <label for="mother_name">Mother's name:</label>
    <input type="text" name = "mother_name" id = "mother_name">
    <br>

    <label for="email">Email:</label>
    <input type="email" name = "email" id="email">
    <br>

    <label for="father_mobile">Father's mobile number:</label>
    <input type="tel" name = "father_mobile" id ="father_mobile">
    <br>

    <label for="address">Address of the student:</label>
    <textarea  name ="address" id = "address" row = "40" column = "40"></textarea>
    <br>

    
    <input type="submit" value = "click to submit">
    <br>

  </form>

  <?php
//   var_dump($_POST);
   
 
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $father_name = $_POST['father_name'];
  $mother_name = $_POST['mother_name'];
  $email = $_POST['email'];
  $father_mobile = $_POST['father_mobile'];
  $address = $_POST['address'];



  $sql = $sql = "INSERT INTO `students` (`first_name`, `last_name`, `father_name`, `mother_name`, `email`, `father_mobile`, `address`) VALUES ('$first_name', '$last_name', '$father_name', '$mother_name', '$email', '$father_mobile', '$address')";
 
  include 'mysql_connect.php';

 try {
    $conn -> query($sql);
    echo 'Data Inserted Successfully <br>'; 
    
 } catch(PDOException $e) {
    echo 'Error: '. $e -> getMessage();
 }
 
