<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');
// $connect = include 'include_file/db_connect.php';

$get = "SELECT * FROM ajax_data";
$ex = mysqli_query($connect,$get);
?>

<?php $i = 1;
while ($row = mysqli_fetch_array($ex)) { ?>
    <tr>
        <td>
            <?php echo $i; ?>
        </td>
        <td>
            <?php echo $row['ajax_name']; ?>
        </td>
        <td>
            <?php echo $row['ajax_email']; ?>
        </td>
        <td>
            <?php echo $row['ajax_phone']; ?>
        </td>
        <td>
            <img src="uploaded_file/ajax_employee_img<?php echo $row['ajax_img'] ?>" alt="">
        </td>
        <td><button class="bg-info text-light" onclick="edite_data(<?php echo $row['id']; ?>)">Edite</button></td>
        <td><button class="bg-danger text-light" onclick="del_data(<?php echo $row['id']; ?>)">Delete</button></td>
    </tr>
    <?php $i += 1;
} ?>