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

echo '<table> 
       <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th> Father\'s Name</th>
            <th> Mother\'s Name</th>
            <th> Email </th>
            <th> Father\'s Mobile </th>
            <th> Address </th>
            <th> Action1 </th>
            <th> Action2 </th>
            </tr> </thead>';
            echo '<tbody>';
    foreach($result as $k => $v) {
       // echo'Key:  '.$k . '    Value: '. $v;
       echo '<tr>';
        foreach ($v as $sub_key => $sub_value){
            echo '<td>'.$sub_value .'</td>';
        } 
        $del_id = $result[$k]['id'];
        echo "<td> <form method = \"post\" action =\"delete_student.php\">
        <input type=\"hidden\" name =\"del\" value=\"$del_id\">
        <input type = \"submit\" value=\"Delete\"></td></form>";
        // echo '</tr>';
        echo "<td> <form method = \"post\" action =\"edit_student.php\">
        <input type=\"hidden\" name =\"edt\" value=\"$del_id\">
        <a href='edit_student.php?id=".$del_id."'>Edit</a></td></form>";
        echo '</tr>';
        
    } echo '</tbody></table>';
    
}   catch (PDOException $e) {
        echo 'Error';
    }
   
