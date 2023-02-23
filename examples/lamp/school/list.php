<?php
// $sql = "SELECT * FROM students";
include 'mysql_connect.php';
 
try{
    $stmt = $conn->prepare("SELECT * FROM students");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//    echo'<pre>';
//    var_dump ($result);
//    echo'</pre>';


    foreach($result as $k => $v) {
    
        // echo'Key:  '.$k . '    Value: '. $v;
        foreach ($v as $sub_key => $sub_value){
            echo $sub_key . " =" . $sub_value .'<br>';
        }
    } 
}   catch (PDOException $e) {
        echo 'Error';
    }
