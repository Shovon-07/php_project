<?php
$connect = mysqli_connect('localhost', 'root', '', 'php_project');

$create_name = $create_Fname = $create_Mname = $d_birth = $create_phone = $create_email = $create_pass = $create_Cpass = $err_msg = '';

if(isset($_REQUEST['sign_up'])) {
    $create_name = $_REQUEST['create_name'];
    $create_Fname = $_REQUEST['create_Fname'];
    $create_Mname = $_REQUEST['create_Mname'];
    $d_birth = $_REQUEST['d_birth'];
    $create_phone = $_REQUEST['create_phone'];
    $create_email = $_REQUEST['create_email'];
    $create_pass = $_REQUEST['create_pass'];
    $create_Cpass = $_REQUEST['create_Cpass'];

    $select_email = "SELECT * FROM user WHERE user_email='$create_email'";
    $ex_query = mysqli_query($connect,$select_email);
    $email_check = mysqli_num_rows($ex_query);

    if($create_name=='' || $create_Fname=='' || $create_Mname=='' || $d_birth=='' || $create_phone=='' || $create_email=='' || $create_pass=='' || $create_Cpass=='') {
        $err_msg = 'Please fill up all input filed';
    } else {
        if($email_check>0) {
            $err_msg = 'Email already exist.';
        } else {
            $special_char = preg_match('@[^\w]@',$create_pass);
            if(!$special_char || strlen($create_pass)<8) {
                $err_msg = 'Password required is not valid.';
            } else {
                if($create_pass!==$create_Cpass) {
                    $err_msg = 'Password & confirm password is not equal.';
                } else {
                    $insert = "INSERT INTO user(user_name, user_Fname, user_Mname, d_birth, user_phone, user_email, user_pass) VALUES ('$create_name','$create_Fname','$create_Mname','$d_birth','$create_phone','$create_email','$create_pass')";

                    $ex_insert = mysqli_query($connect,$insert);

                    if($ex_insert) {
                        header('location:index.php');
                    } else {
                        $err_msg = 'Registration failed';
                    }
                }
            }
        }
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
            <div class="card py-4 px-5" style="margin: 30px auto;">
                <form action="" method="post">
                    <h2 class="text-center mb-4 login_txt">Create account</h2>
                    <span class="text-danger"><?php echo $err_msg ?></span>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="input_box my-4">
                                <label for="create_name">Name</label> <br>
                                <input type="text" name="create_name" class="w-100 p-2" id="create_name" value="<?php echo $create_name ?>"
                                    placeholder="Enter your name">
                            </div>
                            <div class="input_box my-4">
                                <label for="create_name">Father's name</label> <br>
                                <input type="text" name="create_Fname" class="w-100 p-2" value="<?php echo $create_Fname ?>" placeholder="Enter your name">
                            </div>
                            <div class="input_box my-4">
                                <label for="create_name">Mother's name</label> <br>
                                <input type="text" name="create_Mname" class="w-100 p-2" value="<?php echo $create_Mname ?>" placeholder="Enter your name">
                            </div>
                            <div class="input_box my-4 w-50">
                                <label for="create_name">Date of Birth</label> <br>
                                <input type="date" name="d_birth" class="p-2" value="<?php echo $d_birth ?>">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="input_box my-4">
                                <label for="create_name">Phone</label> <br>
                                <input type="text" name="create_phone" class="w-100 p-2"
                                value="<?php echo $create_phone ?>" placeholder="Enter your phone number">
                            </div>
                            <div class="input_box my-4">
                                <label for="create_name">Email</label> <br>
                                <input type="email" name="create_email" class="w-100 p-2"
                                value="<?php echo $create_email ?>" placeholder="Enter a valid email address">
                                <span class="text-danger">
                                    <?php
                                    // if(isset($_REQUEST['email_err_msg'])) {
                                    //     echo $email_err_msg;} 
                                    ?>
                                </span>
                            </div>
                            <div class="input_box my-4">
                                <label for="create_name">Password</label> <br>
                                <div class="d-flex align-items-center">
                                    <input type="password" name="create_pass" class="w-100 p-2"  id="pass_input" value="<?php echo $create_pass ?>" placeholder="Enter your password">
                                    <span class="eye d-flex align-items-center">
                                        <i class="fa-solid fa-eye" id="eye_open"></i>
                                        <i class="fa-solid fa-eye-slash" id="eye_cls"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input_box my-4">
                                <label for="create_name">Confirm Password</label> <br>
                                <input type="password" name="create_Cpass" class="w-100 p-2"
                                value="<?php echo $create_Cpass ?>" placeholder="Confirm your password">
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="sign_up" class="btn w-50 offset-3 mt-4 my_btn" id="sign_up">Sign
                        up</button>
                </form>
                <span class="mt-3 crt_acc_txt">Already have an account? <a href="index.php"
                        class="crt_acc_link">login</a></span>
            </div>
        </div>
    </section>

    <!--=== javascript link ===-->
    <?php include 'include_file/js_link.php' ?>
</body>

</html>

<!--  <i class="fa-solid fa-eye text-light"></i>
                  <i class="fa-solid fa-eye-slash text-secondary"></i> -->