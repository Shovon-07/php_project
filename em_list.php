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
    <section class="employee_list">
        <div class="container">
            <div class="content">

                <form action="" method="post">
                    <div class="search_box my-4 w-50">
                        <div class="d-flex align-items-center">
                            <input type="search" name="search_input" class="w-100 p-2"
                                placeholder="Search employee by name">
                            <span class="d-flex align-items-center mx-2" style="cursor: pointer;">
                                <button type="submit" name="search" class="sercht_btn"><i
                                        class="fa-solid fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </form>

                <h2 class="text-center"><span class="span">Employee</span> List</h2>
                
                <form action="delete_al.php" method="post">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>Name</th>
                                <th>ID no</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Photo</th>
                                <th>Action</th>
                                <th><button class="btn bg-danger text-light" name="del_al_btn">Delete all</button></th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // em list start
                            $search_input = '';
                            if (isset($_REQUEST['search'])) {
                                $search_input = $_REQUEST['search_input'];

                                // $select_search = "SELECT * FROM reg_em WHERE E_name LIKE ";
                            }

                            $select_info = "SELECT * FROM reg_em WHERE E_name LIKE '%$search_input%' ORDER BY id ASC";
                            $ex_select_info = mysqli_query($connect, $select_info);

                            $i = 0;
                            while ($row = mysqli_fetch_array($ex_select_info)) {
                                // $e_name = $row['E_name'];
                                $i += 1;
                                // em list end
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $i; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['E_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['E_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['E_email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['E_phone'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['E_address'] ?>
                                    </td>
                                    <td><img src="uploaded_file/img/<?php echo $row['E_photo'] ?>" class="img-fluid"
                                            style="width: 40px;" alt=""></td>
                                    <td>
                                        <a href="edite.php?edite_id=<?php echo $row['id']; ?>" class="action_btn"><i
                                                class="fa-solid fa-pencil"></i></a> ||
                                        <a href="delete.php?del_id=<?php echo $row['id']; ?>&img=<?php echo $row['E_photo']; ?>"
                                            class="action_btn"><i class="fa-solid fa-trash"
                                                onclick="return confirm('Are you sure for delete ?')"></i></a>
                                    </td>
                                    <td><input type="checkbox" name="delete_al[]" value="<?php echo $row['id'] ?>"></td>
                                    <td>
                                        <?php
                                        if ($row['status'] == 1) {
                                            echo "<a href='status.php?id=$row[id]&&status=0'><button class='bg-success text-light'>Enable</button></a>";
                                        } else {
                                            echo "<a href='status.php?id=$row[id]&&status=1'><button class='bg-danger text-light'>Disable</button></a>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </section>

    <!--=== javascript link ===-->
    <?php include 'include_file/js_link.php' ?>
</body>

</html>