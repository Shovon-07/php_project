<?php
session_start();

if ($_SESSION['user_email'] == true) {
    $user_email = $_SESSION['user_email'];
} else {
    header('location:index.php');
}

$connect = mysqli_connect('localhost', 'root', '', 'php_project');

// $select_division = "SELECT * FROM division";
// $ex_division = mysqli_query($connect,$select_division);

$select = "SELECT * FROM divisions";
$ex = mysqli_query($connect,$select);

// $select_division = "SELECT * FROM division";
// $ex_division = mysqli_query($connect,$select_division);

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
    <title>Ajax</title>
</head>

<body class="body" id="body">
    <?php include 'include_file/header.php' ?>
    <section class="ajax">
        <div class="container">
            <div class="content mb-5">
                <!-- <button id="ajax">Click ajax</button> -->
                <div class="card bg-secondary px-5 py-2">
                    <div class="card-header text-center fs-2">Ajax Lerning</div>
                    <input type="text" id="name" class="form-control mt-4" placeholder="Enter student name">
                    <input type="email" id="email" class="form-control mt-4" placeholder="Enter student email">
                    <input type="text" id="phone" class="form-control mt-4" placeholder="Enter student phone">
                    <input type="file" id="img" class="mt-4">
                    <button type="submit" name="save" class="mt-4 mb-3 btn bg-info offset-3 w-50"
                        id="save">Save</button>
                    <button type="submit" name="save" class="mt-4 mb-3 btn bg-info offset-3 w-50" id="read_data">Reade
                        Data</button>
                </div>

                <!-- <p id="relode"></p> -->

                <h2 class="text-light text-center mt-5">Show all data</h2>
                <h2 class="text-danger text-center mt-5" id="del_failed"></h2>
                <table class="table border text-light text-center mt-4">
                    <thead>
                        <tr>
                            <th>Sl no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Edite</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        
                    </tbody>
                </table>


                <!-- Dependable dropdown -->
                <!-- <h3 class="text-center mt-5">Select Country</h3>c
                <select class="form-select mt-5 w-50 offset-3" id="division">
                    <option >Country</option>
                    <?php
                    //while($row = mysqli_fetch_array($ex_division)) { ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['division'] ?></option>

                    <?php // } ?>
                </select>

                <h3 class="text-center mt-5">Select city</h3>
                <select class="form-select mt-5 w-50 offset-3" id="city">
                    <option>District</option>
                    
                </select> -->


                <h3 class="text-center mt-5">Division</h3>
                <select class="w-50 offset-3 bg-secondary text-light" name="" id="div_id">
                    <option value="">Select Division</option>
                    <?php while($row = mysqli_fetch_array($ex)) { ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['bn_name'] ?></option>
                    <?php } ?>
                </select>



                <h3 class="text-center mt-5">District</h3>
                <select class="w-50 offset-3 bg-secondary text-light upo_cls" name="" id="dist_id">
                    <option value="">Select District</option>
                </select>  
                
                <h3 class="text-center mt-5">Upozela</h3>
                <select class="w-50 offset-3 bg-secondary text-light" name="" id="upozeles">
                    <option value="">Select Upozela</option>
                </select>
                
                <h3 class="text-center mt-5">Union</h3>
                <select class="w-50 offset-3 bg-secondary text-light" name="" id="unions">
                    <option value="">Select Union</option>
                </select>

                <button id="save_loc">Save location</button>

                <div id="shower"></div>

            </div>
        </div>
    </section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!--=== javascript link ===-->
    <?php include 'include_file/js_link.php' ?>
</body>

</html>