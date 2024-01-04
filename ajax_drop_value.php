<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

$divi = $_REQUEST['divi'];
// $dist = $_REQUEST['dist'];
// $upo = $_REQUEST['upo'];
// $uni = $_REQUEST['uni'];

// save division
$select_division = "SELECT * FROM divisions WHERE id='$divi'";
$ex_division = mysqli_query($connect,$select_division);
$row = mysqli_fetch_array($ex_division);

$divi_name = $row['bn_name'];

$divi_update = "UPDATE ajax_data SET ajax_division='$divi_name'";
$divi_update = mysqli_query($connect,$divi_update);

// $division = "SELECT * FROM divisions WHERE id='$divi'";
// $ex_division = mysqli_query($connect,$ex_division);
// $row = mysqli_fetch_array($ex_division);

// echo $row['bn_name'];


// echo $dist;
// echo $upo;
// echo $uni;
?>