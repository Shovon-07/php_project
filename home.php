<?php
// login start
session_start();

if ($_SESSION['user_email'] == true) {
    $user_email = $_SESSION['user_email'];
} else {
    header('location:index.php');
}
// login end

$connect = mysqli_connect('localhost', 'root', '', 'php_project');
// For register
$e_name = $e_phone = $e_img = '';

// if(isset($_REQUEST['register'])) {
//     $e_name = $_REQUEST['e_name'];
//     $e_phone = $_REQUEST['e_phone'];
//     $e_img_name = $_FILES['e_img']['name'];
//     $e_img_tmp_name = $_FILES['e_img']['tmp_name'];

//     $uploade = move_uploaded_file($e_img_tmp_name,"uploaded_file/img/".$e_img_name);

//     if($uploade) {
//         $insert = "INSERT INTO register_employee(name,phone,img) VALUES('$e_name','$e_phone','$e_img_name')";
//         $ex_insert = mysqli_query($connect,$insert);
//     }
// }

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
    <title>Document</title>
</head>

<body class="body" id="body">
    <?php include 'include_file/header.php' ?>
    <section class="home">
        <div class="container">
            <!-- <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="e_name" id="" placeholder="Employee name"> <br>
                <input type="text" name="e_phone" id="" placeholder="Employee phone no"> <br>
                <input type="file" name="e_img"> <br>
                <button class="btn btn-secondary" name="register">Register</button>
            </form> -->
            <div class="content">
                <h1><span class="span">This is Empl</span>oyee Register </br>
                    Service Provider</h1>
                <p>We give you very neccesery service. </br> It's help your working life</p>
            </div>

        </div>
    </section>


    <!--=== javascript link ===-->
    <?php include 'include_file/js_link.php' ?>
</body>

</html>