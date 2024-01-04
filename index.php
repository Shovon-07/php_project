<?php 
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

$msg = '';
if(isset($_REQUEST['login'])) {
    $user_name = $_REQUEST['user_name'];
    $user_email = $_REQUEST['user_email'];
    $user_pass = $_REQUEST['user_pass'];

    $login_info = "SELECT * FROM user WHERE user_name='$user_name' AND user_email='$user_email' AND user_pass='$user_pass'";
    $ex_login = mysqli_query($connect, $login_info);
    $row = mysqli_fetch_array($ex_login);

    if($row) {
        // $msg = 'Login succedex';
        header('location:home.php');
        $_SESSION['user_email']=$row['user_email'];
    } else {
        $msg = 'Not a valid account';
    }

}
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

<body class="body">
    <section class="login">
        <div class="container">
            <div class="card p-5 w-50" style="margin: 100px auto;">
                <form action="" method="post">
                    <h2 class="text-center mb-4 login_txt">Login</h2>
                    <span class="text-danger"><?php echo $msg ?></span>
                    <div class="input_box my-4">
                        <input type="text" name="user_name" class="w-100 p-2" placeholder="@ user name">
                    </div>
                    <div class="input_box my-4">
                        <input type="email" name="user_email" class="w-100 p-2" placeholder="Enter your email">
                    </div>
                    <div class="input_box my-4">
                        <div class="d-flex align-items-center">
                            <input type="password" name="user_pass" class="w-100 p-2" id="pass_input"
                                placeholder="Enter your password">
                            <span class="eye d-flex align-items-center" id="eye">
                                <i class="fa-solid fa-eye" id="eye_open"></i>
                                <i class="fa-solid fa-eye-slash" id="eye_cls"></i>
                            </span>
                        </div>
                    </div>
                    <button type="submit" name="login" class="btn w-50 offset-3 mt-4 my_btn">Login</button>
                </form>
                <span class="mt-3 crt_acc_txt">Don't have any account? <a
                        href="create_account.php" class="crt_acc_link">create_account</a></span>
            </div>
        </div>
    </section>

    <?php include 'include_file/theme_toogler.php' ?>

    <!--=== javascript link ===-->
    <?php include 'include_file/js_link.php' ?>
</body>

</html>