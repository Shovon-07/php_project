<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

if(isset($_REQUEST['div_id'])) {
    $div_id = $_REQUEST['div_id'];

    $select = "SELECT * FROM districts WHERE division_id='$div_id'";
    $ex = mysqli_query($connect,$select);

?>

<select class="w-50 offset-3 bg-secondary text-light" name="" id="dist_id">
    <option value="">Select District</option>
    <?php while ($row = mysqli_fetch_array($ex)) { ?>
        <option value="<?php echo $row['division_id'] ?>"><?php echo $row['bn_name'] ?></option>
    <?php } ?>
</select>

<?php } ?>