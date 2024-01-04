<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');
// $connect = include 'include_file/db_connect.php';

$id = $_POST['id'];

$select = "SELECT * FROM ajax_data WHERE id='$id'";
$ex = mysqli_query($connect,$select);
$row = mysqli_fetch_array($ex);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=== css link ===-->
    <?php include 'include_file/css_link.php' ?>
    <!--=== bootstrap link ===-->
    <title>edite</title>
</head>

<body class="body" id="body">
    <?php include 'include_file/header.php' ?>
    <section class="ajax">
        <div class="container">
            <div class="content">
                <!-- <button id="ajax">Click ajax</button> -->
                <div class="card bg-secondary px-5 py-2">
                    <div class="card-header text-center fs-2">Edite information</div>
                    <input type="text" id="name" class="form-control mt-4" value="<?php echo $row['ajax_name'] ?>" placeholder="Enter student name">
                    <input type="text" id="email" class="form-control mt-4" value="<?php echo $row['ajax_email'] ?>" placeholder="Enter student name">
                    <input type="text" id="phone" class="form-control mt-4" value="<?php echo $row['ajax_phone'] ?>" placeholder="Enter student name">
                    <button class="mt-4 mb-3 btn bg-info offset-3 w-50" onclick="update_data(<?php echo $row['id'] ?>)">update data</button>
                    <button class="mt-4 mb-3 btn bg-info offset-3 w-50" id="back_home">Back home</button>
                </div>
            </div>
        </div>
    </section>

    <!--=== javascript link ===-->
    <?php include 'include_file/js_link.php' ?>
</body>

</html>