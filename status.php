<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

$id = $_REQUEST['id'];
$status = $_REQUEST['status'];

$update = "UPDATE reg_em SET status='$status' WHERE id='$id'";
$ex = mysqli_query($connect,$update);

header('location:em_list.php');
?>