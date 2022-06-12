<?php
include('../includes/dbconn.php');
session_start();
if (isset($_SESSION['uname'])) {
    $profid = $_SESSION['uname'][1]; //call prof id
    $profname  = $_SESSION['uname'][2]; // name of prof
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>UCC|SRM</title>
        <link rel="icon" href="../assets/image/csd.png" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    </head>

    <body>


        <!--//////////////////////////////////////////////////////
                         NAVBAR SECTION
    ////////////////////////////////////////////////////// -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue-dark fixed-top">
            <div class="container-fluid">
                <a href="#" class="logo">
                    <img src="../assets/image/csd.png" alt="logo image" />
                </a>
                <a class="navbar-brand" href="https://ucc-caloocan.edu.ph/">
                    Scholastic Record Management
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNavBar">
                    <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ms-2 mb-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"> <?php echo $profname ?></a></li>
                                <br>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <li>
                                    <a class="dropdown-item" href="./plogout.php">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- second navbar -->
        <div>
            <nav class="navbar navbar-expand-md mb-1 " id="main-bar">
                <div class="collapse navbar-collapse" id="topNavBar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Faculty Load</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>



        <div class="container py-5">

            <div class="row mt-5 pt-5">
                <?php if (isset($_SESSION['change'])) {
                ?>
                    <div class="d-flex flex-row-reverse">
                        <div class=" alert alert-success" role="alert" id="alert">
                            <strong>Well done!</strong> <?php echo $_SESSION['change']; ?>
                        </div>
                    </div>
                <?php
                    unset($_SESSION['change']);
                }
                ?>



                <form class="formpass col-md-6 offset-md-3 " method="POST" action="../Functions/update_function.php">
                    <?php
                    $profid = $_SESSION['uname'][1];
                    $sql = "SELECT * FROM srms_tblprof WHERE prof_id = '$profid' ";
                    $connect = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($connect);
                    $num = mysqli_num_rows($connect);
                    if ($num > 0) {
                        foreach ($connect as $row) {
                    ?>
                            <div class="form-group ">
                                <label for="default" class="col-sm-2 control-label">Username</label>
                                <div class="">
                                    <input type="text" name="username" class="form-control" id="default" required="required" value="<?php echo $row['Username']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Password</label>
                                <div class="">
                                    <input type="password" name="password" class="form-control" id="default" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label">Password</label>

                            </div>
                            <div class="">
                                <input type="hidden" name="prof_id" class="form-control" id="default" required="required" value="<?php echo $row['prof_id']; ?>">
                            </div>
                            <div class="form-group has-success">
                                <div class="">
                                    <button type="submit" name="changepass" class="btn btn-success btn-labeled">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                </div>
                            </div>
                    <?php


                        }
                    }
                    ?>
                </form>

            </div>
        </div>






    <?php
} else {
    header("location:loginprof.php");
}
    ?>

    <script src="..//node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="..//node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

    <script src="..//node_modules/jquery/dist/jquery.js"></script>
    <script src="..//assets/js/script.js"></script>
    <!-- <script src=".//assets/js/dataTables.bootstrap5.min.js"></script>
    <script src=".//assets/js/jquery.dataTables.min.js"></script> -->

    <!-- for datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        setTimeout(function() {
            document.getElementById("alert").style.display = "none";
        }, 3000);
    </script>


    </body>

    </html>