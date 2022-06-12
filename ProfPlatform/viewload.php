<?php
session_start();
if (isset($_SESSION['uname'])) {
  $profid = $_SESSION['uname'][1]; //call prof id
  $profname  = $_SESSION['uname'][2]; // name of prof
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
                <li><a class="dropdown-item" href="changepass.php">Change Password</a></li>
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

    <nav class="navbar navbar-expand-md bg-light" id="main-bar">
      <div class="collapse navbar-collapse" id="topNavBar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="home.php" class="nav-link">Faculty Load</a>
          </li>

        </ul>
      </div>
    </nav>



    <!--//////////////////////////////////////////////////////
                        Students CLASS BODY
    ////////////////////////////////////////////////////// -->


    <div class="container-fluid" id="contentview">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 p-header bg-secondary">

            <?php
            include('../includes/dbconn.php');
            $combi_id = $_GET['combi_id'];
            $sql = "SELECT * FROM srms_tblmanagesubcombi
            INNER JOIN srms_tblsubject ON srms_tblmanagesubcombi.sub_id = srms_tblsubject.sub_id
             WHERE combi_id = $combi_id";
            $connect = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($connect);
            $num = mysqli_num_rows($connect);
            if ($num > 0) {
              foreach ($connect as $row) {
            ?>
                <h1><?php echo $row['SubjectDescription'] ?></h1>



          </div>
      <?php
              }
            }
      ?>


        </div>
      </div>



      <section>
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-header">
                  <span><i class="bi bi-table me-2"></i></span> Student List

                  <div class="text-right">
                    <?php
                    include('../includes/config.php');
                    $combi = intval($_GET['combi_id']);
                    $sql = "SELECT * from srms_tblmanagesubcombi where combi_id=:combi";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':combi', $combi, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                      foreach ($results as $result) {
                    ?>
                        <a href="print_load.php?combi_id=<?php echo htmlentities($result->combi_id) ?>"><i class="bi bi-printer">Print</i></a>
                    <?php $cnt = $cnt + 1;
                      }
                    } ?>
                  </div>

                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="load" class="table hover data-table" style="width: 100%">
                      <thead>
                        <tr>

                          <th class="text-center">Name</th>
                          <th class="text-center">Course/Year/Section</th>
                          <th class="text-center">Student Number</th>
                          <th class="text-center">Midterm</th>
                          <th class="text-center">Finalterm</th>
                          <th class="text-center">Final Grade</th>
                          <th class="text-center">Semester</th>
                          <th class="hidden">COMBI</th>
                          <th class="text-center">Manage Grade</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include('../includes/dbconn.php');
                        $combi_id = $_GET['combi_id'];
                        $sql = "SELECT * FROM `srms_tblresult` INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                        INNER JOIN srms_tblsubject ON srms_tblsubject.sub_id = srms_tblresult.Subject
                        INNER JOIN srms_tblprof ON srms_tblprof.prof_id = srms_tblresult.prof_id
                        WHERE srms_tblresult.combi_id = $combi_id";
                        $connect = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($connect);
                        $num = mysqli_num_rows($connect);
                        if ($num > 0) {

                          foreach ($connect as $row) {



                        ?>


                            <tr>

                              <td class="text-center"><?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?>. <?php echo $row['lastname'] ?></td>
                              <td class="text-center"><?php echo $row['course'] ?>/<?php echo $row['year'] ?>-<?php echo $row['section'] ?></td>
                              <td class="text-center"><?php echo $row['studentsnumber'] ?></td>
                              <td class="text-center"><?php echo $row['mt'] ?></td>
                              <td class="text-center"><?php echo $row['ft'] ?></td>
                              <td class="text-center"><?php echo $row['Final'] ?></td>
                              <td class="text-center"><?php echo $row['Sem'] ?></td>
                              <td class="hidden"><?php echo $row['combi_id'] ?></td>



                              <td width=200 class="text-center">

                                <button type="button" class="btn btn-success btn-sm gradebtn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnaddg">
                                  Grade
                                </button>
                                <button type="button" class="btn btn-warning btn-sm incbtn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btninc">
                                  INC
                                </button>
                                <button type="button" class="btn btn-danger btn-sm dropbtn " data-bs-toggle="modal" data-bs-target="#exampleModal" id="btndrop">
                                  DROPPED
                                </button>



                                </a>
                              </td>
                            </tr>

                        <?php

                          }
                        }
                        ?>

                      </tbody>




                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>


    </div>




  <?php
} else {
  header("location:loginprof.php");
}
  ?>



  <!-- Modal -->


  <!-- grade modal -->
  <form action="./result_function.php" method="POST">

    <div class="modal fade" id="grademodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">Add Grades</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>



          <div class="modal-body">






            <div class="col-md-12">
              <label for="name" class="form-label"></label>
              <input name="firstname" type="text" class="form-control " id="firstname">
            </div>

            <div class="col-md-12">
              <label for="studnum" class="form-label">Student Number</label>
              <input name="studentsnumber" type="text" class="form-control " id="studentsnumber">
            </div>
            <input name="subject" type="hidden" class="form-control " id="subject">




            <div class="col-md-12">
              <label for="inputfirstsem" class="form-label">MIDTER GRADE</label>
              <input name="firstsem" type="text" class="form-control" id="studentsnumber">
            </div>


            <div class="col-md-12">
              <label for="inputsecondsem" class="form-label">LAST TERM GRADE</label>
              <input name="secondsem" type="text" class="form-control" id="secondsem">
            </div>


          </div>

          <div class="col-md-12">
            <label for="name" class="form-label"></label>
            <input name="combi_id" type="hidden" class="form-control " id="combi_id">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name="updatedata" type="submit" class="btn btn-primary">Update Data</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- /grade modal -->






  <!-- inc modal -->
  <form action="./result_function.php" method="POST">

    <div class="modal fade" id="incmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">INC</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>



          <div class="modal-body">




            <p class="text-warning">Are you sure that this student does not meet all the requirement in order to pass this subject course </p>

            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input name="firstname" type="text" class="form-control " id="name">
            </div>

            <div class="col-md-12">
              <label for="studnum" class="form-label">Student Number</label>
              <input name="studentsnumber" type="text" class="form-control " id="sn">
            </div>
            <input name="subject" type="hidden" class="form-control " id="sub">

          </div>

          <div class="col-md-12">
            <label for="name" class="form-label"></label>
            <input name="combi_id" type="hidden" class="form-control " id="combi">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name="incsubmit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- /inc modal -->



  <!-- inc modal -->
  <form action="./result_function.php" method="POST">

    <div class="modal fade" id="dropmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">INC</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>



          <div class="modal-body">




            <p class="text-warning">Do you want to drop this student from this subject course </p>

            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input name="firstname" type="text" class="form-control " id="dname">
            </div>

            <div class="col-md-12">
              <label for="studnum" class="form-label">Student Number</label>
              <input name="studentsnumber" type="text" class="form-control " id="dsn">
            </div>
            <input name="subject" type="hidden" class="form-control " id="dsub">

          </div>

          <div class="col-md-12">
            <label for="name" class="form-label"></label>
            <input name="combi_id" type="hidden" class="form-control " id="dcombi">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name="dropsubmit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- /inc modal -->





  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

  <script src="..//node_modules/jquery/dist/jquery.js"></script>
  <script src="..//assets/js/script.js"></script>
  <script src="../node_modules/jquery/dist/jquery.min.js"></script>


  <!-- for datatables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      // $('.gradebtn').on('click', function() 
      $("#load").on("click", ".gradebtn", function() {


        $('#grademodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        console.log(data);
        $('#firstname').val(data[0]);
        $('#studentsnumber').val(data[2]);
        $('#subject').val(data[5]);
        $('#combi_id').val(data[7]);
      });

    });
  </script>


  <!-- inc modal scrip -->
  <script>
    $(document).ready(function() {
      // $('.gradebtn').on('click', function() 
      $("#load").on("click", ".incbtn", function() {


        $('#incmodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        console.log(data);
        $('#name').val(data[0]);
        $('#sn').val(data[2]);
        $('#sub').val(data[5]);
        $('#combi').val(data[7]);
      });

    });
  </script>
  <!-- ///inc modal scrip -->


  <!-- drop modal scrip -->
  <script>
    $(document).ready(function() {
      // $('.gradebtn').on('click', function() 
      $("#load").on("click", ".dropbtn", function() {


        $('#dropmodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        console.log(data);
        $('#dname').val(data[0]);
        $('#dsn').val(data[2]);
        $('#dsub').val(data[5]);
        $('#dcombi').val(data[7]);
      });

    });
  </script>
  <!-- ///drop modal scrip -->


  <script>
    // var dt = $('#load').DataTable();
    // //hide the first column
    // dt.column(8).visible(true)
    // dt.column(1).visible(true);
  </script>
  </script>



  </body>

  </html>