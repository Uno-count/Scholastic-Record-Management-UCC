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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css"> -->
    <title>UCC|SRM</title>
    <link rel="icon" href="../assets/image/csd.png" type="image/x-icon">
  </head>




  <body>


    <section>


      <div class="container-fluid">
        <div class="row">
          <?php
          $studentsnumber = intval($_GET['studentsnumber']);
          $sql = "SELECT * FROM `srms_students` WHERE srms_students.studentsnumber=:studentsnumber";
          $query = $dbh->prepare($sql);
          $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);
          $cnt = 1;
          if ($query->rowCount() > 0) {
            foreach ($results as $result) {
          ?>
              <div class="col-1">
              </div>
              <div class="col-2 ">
                <img class="plogo mt-3 " src="../assets/image/ucc logo.png" alt="" srcset="">
              </div>
              <div class="col-7 deets">
                <h4 class="text-center mt-3">UNIVERSITY OF CALOOCAN CITY</h4>
                <p class="text-center mt-n1">Gen. San Miguel St. Sangangdaan Caloocan City</p>
                <p class="text-center mt-n1">COMPUTER STUDIES DEPARTMENT</p>
                <h5 class="text-center mt-n1"><?php echo htmlentities($result->course) ?></h5>
              </div>
          <?php $cnt = $cnt + 1;
            }
          } ?>
        </div>
      </div>

      <div class="container-fluid info">

        <div class="row">

          <?php
          $studentsnumber = intval($_GET['studentsnumber']);
          $sql = "SELECT * FROM `srms_students` WHERE srms_students.studentsnumber=:studentsnumber";
          $query = $dbh->prepare($sql);
          $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);
          $cnt = 1;
          if ($query->rowCount() > 0) {
            foreach ($results as $result) {
          ?>
              <div class="col-4 bor text-start">



                <p>Name: &nbsp; &nbsp; &nbsp; <?php echo htmlentities($result->firstname) ?> <?php echo htmlentities($result->middlename) ?> <?php echo htmlentities($result->lastname) ?></p>


              </div>

              <div class="col-6 bor text-start ">
                <p>Course: &nbsp; &nbsp; &nbsp; <?php echo htmlentities($result->course) ?> </p>
              </div>
              <div class="col-2 bor text-start">
                <p> Section : &nbsp; &nbsp; &nbsp; <?php echo htmlentities($result->section) ?></p>
              </div>
        </div>

        <div class="row">

          <div class="col-8 bor text-start">
            Address: &nbsp; &nbsp; &nbsp; <?php echo htmlentities($result->address) ?>
          </div>
          <div class="col-4 bor text-start">
            STUDENT NO: &nbsp; &nbsp; &nbsp; <?php echo htmlentities($result->studentsnumber) ?>
          </div>

        </div>
        <div class="row">
          <div class="col-2 bor text-start">
            Gender: &nbsp; <?php echo htmlentities($result->gender) ?>
          </div>
          <div class="col-6 bor text-start">
            Email: &nbsp; &nbsp; &nbsp; &nbsp; <?php echo htmlentities($result->email) ?>
          </div>
          <div class="col-4 bor text-start">
            CP#: &nbsp; &nbsp; &nbsp; <?php echo htmlentities($result->contactnum) ?>
          </div>
        </div>
    <?php $cnt = $cnt + 1;
            }
          } ?>
      </div>



      <!--#region 1-->
      <div class="container-fluid mt-3">
        <?php
        $studentsnumber = intval($_GET['studentsnumber']);
        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
          WHERE srms_tblclasses.Year= 1 AND srms_students.studentsnumber = :studentsnumber";
        $query = $dbh->prepare($sql);
        $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
          foreach ($results as $result) {
        ?>
            <div class="row">

              <div class="col-12 bor text-center">
                FIRST YEAR | <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?>
              </div>

              <div class="col g-0">
                <div class="leftside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">First Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>

              <div class="col g-0">
                <div class="rightside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">First Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>

                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>

            </div>
        <?php $cnt = $cnt + 1;
          }
        } ?>
      </div>
      <!-- #endregion -->


      <!--#region 2-->
      <div class="container-fluid mt-3">
        <?php
        $studentsnumber = intval($_GET['studentsnumber']);
        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
          WHERE srms_tblclasses.Year= 2 AND srms_students.studentsnumber = :studentsnumber";
        $query = $dbh->prepare($sql);
        $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
          foreach ($results as $result) {
        ?>
            <div class="row">
              <div class="col-12 bor text-center">
                SECOND YEAR | <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?>
              </div>
              <div class="col g-0">
                <div class="leftside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">First Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>

              <div class="col g-0">
                <div class="rightside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">First Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>

                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>
            </div>
        <?php $cnt = $cnt + 1;
          }
        } ?>
      </div>
      <!-- #endregion -->


      <!--#region 3-->
      <div class="container-fluid mt-3">
        <?php
        $studentsnumber = intval($_GET['studentsnumber']);
        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
          WHERE srms_tblclasses.Year= 3 AND srms_students.studentsnumber = :studentsnumber";
        $query = $dbh->prepare($sql);
        $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
          foreach ($results as $result) {
        ?>
            <div class="row">
              <div class="col-12 bor text-center">
                THIRD YEAR | <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?>
              </div>
              <div class="col g-0">
                <div class="leftside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">First Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $studentsnumber = intval($_GET['studentsnumber']);
                      $sem = "First Semester";
                      $sql = "SELECT * FROM `srms_tblresult`
                                                                INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                where srms_students.studentsnumber=:studentsnumber AND srms_tblresult.Sem = :sem ";
                      $query = $dbh->prepare($sql);
                      $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
                      $query->bindParam(':sem', $sem, PDO::PARAM_STR);
                      $query->execute();
                      $results = $query->fetchAll(PDO::FETCH_OBJ);
                      $cnt = 1;
                      if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                      ?>
                          <tr>

                            <td class="text-center scprnt"><?php echo htmlentities($result->SubjectCode) ?></td>
                            <td class="text-center scprnt"><?php echo htmlentities($result->SubjectDescription) ?></td>
                            <td class="text-center scprnt"><?php echo htmlentities($result->Final) ?></td>
                            <td class="text-center scprnt"><?php echo htmlentities($result->Units) ?></td>


                          </tr>
                      <?php $cnt = $cnt + 1;
                        }
                      } ?>


                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>

              <div class="col g-0">
                <div class="rightside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">Second Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $studentsnumber = intval($_GET['studentsnumber']);
                      $sem = "Second Semester";
                      $sql = "SELECT * FROM `srms_tblresult`
                                                                INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                                                                INNER JOIN srms_tblprof ON srms_tblresult.prof_id = srms_tblprof.prof_id
                                                                INNER JOIN srms_tblsubject ON srms_tblresult.Subject = srms_tblsubject.sub_id
                                                                where srms_students.studentsnumber=:studentsnumber AND srms_tblresult.Sem = :sem ";
                      $query = $dbh->prepare($sql);
                      $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
                      $query->bindParam(':sem', $sem, PDO::PARAM_STR);
                      $query->execute();
                      $results = $query->fetchAll(PDO::FETCH_OBJ);
                      $cnt = 1;
                      if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                      ?>
                          <tr>

                            <td class="text-center scprnt"><?php echo htmlentities($result->SubjectCode) ?></td>
                            <td class="text-center scprnt"><?php echo htmlentities($result->SubjectDescription) ?></td>
                            <td class="text-center scprnt"><?php echo htmlentities($result->Final) ?></td>
                            <td class="text-center scprnt"><?php echo htmlentities($result->Units) ?></td>


                          </tr>
                      <?php $cnt = $cnt + 1;
                        }
                      } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>
            </div>
        <?php $cnt = $cnt + 1;
          }
        } ?>
      </div>
      <!-- #endregion -->



      <!--#region 4-->
      <div class="container-fluid mt-3">
        <?php
        $studentsnumber = intval($_GET['studentsnumber']);
        $sql = "SELECT * FROM `srms_students` INNER JOIN srms_tblclasses ON srms_students.class_id = srms_tblclasses.class_id
          WHERE srms_tblclasses.Year= 4 AND srms_students.studentsnumber = :studentsnumber";
        $query = $dbh->prepare($sql);
        $query->bindParam(':studentsnumber', $studentsnumber, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
          foreach ($results as $result) {
        ?>
            <div class="row">
              <div class="col-12 bor text-center">
                FOURTH YEAR | <?php echo htmlentities($result->syb) ?>-<?php echo htmlentities($result->sye) ?>
              </div>
              <div class="col g-0">
                <div class="leftside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">First Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>

              <div class="col g-0">
                <div class="rightside">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center scprnt">First Semester</th>
                        <th class="text-center scprnt">Section</th>
                        <th class="text-center scprnt">C</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th class="text-center scprnt">Subject Code</th>
                        <th class="text-center scprnt">Subject Description</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Units</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>
                        <td class="text-center scprnt"></td>

                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th class="text-end scprntsub">Total</th>
                        <th class="text-center scprntsub">Total</th>
                        <th class="text-center scprntsub">remarks</th>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>
            </div>
        <?php $cnt = $cnt + 1;
          }
        } ?>
      </div>
      <!-- #endregion -->






      <div>
        <button id="printbtn" onclick="window.print()" class="btn btn-primary btnprint ">Print</button>
      </div>
    </section>

  <?php
} else {
  header("location:./login.php");
}
  ?>

  <script>
    window.onload = function() {
      $("#printbtn").click();
    }
  </script>

  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <script src="../assets/js/script.js"></script>
  <!-- <script src=".//assets/js/dataTables.bootstrap5.min.js"></script>
    <script src=".//assets/js/jquery.dataTables.min.js"></script> -->

  <!-- for datatables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  </body>

  </html>