<?php 
$connect = mysqli_connect('localhost', 'root', '', 'php_project');
// $connect = include 'include_file/db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$img = $_POST['img'];
// $img_name = $_POST['img']['name'];
// $img_tmp_name = $_POST['img']['tmp_name'];

$insert = "INSERT INTO ajax_data(ajax_name,ajax_email,ajax_phone,ajax_img) VALUES('$name','$email','$phone','$img')";
$ex = mysqli_query($connect,$insert);

if($ex) {
    $uploade = move_uploaded_file($img_tmp_name,"uploaded_file/ajax_employee_img".$img_name);
    echo "Data insert succeded";
} else {
    echo "Insert failed";
}


?>