<?php
include('../includes/config.php');
session_start();
if (isset($_SESSION['uname'])) {
    $coor = $_SESSION['uname'][1]; //call username of coordinator
    $profid = $_SESSION['uname'][2]; //admin id  of coordinator

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

        <link rel="stylesheet" href="hUopttps://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

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

        <main class="mt-5 pt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-header">
                        Add Student
                    </div>
                </div>
            </div>

            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="row breadcrumb-div">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Faculty</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Professors</li>
                </ol>
            </div>

            <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-spacing">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Fill the Information Below</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">


                                        <form class="row g-3 form-group" method="post" action="../Functions/update_function.php">
                                            <form class="row g-3 form-group" method="POST">
                                                <?php
                                                $sid = intval($_GET['student_id']);
                                                $sql = "SELECT * from srms_students where student_id=:sid";
                                                $query = $dbh->prepare($sql);
                                                $query->bindParam(':sid', $sid, PDO::PARAM_STR);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {   ?>

                                                        <div class="col-md-6">
                                                            <label for="inputfname" class="form-label">First Name</label>
                                                            <input value="<?php echo htmlentities($result->firstname); ?> " name="firstname" type="input" class="form-control" id="inputfname" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputmiddlename" class="form-label">Middle Name</label>
                                                            <input value="<?php echo htmlentities($result->middlename); ?>" name="middlename" type="input" class="form-control" id="inputmiddlename" required>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label for="inputlastname" class="form-label">Last Name</label>
                                                            <input value="<?php echo htmlentities($result->lastname); ?>" name="lastname" type="input" class="form-control" id="inputlastname">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputgender" class="form-label">Gender</label>
                                                            <select name="gender" id="inputgender" class="form-select">
                                                                <option selected><?php echo htmlentities($result->gender); ?></option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputcourse" class="form-label">Add Course</label>
                                                            <select name="course" class="form-select" id="inputcourse" required="required">
                                                                <option selected><?php echo htmlentities($result->course); ?></option>
                                                                <?php $sql = "SELECT * from srms_tblcourses";
                                                                $query = $dbh->prepare($sql);
                                                                $query->execute();
                                                                $aresults = $query->fetchAll(PDO::FETCH_OBJ);
                                                                if ($query->rowCount() > 0) {
                                                                    foreach ($aresults as $aresult) {   ?>
                                                                        <option value="<?php echo htmlentities($aresult->Course); ?>"><?php echo htmlentities($aresult->Course); ?></option>
                                                                <?php }
                                                                } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="inputyear" class="form-label">Add Year</label>
                                                            <select name="year" id="inputyear" class="form-select">
                                                                <option selected><?php echo htmlentities($result->year) ?></option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="inputsection" class="form-label">Add Section</label>
                                                            <select name="section" id="inputsection" class="form-select">
                                                                <option selected><?php echo htmlentities($result->section); ?></option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>D</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label for="inputstudentnum" class="form-label">Student Number</label>
                                                            <input value="<?php echo htmlentities($result->studentsnumber); ?>" name="studentsnumber" type="number" class="form-control" id="inputstudentnum">
                                                        </div>


                                                        <div class="col-md-8">
                                                            <label for="inputclass" class="form-label">Add Student to Class</label>
                                                            <select name="class" class="form-control" id="inputcourse" required="required">
                                                                <option value="">Select Course</option>
                                                                <?php $sql = "SELECT * from srms_tblclasses";
                                                                $query = $dbh->prepare($sql);
                                                                $query->execute();
                                                                $bresults = $query->fetchAll(PDO::FETCH_OBJ);
                                                                if ($query->rowCount() > 0) {
                                                                    foreach ($bresults as $bresult) {   ?>
                                                                        <option value="<?php echo htmlentities($bresult->class_id); ?>"><?php echo htmlentities($bresult->Course); ?> (<?php echo htmlentities($bresult->Year); ?>-<?php echo htmlentities($bresult->Section); ?>)</option>
                                                                <?php }
                                                                } ?>
                                                            </select>
                                                        </div>


                                                        <div class="col-md-4">
                                                            <label for="selectstatus" class="form-label">Status</label>
                                                            <select name="status" id="selectstatus" class="form-select">
                                                                <option selected><?php echo htmlentities($result->status); ?></option>
                                                                <option>Active</option>
                                                                <option>Non-Active</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12">
                                                            <label for="inputAddress" class="form-label">Address</label>
                                                            <input value="<?php echo htmlentities($result->address); ?>" name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail" class="form-label">Email Address</label>
                                                            <input value="<?php echo htmlentities($result->email); ?>" name="email" type="text" class="form-control" id="inputEmail" placeholder="juan@gmail.com">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputnum" class="form-label">Contact Number</label>
                                                            <input value="<?php echo htmlentities($result->contactnum); ?>" name="contactnum" type="text" class="form-control" id="inputnum" placeholder="093788...">
                                                        </div>

                                                        <div class="col-6">

                                                            <input value="<?php echo  $studif = intval($_GET['student_id']); ?>" name="studid" type="hidden" class="form-control ">
                                                        </div>




                                                        <div class="col-12">
                                                            <button name="updatestud" type="submit" class="btn btn-primary">Update</button>
                                                        </div>

                                                <?php }
                                                } ?>
                                            </form>
                                    </div>


                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                    </div>
                </div>
                <!-- /.content-container -->
                </div>
            </section>

        </main>
    <?php
} else {
    header("location:../login.php");
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
    </body>

    </html>