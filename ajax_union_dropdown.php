<?php 
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

if(isset($_REQUEST['upozeles'])) {
    $upozeles = $_REQUEST['upozeles'];

    $select = "SELECT * FROM unions WHERE upazilla_id='$upozeles'";
    $ex = mysqli_query($connect,$select);
?>

<select class="w-50 offset-3 bg-secondary text-light" name="" id="">
    <option value="">Select Union</option>
    <?php while ($row = mysqli_fetch_array($ex)) { ?>
        <option value=""><?php echo $row['bn_name'] ?></option>
    <?php } ?>
</select>

<?php } ?>