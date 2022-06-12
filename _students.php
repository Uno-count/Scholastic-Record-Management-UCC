<?php
include('./includes/config.php');
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
    <link rel="icon" href="./assets/image/csd.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>


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
          <img src="./assets/image/csd.png" alt="logo image">
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

                <li><a class="dropdown-item" href="./polisher/changeinfo.php?admin_id=<?php echo $_SESSION['uname'][2]; ?>">Change Password</a></li>
                <li><a class="dropdown-item" href="coorlogout.php">Log-out</a></li>
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
              <a href="./_dashboard.php" class="nav-link px-3 active">
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
                    <a href="./_create-class.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                      <span>Create Class</span>
                    </a>
                  </li>
                  <li>
                    <a href="./_manage-class.php" class="nav-link px-3">
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
                    <a href="./_create-subject.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                      <span>Add Subjects</span>
                    </a>
                  </li>
                  <li>
                    <a href="./_manage-subject.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-kanban"></i></span>
                      <span>Manage Subjects</span>
                    </a>
                  </li>
                  <li>
                    <a href="./_addsubjectcombination.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-bounding-box"></i></span>
                      <span>Add Curricullum</span>
                    </a>
                  </li>
                  <li>
                    <a href="./_managesubjectcombination.php" class="nav-link px-3">
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
                    <a href="./_create-faculty.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-person-plus"></i></span>
                      <span>Create Faculty</span>
                    </a>
                  </li>
                  <li>
                    <a href="./_add-prof.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-person-plus-fill"></i></span>
                      <span>Add Professors</span>
                    </a>
                  </li>
                  <li>
                    <a href="./_manage-faculty.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-person-video2"></i></span>
                      <span>Manage Faculty</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="./_students.php" class="nav-link px-3 active">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 p-header">
            Students Enrolled
          </div>
        </div>
      </div>
      <?php if (isset($_SESSION['addstudent'])) {
      ?>
        <div class="alert alert-success left-icon-alert" role="alert" id="alert">
          <strong>Well done!</strong> <?php echo $_SESSION['addstudent']; ?>
        </div>
      <?php
        unset($_SESSION['addstudent']);
      } ?>

      <?php if (isset($_SESSION['studup'])) {
      ?>
        <div class="alert alert-success left-icon-alert" role="alert" id="alert">
          <strong>Well done!</strong> <?php echo $_SESSION['studup']; ?>
        </div>
      <?php
        unset($_SESSION['studup']);
      } ?>

      <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="row breadcrumb-div">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Enrolled Students</li>
        </ol>
      </div>

      <section>
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-header">
                  <span><i class="bi bi-table me-2"></i></span> List of Students
                </div>
                <div class="card-body">

                  <div class="table-responsive">

                    <table id="example" class="table hover data-table" style="width: 100%">

                      <thead>

                        <tr>
                          <th>Firstname</th>
                          <th>Middlename</th>
                          <th>Lastname</th>
                          <th>Course</th>
                          <th>Year</th>
                          <th>Section</th>
                          <th>Student Number</th>
                          <th>Status</th>
                          <th>Manage Shcolastic</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $sql = "SELECT srms_students.student_id, srms_students.firstname, srms_students.middlename, srms_students.lastname, srms_students.course, srms_students.year, srms_students.section, srms_students.studentsnumber, srms_students.status, srms_students.scholastic from srms_students";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                          foreach ($results as $result) {   ?>
                            <tr>

                              <td class="fname"><?php echo htmlentities($result->firstname); ?> </td>
                              <td class="mname"><?php echo htmlentities($result->middlename); ?> </td>
                              <td class="lname"> <?php echo htmlentities($result->lastname); ?></td>
                              <td class="cors"><?php echo htmlentities($result->course); ?></td>
                              <td class="yr"><?php echo htmlentities($result->year); ?></td>
                              <td class="sec"><?php echo htmlentities($result->section); ?></td>
                              <td class="sn"><?php echo htmlentities($result->studentsnumber); ?></td>
                              <td class="stat"><?php echo htmlentities($result->status); ?></td>
                              <td>

                                <a href="./polisher/edit-student.php?student_id=<?php echo htmlentities($result->student_id); ?>" class="edit" id="btneditmodal" name="btneditmodal" data-bs-toggle="modal"> <i class=" bi bi-pencil-square"></i></a>
                                &nbsp;
                                &nbsp;
                                <a href="./views/view_grade.php?student_id=<?php echo htmlentities($result->student_id); ?>"><i class="bi bi-person-lines-fill"></i></a>
                                &nbsp;

                              </td>

                            </tr>
                        <?php $cnt = $cnt + 1;
                          }
                        } ?>


                      </tbody>
                      <tfoot>
                        <tr>

                          <th>Firstname</th>
                          <th>Middlename</th>
                          <th>Lastname</th>
                          <th>Course</th>
                          <th>Year</th>
                          <th>Section</th>
                          <th>Student Number</th>
                          <th>Status</th>
                          <th>Manage Shcolastic</th>
                        </tr>
                      </tfoot>



                    </table>
                    <a href="./_add-student.php">
                      <button type="button" class="btn btn-primary">Add</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

    </main>



  <?php
} else {
  header("location:login.php");
}
  ?>


  <script src=".//node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src=".//node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

  <script src=".//node_modules/jquery/dist/jquery.js"></script>
  <script src=".//assets/js/script.js"></script>
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