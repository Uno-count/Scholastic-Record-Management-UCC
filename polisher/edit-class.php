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









        <!-- MAIN BODY -->
        <main class="mt-5 pt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-header">
                        Update Class
                    </div>
                </div>
            </div>

            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="row breadcrumb-div">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Class</li>
                </ol>
            </div>

            <section class="section">


                <div class="container-fluid">
                    <div class="row">
                        <div class="form-spacing">

                            <?php
                            $cid = intval($_GET['class_id']);
                            $sql = "SELECT * from srms_tblclasses where class_id=:cid";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':cid', $cid, PDO::PARAM_STR);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {   ?>

                                    <div class="panel">
                                        <div class="panel-heading ">
                                            <div class="panel-title spacing">
                                                <h5>Update Student Class</h5>
                                                <h3><?php echo htmlentities($result->Course); ?></h3>
                                                <h4><?php echo htmlentities($result->Year); ?> - <?php echo htmlentities($result->Section); ?></h4>
                                            </div>
                                        </div>
                                        <?php if (isset($_SESSION['edclass'])) {
                                        ?>
                                            <div class="alert alert-success left-icon-alert" role="alert" id="alert">
                                                <strong>Well done!</strong> <?php echo $_SESSION['edclass']; ?>
                                            </div>
                                        <?php
                                            unset($_SESSION['edclass']);
                                        } ?>
                                        <div class="panel-body">


                                            <form method="post" action="../Functions/update_function.php">
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Class Course</label>
                                                    <div class="">
                                                        <select name="course" class="form-control" id="default" required="required">
                                                            <option value="">--Select Course--</option>
                                                            <?php $sql = "SELECT * from srms_tblcourses";
                                                            $query = $dbh->prepare($sql);
                                                            $query->execute();
                                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                            if ($query->rowCount() > 0) {
                                                                foreach ($results as $result) {   ?>
                                                                    <option value="<?php echo htmlentities($result->Course); ?>"><?php echo htmlentities($result->Course); ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Class Year</label>
                                                    <div class="">
                                                        <select name="year" class="form-control" id="default" required="required">
                                                            <option value="">--Select Year Level--</option>
                                                            <?php $sql = "SELECT * from srms_tblyear";
                                                            $query = $dbh->prepare($sql);
                                                            $query->execute();
                                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                            if ($query->rowCount() > 0) {
                                                                foreach ($results as $result) {   ?>
                                                                    <option value="<?php echo htmlentities($result->Year); ?>"><?php echo htmlentities($result->Year); ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Section</label>
                                                    <div class="">
                                                        <select name="classsection" class="form-control" id="default" required="required">
                                                            <option value="">--Select Section-- </option>
                                                            <?php $sql = "SELECT * from srms_tblsection";
                                                            $query = $dbh->prepare($sql);
                                                            $query->execute();
                                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                            if ($query->rowCount() > 0) {
                                                                foreach ($results as $result) {   ?>
                                                                    <option value="<?php echo htmlentities($result->Section); ?>">&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                        <?php }
                                } ?>
                                        <div class="form-group has-success">
                                            <div class="">
                                                <button type="submit" name="classedit" class="btn btn-success btn-labeled">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="">
                                                <input value="<?php echo  $cid = intval($_GET['class_id']); ?>" name="classid" type="hidden" class="form-control ">
                                            </div>
                                        </div>



                                            </form>


                                        </div>
                                    </div>
                        </div>

                    </div>





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

    <script type="text/javascript">
        setTimeout(function() {
            document.getElementById("alert").style.display = "none";
        }, 3000);
    </script>



    </body>

    </html>