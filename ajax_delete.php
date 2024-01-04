<?php 
$connect = mysqli_connect('localhost', 'root', '', 'php_project');
// $connect = include 'include_file/db_connect.php';

$id = $_POST['id'];

$delete = "DELETE FROM ajax_data WHERE id='$id'";
$ex = mysqli_query($connect,$delete);

?>