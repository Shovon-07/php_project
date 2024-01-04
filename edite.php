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

$edite_id = $_REQUEST['edite_id'];

// update start

$msg = '';
if (isset($_REQUEST['register'])) {
    $e_name = $_REQUEST['e_name'];
    $e_id = $_REQUEST['e_id'];
    $e_email = $_REQUEST['e_email'];
    $e_phone = $_REQUEST['e_phone'];
    $e_address = $_REQUEST['e_address'];
    $img = $_FILES['img'];

    $img_name = $_FILES['img']['name'];
    $img_tmp_name = $_FILES['img']['tmp_name'];
    $img_type = $_FILES['img']['type'];
    $img_size = $_FILES['img']['size'];

    $ext_pos = strpos($img_name, '.') + 1;
    $img_ext = substr($img_name, $ext_pos);

    if (empty($e_name) || empty($e_id) || empty($e_email) || empty($e_phone) || empty($e_phone) || empty($e_address)) {
        $msg = "Please fill all filed .";
    } else {
        if (strlen($e_address) > 100) {
            $msg = 'Address allowed between 100 charecter.';
        } else {
            $update = "UPDATE reg_em SET E_name='$e_name',E_id='$e_id',E_email='$e_email',E_phone='$e_phone',E_address='$e_address',E_photo='$img_name' WHERE id='$edite_id'";
            $ex_update = mysqli_query($connect, $update);

            if ($ex_update) {
                header('location:em_list.php');
                $uploade = move_uploaded_file($img_tmp_name, "uploaded_file/img/" . $img_name);
                if ($uploade) {
                    $msg = 'Register succeded.';
                }
            }
        }

    }

}
// update end

$get_info = "SELECT * FROM reg_em WHERE id='$edite_id'";
$ex_get_info = mysqli_query($connect, $get_info);
$row = mysqli_fetch_array($ex_get_info);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=== css link ===-->
    <?php include 'include_file/css_link.php' ?>
    <title></title>
</head>

<body class="body" id="body">
    <?php include 'include_file/header.php' ?>
    <section class="reg_em">
        <div class="container">
            <div class="content">
                <div class="card px-5 py-4 mt-5 mb-5">
                    <h2 class="text-center"><span class="span">Edite</span> employee</h2>
                    <span class="text-danger">
                        <?php echo $msg; ?>
                    </span>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="input_box mt-3">
                            <label for="name">Name</label> <br>
                            <input type="text" name="e_name" class="mt-2 p-2" value="<?php echo $row['E_name'] ?>"
                                placeholder="Employee name">
                        </div>
                        <div class="input_box mt-5">
                            <label for="name">Id no</label> <br>
                            <input type="text" name="e_id" class="mt-2 p-2" value="<?php echo $row['E_id'] ?>"
                                placeholder="Employee id">
                        </div>
                        <div class="input_box mt-5">
                            <label for="name">Email</label> <br>
                            <input type="text" name="e_email" class="mt-2 p-2" value="<?php echo $row['E_email'] ?>"
                                placeholder="Employee email">
                        </div>
                        <div class="input_box mt-5">
                            <label for="name">Phone</label> <br>
                            <input type="text" name="e_phone" class="mt-2 p-2" value="<?php echo $row['E_phone'] ?>"
                                placeholder="Employee phone">
                        </div>
                        <div class="input_box mt-5">
                            <label for="name">Address</label> <br>
                            <input type="text" name="e_address" class="mt-2 p-2" value="<?php echo $row['E_address'] ?>"
                                placeholder="Employee address">
                        </div>
                        <div class="mt-5">
                            <label for="name">Photo</label> <br>
                            <input type="file" name="img" class="mt-2 p-2" value="<?php echo $row['E_photo'] ?>">
                        </div>
                        <div class="mt-5 mb-5 text-center">
                            <button type="submit" name="register" class="my_btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--=== javascript link ===-->
    <?php include 'include_file/js_link.php' ?>
</body>

</html>