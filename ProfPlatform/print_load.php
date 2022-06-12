<?php
session_start();
include('../includes/config.php');
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
                <div class="col-1">
                </div>
                <div class="col-2 ">
                    <img class="plogo mt-3 " src="../assets/image/ucc logo.png" alt="" srcset="">
                </div>
                <div class="col-7 deets">
                    <h4 class="text-center mt-3">UNIVERSITY OF CALOOCAN CITY</h4>
                    <p class="text-center mt-n1">Gen. San Miguel St. Sangangdaan Caloocan City</p>
                    <h5 class="text-center mt-n1">GRADINGSHEET</h5>
                </div>
            </div>
        </div>

        <div class="container-fluid info">



            <?php
            // include('../includes/config.php');
            $combi_id = intval($_GET['combi_id']);
            $sql = "SELECT * FROM srms_tblmanagesubcombi INNER JOIN srms_tblclasses ON srms_tblmanagesubcombi.class_id = srms_tblclasses.class_id 
        INNER JOIN srms_tblsubject ON srms_tblmanagesubcombi.sub_id = srms_tblsubject.sub_id
        WHERE  srms_tblmanagesubcombi.combi_id = :combi_id ";
            $query = $dbh->prepare($sql);
            $query->bindParam(':combi_id', $combi_id, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
                foreach ($results as $result) {
            ?>
                    <div class="row">





                        <div class="col-6  text-start">
                            Course: <?php echo htmlentities($result->Course) ?>
                        </div>
                        <div class="col-3 ">
                            <?php echo htmlentities($result->Sem) ?>
                        </div>
                        <div class="col-3  text-end">
                            S.Y. <?php echo htmlentities($result->syb) ?> - <?php echo htmlentities($result->sye) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4  text-start">
                            Subject Code: <?php echo htmlentities($result->SubjectCode) ?>
                        </div>
                        <div class="col-8  text-end">
                            Year and Section: <?php echo htmlentities($result->Year) ?> (<?php echo htmlentities($result->Section) ?>)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8  text-start">
                            Subject Description: <?php echo htmlentities($result->SubjectDescription) ?>
                        </div>
                        <div class="col-4  text-end">
                            Units: <?php echo htmlentities($result->Units) ?>
                        </div>
                    </div>


            <?php $cnt = $cnt + 1;
                }
            } ?>

        </div>




        <!--#region 1-->
        <div class="container-fluid mt-3">




            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th class="text-center scprnt">Name Of Student
                            (Alphabetical Order)
                        </th>
                        <th class="text-center scprnt">Student No.</th>
                        <th class="text-center scprnt">Midterm</th>
                        <th class="text-center scprnt">Final Term</th>
                        <th class="text-center scprnt">Final Grade</th>
                        <th class="text-center scprnt">Remarks</th>

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
                                <td class="text-center scprnt"><?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?>. <?php echo $row['lastname'] ?></td>
                                <td class="text-center scprnt"><?php echo $row['studentsnumber'] ?></td>
                                <td class="text-center scprnt"><?php echo $row['mt'] ?></td>
                                <td class="text-center scprnt"><?php echo $row['ft'] ?></td>
                                <td class="text-center scprnt"><?php echo $row['Final'] ?></td>
                                <td class="text-center scprnt"><?php echo $row['Remarks'] ?></td>
                            </tr>
                    <?php

                        }
                    }
                    ?>
                </tbody>


            </table>
            <div class="container-fluid info">



                <div class="row">

                    <div class="col-12  text-start">
                        Due: Five(5) days after end of the semester
                    </div>
                    <div class="col-12  text-end ol">
                        Signature of Professor over printed name
                    </div>
                </div>


                <div class="row">

                    <div class="col-6  text-start">
                        NUMBER SYSTEM GRADING:
                    </div>


                </div>
                <div class="row">
                    <div class="col-2">
                        1.00=99-100
                    </div>
                    <div class=" col-2">
                        2.00=87-89
                    </div>
                    <div class="col-2  ">
                        3.00=75-77
                    </div>


                </div>

                <div class="row">
                    <div class="col-2 ">
                        1..25=96-98
                    </div>
                    <div class=" col-2">
                        2.25=84-86
                    </div>
                    <div class="col-2  ">
                        4.00=72-74
                    </div>
                    <div class="col-6 ol  text-center">
                        ------Faculty Rank------
                    </div>
                </div>


                <div class="row">
                    <div class="col-2 ">
                        1..50=93-95
                    </div>
                    <div class=" col-2">
                        2.50=81-83
                    </div>
                    <div class="col-3  ">
                        5.00=Below 71
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 ">
                        1..75=90-92
                    </div>
                    <div class=" col-2">
                        2.75=78-80
                    </div>

                </div>


                <div class="row">
                    <?php
                    $pas = "PASSED";
                    $combi_id = intval($_GET['combi_id']);
                    $sql = "SELECT * FROM `srms_tblresult` INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                    INNER JOIN srms_tblsubject ON srms_tblsubject.sub_id = srms_tblresult.Subject
                    INNER JOIN srms_tblprof ON srms_tblprof.prof_id = srms_tblresult.prof_id
                    WHERE srms_tblresult.combi_id= :combi_id ";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':combi_id', $combi_id, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $totalstudents = $query->rowCount();


                    $sql1 = "SELECT * FROM `srms_tblresult` INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                    INNER JOIN srms_tblsubject ON srms_tblsubject.sub_id = srms_tblresult.Subject
                    INNER JOIN srms_tblprof ON srms_tblprof.prof_id = srms_tblresult.prof_id
                    WHERE srms_tblresult.combi_id= :combi_id AND srms_tblresult.Remarks= :pas ";
                    $query1 = $dbh->prepare($sql1);
                    $query1->bindParam(':combi_id', $combi_id, PDO::PARAM_STR);
                    $query1->bindParam(':pas', $pas, PDO::PARAM_STR);
                    $query1->execute();
                    $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                    $passed = $query1->rowCount();
                    ?>
                    <div class="row">
                        <div class="col-12"> &nbsp;</div>
                    </div>
                    <div class="col-6 ">
                        Number of Students Enrolled: <?php echo htmlentities($totalstudents); ?>
                    </div>
                    <div class=" col-4 text-start">
                        Passed: <?php echo htmlentities($passed); ?>
                    </div>
                </div>
                <div class="row">

                </div>

                <div class="row">
                    <?php
                    $dr = "DROPPED";
                    $fl = "FAILED";
                    $combi_id = intval($_GET['combi_id']);
                    $sql = "SELECT * FROM `srms_tblresult` INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                    INNER JOIN srms_tblsubject ON srms_tblsubject.sub_id = srms_tblresult.Subject
                    INNER JOIN srms_tblprof ON srms_tblprof.prof_id = srms_tblresult.prof_id
                    WHERE srms_tblresult.combi_id= :combi_id  AND srms_tblresult.Remarks= :dr";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':combi_id', $combi_id, PDO::PARAM_STR);
                    $query->bindParam(':dr', $dr, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $drop = $query->rowCount();


                    $sql1 = "SELECT * FROM `srms_tblresult` INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                    INNER JOIN srms_tblsubject ON srms_tblsubject.sub_id = srms_tblresult.Subject
                    INNER JOIN srms_tblprof ON srms_tblprof.prof_id = srms_tblresult.prof_id
                    WHERE srms_tblresult.combi_id= :combi_id AND srms_tblresult.Remarks= :fl ";
                    $query1 = $dbh->prepare($sql1);
                    $query1->bindParam(':combi_id', $combi_id, PDO::PARAM_STR);
                    $query1->bindParam(':fl', $fl, PDO::PARAM_STR);
                    $query1->execute();
                    $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                    $fail = $query1->rowCount();
                    ?>
                    <div class="col-6 ">
                        Dropped: <?php echo htmlentities($drop); ?>
                    </div>
                    <div class=" col-4 text-start">
                        Failed: <?php echo htmlentities($fail); ?>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $incom = "INC";
                    $combi_id = intval($_GET['combi_id']);
                    $sql = "SELECT * FROM `srms_tblresult` INNER JOIN srms_students ON srms_tblresult.studentsnumber = srms_students.studentsnumber
                    INNER JOIN srms_tblsubject ON srms_tblsubject.sub_id = srms_tblresult.Subject
                    INNER JOIN srms_tblprof ON srms_tblprof.prof_id = srms_tblresult.prof_id
                    WHERE srms_tblresult.combi_id= :combi_id  AND srms_tblresult.Remarks= :incom";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':combi_id', $combi_id, PDO::PARAM_STR);
                    $query->bindParam(':incom', $incom, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $inc = $query->rowCount();
                    ?>

                    <div class="col-6">
                        INC:<?php echo htmlentities($inc); ?>
                    </div>
                    <div class=" col-4 text-start">
                        W:
                    </div>
                </div>

            </div>
        </div>
        </div>


        <!-- #endregion -->





        <div>
            <button id="printbtn" onclick="window.print()" class="btn btn-primary btnprint ">Print</button>
        </div>
    </section>
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
<?php  ?>