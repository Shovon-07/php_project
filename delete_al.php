<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

if(isset($_REQUEST['del_al_btn'])) {
    $delete_al = $_REQUEST['delete_al'];
    $extract = implode(',',$delete_al);

    $delete = "DELETE FROM reg_em WHERE id IN($extract)";
    $ex = mysqli_query($connect,$delete);

    header('location:em_list.php');
}
?>