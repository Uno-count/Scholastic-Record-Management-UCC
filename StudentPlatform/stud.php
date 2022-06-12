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
                        <div class="card">
                            <div class="card-header">
                                <?php
                                include('../includes/dbconn.php');
                                $sql = "SELECT * FROM srms_students WHERE studentsnumber = $studentsnumber ";
                                $query = mysqli_query($conn, $sql);
                                $check_handled = mysqli_num_rows($query);
                                if ($check_handled) {
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>

                                        <h3 class="card-title">
                                            <?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?> <?php echo $row['lastname'] ?> (<?php echo $row['studentsnumber'] ?>)
                                        </h3>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="studprint.php?studentsnumber=<?php echo $row['studentsnumber'] ?>"><i class="bi bi-printer">Print</i></a>
                                    </div>
                                </div>
                            </div>
                    <?php

                                    }
                                } else {
                                    echo "Student Not Found";
                                }
                    ?>

                    <!--#region1-->
                    <!-- first sem -->
                    <div class="row">
                        <?php
                        include('../includes/dbconn.php');
                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 1 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (First Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include('../includes/config.php');
                                                            $sem = "First Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 1";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                            // echo "Still Not Enrolled";
                        }
                        ?>
                    </div>
                    <!-- second sem -->
                    <div class="row">
                        <?php

                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 2 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (Second Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $sem = "Second Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 2";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                            // echo "Still Not Enrolled";
                        }
                        ?>
                    </div>
                    <!-- #endregion1 -->



                    <!--#region2-->
                    <!-- first sem -->
                    <div class="row">
                        <?php
                        include('../includes/dbconn.php');
                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 2 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (First Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include('../includes/config.php');
                                                            $sem = "First Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 2";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                            // echo "Still Not Enrolled";
                        }
                        ?>
                    </div>
                    <!-- second sem -->
                    <div class="row">
                        <?php

                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 2 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (Second Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $sem = "Second Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 2";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                            // echo "Still Not Enrolled";
                        }
                        ?>
                    </div>
                    <!-- #endregion2 -->



                    <!--#region3-->
                    <!-- first sem -->
                    <div class="row">
                        <?php
                        include('../includes/dbconn.php');
                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 3 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (First Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include('../includes/config.php');
                                                            $sem = "First Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 3";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                            // echo "Still Not Enrolled";
                        }
                        ?>
                    </div>
                    <!-- second sem -->
                    <div class="row">
                        <?php

                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 3 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (Second Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $sem = "Second Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 3";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                            // echo "Still Not Enrolled";
                        }
                        ?>
                    </div>
                    <!-- #endregion3 -->



                    <!--#region4-->
                    <!-- first sem -->
                    <div class="row">
                        <?php
                        include('../includes/dbconn.php');
                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 4 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (First Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include('../includes/config.php');
                                                            $sem = "First Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 4";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                            // echo "Still Not Enrolled";
                        }
                        ?>
                    </div>
                    <!-- second sem -->
                    <div class="row">
                        <?php

                        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
                                        WHERE srms_tblclasses.Year= 4 AND studentsnumber = $studentsnumber ";
                        $query = mysqli_query($conn, $sql);
                        $check_handled = mysqli_num_rows($query);
                        if ($check_handled) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card card-theme">
                                            <div class="card-header">
                                                <h5>School Year <?php echo $row['syb'] ?>-<?php echo $row['sye'] ?> (Second Semester)</h5>

                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Subject Code</th>
                                                                <th class="text-center">Subject Description</th>
                                                                <th class="text-center">Professor</th>
                                                                <th class="text-center">Units</th>
                                                                <th class="text-center">Final Grades</th>
                                                                <th class="text-center">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $sem = "Second Semester";
                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                    where  srms_students.studentsnumber= $studentsnumber AND srms_tblresult.Sem = :sem AND srms_students.Year= 4";
                                                            $query1 = $dbh->prepare($sql1);

                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                            $query1->execute();
                                                            $results = $query1->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query1->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                            ?>



                                                                    <tr>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectCode) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->SubjectDescription) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Fullname) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Units) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Final) ?></td>
                                                                        <td class="text-center "><?php echo htmlentities($result->Remarks) ?></td>
                                                                    </tr>
                                                            <?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                        <?php

                            }
                        } else {
                        }
                        ?>


                    </div>
                    <!-- #endregion4 -->




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
    </body>



    </html>