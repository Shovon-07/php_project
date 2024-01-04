<?php
// $connect = mysqli_connect('localhost', 'root', '', 'php_project');

$connect = include 'include_file/db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$update = "UPDATE ajax_data SET ajax_name='$name',ajax_email='$email',ajax_phone='$phone' WHERE id='$id'";
$ex = mysqli_query($connect,$update);

if($ex) {
    echo "Update succeded";
} else {
    echo "Failed";
}

?>