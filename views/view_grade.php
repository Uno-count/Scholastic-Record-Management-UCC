<?php
include('../includes/config.php');
session_start();
if (isset($_SESSION['uname'])) {
    $coor = $_SESSION['uname'][1]; //call username of coordinator

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
                </button>
                <a href="#" class="logo">
                    <img src="../assets/image/csd.png" alt="logo image">
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
                            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">

                                <li><a class="dropdown-item" href="../polisher/changeinfo.php?admin_id=<?php echo $_SESSION['uname'][2]; ?>">Change Password</a></li>
                                <li><a class="dropdown-item" href="../coorlogout.php">Log-out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--//////////////////////////////////////////////////////
                         End NAVBAR SECTION
    ////////////////////////////////////////////////////// -->


        <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
            <div class="offcanvas-body p-0">
                <nav class="navbar-dark">
                    <ul class="navbar-nav">
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                SCHOLASTIC
                            </div>
                        </li>
                        <li>
                            <a href="../_dashboard.php" class="nav-link px-3 active">
                                <span class="me-2"><i class="bi bi-columns"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="my-4">
                            <hr class="dropdown-divider bg-light" />
                        </li>
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                                Manage
                            </div>
                        </li>
                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#classesSub">
                                <span class="me-2"><i class="bi bi-book"></i></span>
                                <span>Classes</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="classesSub">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="../_create-class.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                                            <span>Create Class</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_manage-class.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-kanban"></i></span>
                                            <span>Manage Class</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>

                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#subjectsSub">
                                <span class="me-2"><i class="bi bi-pen"></i></span>
                                <span>Subjects</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="subjectsSub">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="../_create-subject.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                                            <span>Add Subjects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_manage-subject.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-kanban"></i></span>
                                            <span>Manage Subjects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_addsubjectcombination.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-bounding-box"></i></span>
                                            <span>Add Curricullum</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_managesubjectcombination.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-tools"></i></span>
                                            <span>Manage Curricullum</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#facultySub">
                                <span class="me-2"><i class="bi bi-person-rolodex"></i></span>
                                <span>Faculty</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="facultySub">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="../_create-faculty.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-plus"></i></span>
                                            <span>Create Faculty</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_add-prof.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-plus-fill"></i></span>
                                            <span>Add Professors</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_manage-faculty.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-video2"></i></span>
                                            <span>Manage Faculty</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="../_students.php" class="nav-link px-3 active">
                                <span class="me-1"><i class="bi bi-person-bounding-box"></i></span>
                                <span>Enrolled Students</span>
                            </a>
                        </li>



                    </ul>
                </nav>
            </div>
        </div>







        <!--//////////////////////////////////////////////////////
                         Off-canvas
    ////////////////////////////////////////////////////// -->
        <!--  offcanvas -->
        <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
            <div class="offcanvas-body p-0">
                <nav class="navbar-dark">
                    <ul class="navbar-nav">

                        <li>
                            <div class="mb-3 text-muted fs-4 fw-bold text-uppercase px-3">
                                <?php if (isset($_SESSION['uname'])) {

                                    echo $_SESSION['uname'][1]; //firstname
                                }
                                ?>
                            </div>
                        </li>



                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                SCHOLASTIC
                            </div>
                        </li>

                        <li>
                            <a href="../_dashboard.php" class="nav-link px-3 active">
                                <span class="me-2"><i class="bi bi-columns"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="my-4">
                            <hr class="dropdown-divider bg-light" />
                        </li>
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                                Manage
                            </div>
                        </li>
                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#classesSub">
                                <span class="me-2"><i class="bi bi-book"></i></span>
                                <span>Classes</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="classesSub">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="../_create-class.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                                            <span>Create Class</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_manage-class.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-kanban"></i></span>
                                            <span>Manage Class</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>

                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#subjectsSub">
                                <span class="me-2"><i class="bi bi-pen"></i></span>
                                <span>Subjects</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="subjectsSub">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="../_create-subject.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                                            <span>Add Subjects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_manage-subject.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-kanban"></i></span>
                                            <span>Manage Subjects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_addsubjectcombination.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-bounding-box"></i></span>
                                            <span>Add Curricullum</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_managesubjectcombination.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-tools"></i></span>
                                            <span>Manage Curricullum</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#facultySub">
                                <span class="me-2"><i class="bi bi-person-rolodex"></i></span>
                                <span>Faculty</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="facultySub">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="../_create-faculty.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-plus"></i></span>
                                            <span>Create Faculty</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_add-prof.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-plus-fill"></i></span>
                                            <span>Add Professors</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../_manage-faculty.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-video2"></i></span>
                                            <span>Manage Faculty</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="../_students.php" class="nav-link px-3 active">
                                <span class="me-1"><i class="bi bi-person-bounding-box"></i></span>
                                <span>Enrolled Students</span>
                            </a>
                        </li>



                    </ul>
                </nav>
            </div>
        </div>
        <!-- offcanvas -->




        <!--//////////////////////////////////////////////////////
                        Students CLASS BODY
    ////////////////////////////////////////////////////// -->
        <main class="mt-5 pt-3">
            <section>
                <div class="content">
                    <div class="container">
                        <div class="content-header">
                            <h1>Grades</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <?php
                                    $sid = intval($_GET['student_id']);
                                    $sql0 = "SELECT * from srms_students where student_id=:sid";
                                    $query0 = $dbh->prepare($sql0);
                                    $query0->bindParam(':sid', $sid, PDO::PARAM_STR);
                                    $query0->execute();
                                    $results0 = $query0->fetchAll(PDO::FETCH_OBJ);
                                    $cnt0 = 1;
                                    if ($query0->rowCount() > 0) {
                                        foreach ($results0 as $result0) {
                                    ?>
                                            <h3 class="card-title">
                                                <?php echo htmlentities($result0->firstname) ?> <?php echo htmlentities($result0->middlename) ?> <?php echo htmlentities($result0->lastname) ?> (<?php echo htmlentities($result0->studentsnumber) ?>)
                                            </h3>

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="print.php?studentsnumber=<?php echo htmlentities($result0->studentsnumber); ?>"><i class="bi bi-printer">Print</i></a>
                                        </div>
                                    </div>


                                    <!--//////////////////////////////////////////////////////
                                                        1st Year
                                    ////////////////////////////////////////////////////// -->
                                    <div class="row">
                                        <?php
                                            $sid = intval($_GET['student_id']);
                                            $sql = "SELECT * FROM `srms_students`
                                                            INNER JOIN srms_tblclasses ON srms_students.class_id=srms_tblclasses.class_id where student_id=:sid AND srms_tblclasses.Year= 1";
                                            $query = $dbh->prepare($sql);
                                            $query->bindParam(':sid', $sid, PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                        ?>
                                                <div class="col-12">
                                                    <div class="container">
                                                        <div class="card card-theme">
                                                            <div class="card-header">

                                                                <h5>School Year <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?></h5>

                                                            </div>

                                                        </div>

                                                        <div class="card-body">


                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Admission Status</dt>
                                                                        <dd><?php echo htmlentities($result->status) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <dl>
                                                                        <dt>Course</dt>
                                                                        <dd><?php echo htmlentities($result->course) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Year-Section</dt>
                                                                        <dd><?php echo htmlentities($result->year) ?> - <?php echo htmlentities($result->section) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <dl>
                                                                        <dt>GPA (excludes NSTP and subjects with non-numeric ratings)</dt>
                                                                        <dd>Grades are not complete</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Semester</dt>
                                                                        <dd>First Semester</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "First Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=1";
                                                                            $query1 = $dbh->prepare($sql1);
                                                                            $query1->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query1->execute();
                                                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt1 = 1;
                                                                            if ($query1->rowCount() > 0) {
                                                                                foreach ($results1 as $result1) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result1->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result1->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt1 = $cnt1 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>



                                                            <!-- second sem -->


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <p>Second Semester</p>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "Second Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql2 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=1";
                                                                            $query2 = $dbh->prepare($sql2);
                                                                            $query2->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query2->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query2->execute();
                                                                            $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt2 = 1;
                                                                            if ($query2->rowCount() > 0) {
                                                                                foreach ($results2 as $result2) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result2->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result2->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt2 = $cnt2 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    <?php $cnt = $cnt + 1;
                                                }
                                            } ?>


                                                        </div>

                                                    </div>
                                                </div>
                                    </div>

                                    <!--//////////////////////////////////////////////////////
                                                        2nd Year
                                    ////////////////////////////////////////////////////// -->
                                    <div class="row">
                                        <?php
                                            $sid = intval($_GET['student_id']);
                                            $sql = "SELECT * FROM `srms_students`
                                                            INNER JOIN srms_tblclasses ON srms_students.class_id=srms_tblclasses.class_id where student_id=:sid AND srms_tblclasses.Year= 2";
                                            $query = $dbh->prepare($sql);
                                            $query->bindParam(':sid', $sid, PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                        ?>
                                                <div class="col-12">
                                                    <div class="container">
                                                        <div class="card card-theme">
                                                            <div class="card-header">

                                                                <h5>School Year <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?></h5>

                                                            </div>

                                                        </div>

                                                        <div class="card-body">


                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Admission Status</dt>
                                                                        <dd><?php echo htmlentities($result->status) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <dl>
                                                                        <dt>Course</dt>
                                                                        <dd><?php echo htmlentities($result->course) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Year-Section</dt>
                                                                        <dd><?php echo htmlentities($result->year) ?> - <?php echo htmlentities($result->section) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <dl>
                                                                        <dt>GPA (excludes NSTP and subjects with non-numeric ratings)</dt>
                                                                        <dd>Grades are not complete</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Semester</dt>
                                                                        <dd>First Semester</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "First Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=2";
                                                                            $query1 = $dbh->prepare($sql1);
                                                                            $query1->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query1->execute();
                                                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt1 = 1;
                                                                            if ($query1->rowCount() > 0) {
                                                                                foreach ($results1 as $result1) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result1->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result1->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt1 = $cnt1 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>



                                                            <!-- second sem -->


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <p>Second Semester</p>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "Second Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql2 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=2";
                                                                            $query2 = $dbh->prepare($sql2);
                                                                            $query2->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query2->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query2->execute();
                                                                            $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt2 = 1;
                                                                            if ($query2->rowCount() > 0) {
                                                                                foreach ($results2 as $result2) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result2->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result2->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt2 = $cnt2 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    <?php $cnt = $cnt + 1;
                                                }
                                            } ?>




                                                        </div>





                                                    </div>
                                                </div>
                                    </div>


                                    <!--//////////////////////////////////////////////////////
                                                        3rd Year
                                    ////////////////////////////////////////////////////// -->
                                    <div class="row">
                                        <?php
                                            $sid = intval($_GET['student_id']);
                                            $sql = "SELECT * FROM `srms_students`
                                                            INNER JOIN srms_tblclasses ON srms_students.class_id=srms_tblclasses.class_id where student_id=:sid AND srms_tblclasses.Year= 3";
                                            $query = $dbh->prepare($sql);
                                            $query->bindParam(':sid', $sid, PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                        ?>
                                                <div class="col-12">
                                                    <div class="container">
                                                        <div class="card card-theme">
                                                            <div class="card-header">

                                                                <h5>School Year <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?></h5>

                                                            </div>

                                                        </div>

                                                        <div class="card-body">


                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Admission Status</dt>
                                                                        <dd><?php echo htmlentities($result->status) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <dl>
                                                                        <dt>Course</dt>
                                                                        <dd><?php echo htmlentities($result->course) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Year-Section</dt>
                                                                        <dd><?php echo htmlentities($result->year) ?> - <?php echo htmlentities($result->section) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <dl>
                                                                        <dt>GPA (excludes NSTP and subjects with non-numeric ratings)</dt>
                                                                        <dd>Grades are not complete</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Semester</dt>
                                                                        <dd>First Semester</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "First Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=3";
                                                                            $query1 = $dbh->prepare($sql1);
                                                                            $query1->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query1->execute();
                                                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt1 = 1;
                                                                            if ($query1->rowCount() > 0) {
                                                                                foreach ($results1 as $result1) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result1->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result1->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt1 = $cnt1 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>



                                                            <!-- second sem -->


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <p>Second Semester</p>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "Second Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql2 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=3";
                                                                            $query2 = $dbh->prepare($sql2);
                                                                            $query2->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query2->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query2->execute();
                                                                            $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt2 = 1;
                                                                            if ($query2->rowCount() > 0) {
                                                                                foreach ($results2 as $result2) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result2->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result2->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt2 = $cnt2 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    <?php $cnt = $cnt + 1;
                                                }
                                            } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>


                                    <!--//////////////////////////////////////////////////////
                                            4th Year
                         ////////////////////////////////////////////////////// -->
                                    <div class="row">
                                        <?php
                                            $sid = intval($_GET['student_id']);
                                            $sql = "SELECT * FROM `srms_students`
                                                            INNER JOIN srms_tblclasses ON srms_students.class_id=srms_tblclasses.class_id where student_id=:sid AND srms_tblclasses.Year= 4";
                                            $query = $dbh->prepare($sql);
                                            $query->bindParam(':sid', $sid, PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                        ?>
                                                <div class="col-12">
                                                    <div class="container">
                                                        <div class="card card-theme">
                                                            <div class="card-header">

                                                                <h5>School Year <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?></h5>

                                                            </div>

                                                        </div>

                                                        <div class="card-body">


                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Admission Status</dt>
                                                                        <dd><?php echo htmlentities($result->status) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <dl>
                                                                        <dt>Course</dt>
                                                                        <dd><?php echo htmlentities($result->course) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Year-Section</dt>
                                                                        <dd><?php echo htmlentities($result->year) ?> - <?php echo htmlentities($result->section) ?></dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <dl>
                                                                        <dt>GPA (excludes NSTP and subjects with non-numeric ratings)</dt>
                                                                        <dd>Grades are not complete</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <dl>
                                                                        <dt>Semester</dt>
                                                                        <dd>First Semester</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "First Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql1 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=4";
                                                                            $query1 = $dbh->prepare($sql1);
                                                                            $query1->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query1->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query1->execute();
                                                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt1 = 1;
                                                                            if ($query1->rowCount() > 0) {
                                                                                foreach ($results1 as $result1) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result1->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result1->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result1->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt1 = $cnt1 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>



                                                            <!-- second sem -->


                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <table class="table table-bordered">
                                                                        <p>Second Semester</p>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Subject Code</th>
                                                                                <th>Subject Description</th>
                                                                                <th>Professor</th>
                                                                                <th>Units</th>
                                                                                <th>Final Grades</th>
                                                                                <th>Remarks</th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $sem = "Second Semester";
                                                                            $sid = intval($_GET['student_id']);
                                                                            $sql2 = "SELECT * FROM `srms_tblresult`
                                                                                    INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                                    INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                                    INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                                    where  srms_students.student_id=:sid AND srms_tblresult.Sem=:sem AND srms_students.Year=4";
                                                                            $query2 = $dbh->prepare($sql2);
                                                                            $query2->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                                            $query2->bindParam(':sem', $sem, PDO::PARAM_STR);
                                                                            $query2->execute();
                                                                            $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                                                                            $cnt2 = 1;
                                                                            if ($query2->rowCount() > 0) {
                                                                                foreach ($results2 as $result2) {
                                                                            ?>

                                                                                    <tr>




                                                                                        <td><?php echo htmlentities($result2->SubjectCode) ?></td>
                                                                                        <td><?php echo htmlentities($result2->SubjectDescription) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Fullname) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Units) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Final) ?></td>
                                                                                        <td><?php echo htmlentities($result2->Remarks) ?></td>



                                                                                    </tr>
                                                                            <?php $cnt2 = $cnt2 + 1;
                                                                                }
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    <?php $cnt = $cnt + 1;
                                                }
                                            } ?>




                                                        </div>





                                                    </div>
                                                </div>
                                    </div>

                                </div>












                            </div>
                        </div>

                    </div>
                </div>
        <?php $cnt0 = $cnt0 + 1;
                                        }
                                    } ?>
            </section>
        <?php
    } else {
        header("location:login.php");
    }
        ?>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

        <script src="../node_modules/jquery/dist/jquery.js"></script>
        <script src="../assets/js/script.js"></script>


        <!-- for datatables -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        </main>



    </body>

    </html>