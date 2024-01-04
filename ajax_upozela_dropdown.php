<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

if(isset($_REQUEST['dist_id'])) {
    $dist_id = $_REQUEST['dist_id'];

    $select = "SELECT * FROM upazilas WHERE district_id='$dist_id'";
    $ex = mysqli_query($connect,$select);
?>

<select class="w-50 offset-3 bg-secondary text-light" name="" id="upozeles">
    <option value="">Select Upozela</option>
    <?php while ($row = mysqli_fetch_array($ex)) { ?>
        <option value="<?php echo $row['district_id'] ?>"><?php echo $row['bn_name'] ?></option>
    <?php } ?>
</select>

<?php } ?>