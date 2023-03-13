<?php

if (strlen($_POST['upFirst_name'] > '0')) {
    $uFirstName = $_POST['upFirst_name'];
} else {
    $uFirstName = $_POST['row']['0'];
}


if (strlen($_POST['upLast_name'] > '0')) {
    $uLastName = $_POST['upLast_name'];
} else {
    $uLastName = $_POST['row']['1'];
}


if (strlen($_POST['upFather_name'] > '0')) {
    $uFatherName = $_POST['upFather_name'];
} else {
    $uFatherName = $_POST['row']['2'];
}


if (strlen($_POST['upMother_name'] > '0')) {
    $uMotherName = $_POST['upMother_name'];
} else {
    $uMotherName = $_POST['row']['3'];
}


if (strlen($_POST['upEmail'] > '0')) {
    $uEmail = $_POST['upEmail'];
} else {
    $uEmail = $_POST['row']['4'];
}


if (strlen($_POST['upFatherMobile'] > '0')) {
    $uFatherMobile = $_POST['upFatherMobile'];
} else {
    $uFatherMobile = $_POST['row']['5'];
}


if (strlen($_POST['upAddress'] > '0')) {
    $uAddress = $_POST['upAddress'];
} else {
    $uAddress = $_POST['row']['6'];
}


echo $_POST['upFirst_name'].'nothing<br>';
echo $_POST['row']['0']. '<br>';
echo '<pre>';
var_dump($_POST);
echo '</pre>';

// echo '<pre>';
// var_dump($_POST['row']);
// echo '</pre>';
echo $uFirstName .$uLastName .$uFatherName .$uAddress;
$id = $_POST['id'];

$sql = ("UPDATE students
        SET first_name = '$uFirstName',
            last_name = '$uLastName',
            father_name = '$uFatherName',
            mother_name = '$uMotherName',
            email = '$uEmail',
            father_mobile = '$uFatherMobile',
            address = '$uAddress'
            WHERE id = '$id'");
    
    include 'mysql_connect.php';

    try {
        $conn -> query($sql);
        echo 'Data Updated Successfully <br>'; 
        header ('Location: student_list.php');
        
     } catch(PDOException $e) {
        echo 'Error: '. $e -> getMessage();
     }
     