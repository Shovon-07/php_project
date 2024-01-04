<?php 
// login start
session_start();

if ($_SESSION['user_email'] == true) {
    $user_email = $_SESSION['user_email'];
} else {
    header('location:index.php');
}
// login end

$connect = mysqli_connect('localhost','root','','php_project');


// settings start

// settings end

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
    <section class="up_prof">
        <div class="container">
            <div class="content">
                <div class="card px-5 py-4 mt-5 mb-5">
                    <h2 class="text-center"><span class="span">Update</span> profile</h2>
                    <!-- <span class="text-danger"><?php echo $msg; ?></span> -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="settings_input mt-3">
                            <label for="name">Name</label> </br>
                            <input type="text" name="s_name" class="mt-2 p-2" placeholder="Change name">
                        </div>
                        <div class="settings_input mt-3">
                        <label for="create_name">Date of Birth</label> </br>
                                <input type="date" name="d_birth" class="p-2">
                        </div>
                        <div class="settings_input mt-3">
                        <label for="create_name">Phone</label> </br>
                                <input type="text" name="create_phone" class="p-2"
                                placeholder="Change phone number">
                        </div>
                        <div class="settings_input mt-3">
                        <label for="create_name">Email</label> </br>
                                <input type="email" name="create_email" class="p-2" placeholder="Change email address">
                        </div>
                        <div class="settings_input mt-3">
                        <label for="create_name">Password</label> </br>
                                    <input type="password" name="create_pass" class="p-2" placeholder="Change password">
                        </div>
                        <div class="settings_input mt-3">
                        <label for="create_name">Password</label> </br>
                                    <input type="password" name="create_pass" class="p-2" placeholder="Confirm password">
                        </div>
                        <div class="mt-3">
                        <label for="create_name">Profile picture</label> </br>
                                    <input type="file" name="create_pass" class="p-2">
                        </div>
                        <div class="mt-5 mb-5 text-center">
                            <button type="submit" name="Update_profile" class="my_btn">Update profile</button>
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