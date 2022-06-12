<?php
session_start();

if (isset($_SESSION['studnum'])) {
    $studentsnumber = $_SESSION['studnum'][1]; //call studentnumber

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="icon" href="../assets/image/ucc logo.png" type="image/x-icon">
        <title>UCC-SRM</title>
    </head>

    <body>


        <!--//////////////////////////////////////////////////////
                         NAVBAR SECTION
    ////////////////////////////////////////////////////// -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue-dark fixed-top">
            <div class="container-fluid">
                <a href="#" class="logo">
                    <img src="../assets/image/ucc logo.png" alt="logo image" />
                </a>
                <a class="navbar-brand" href="https://ucc-caloocan.edu.ph/">
                    University Of Caloocan City
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

                                <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
                                <li>
                                    <a class="dropdown-item" href="studlogout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-5 pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="container">

                        <?php if (isset($_SESSION['studpass'])) {
                        ?>
                            <div class="d-flex flex-row-reverse">
                                <div class=" alert alert-success" role="alert" id="alert">
                                    <strong>Well done!</strong> <?php echo $_SESSION['studpass']; ?>
                                </div>
                            </div>
                        <?php
                            unset($_SESSION['studpass']);
                        }
                        ?>

                        <div class="card">
                            <?php
                            include('../includes/dbconn.php');
                            $sql = "SELECT * FROM srms_students WHERE studentsnumber = $studentsnumber ";
                            $query = mysqli_query($conn, $sql);
                            $check_handled = mysqli_num_rows($query);
                            if ($check_handled) {
                                while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                    <div class="card-header">


                                        <h3 class="card-title">
                                            <?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?> <?php echo $row['lastname'] ?> (<?php echo $row['studentsnumber'] ?>)
                                        </h3>

                                    </div>
                                    <form action="../Functions/update_function.php" method="POST">
                                        <div class="form-groupp mt-4">
                                            <label for="default" class="control-label">Student Number</label>
                                            <div class="">
                                                <input disabled type="text" name="studnum" class="form-control" id="default" value="<?php echo $row['studentsnumber']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-groupp mt-5 my-3 ">
                                            <label for="default" class="control-label">Password</label>
                                            <div class="">
                                                <input type="password" name="password" class="form-control" id="default" required="required">
                                            </div>
                                        </div>



                                        <div class="form-groupp has-success my-3 ">
                                            <div class="">
                                                <button type="submit" name="studpass" class="btn btn-success btn-labeled">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            </div>
                                        </div>
                                    </form>
                            <?php

                                }
                            } else {
                                echo "Student Not Found";
                            }
                            ?>


                            <!-- end of whole form -->
                        </div>
                    </div>

                </div>
            </div>
        </div>


    <?php
} else {
    header("location:login-stud.php");
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