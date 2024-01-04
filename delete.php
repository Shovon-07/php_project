<?php
// login start
session_start();

if ($_SESSION['user_email'] == true) {
    $user_email = $_SESSION['user_email'];
} else {
    header('location:index.php');
}
// login end

$connect = mysqli_connect('localhost','root','','php_project');

$del_id = $_REQUEST['del_id'];
$img = $_REQUEST['img'];

$delete = "DELETE FROM reg_em WHERE id='$del_id'";
$ex_delete = mysqli_query($connect,$delete);

if($delete) {
    unlink("uploaded_file/img/$img");
    header('location:em_list.php');
}
?>