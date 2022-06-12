<?php



// Connect to DB ($conn)
include('../includes/dbconn.php');


if (isset($_POST['updatedata'])) {
    // $combi_id = $_GET['combi_id'];

    $studentsnumber = $_POST['studentsnumber'];
    $combi_id = $_POST['combi_id'];
    $firstsem = $_POST['firstsem'];
    $secondsem = $_POST['secondsem'];
    $sum = $firstsem + ($secondsem * 2);
    $finals = $sum / 3;

    if ($finals > 3) {
        $remarks = "FAILED";
    } else {
        $remarks = "PASSED";
    }






    $sql = "UPDATE srms_tblresult SET mt='$_POST[firstsem]', ft='$_POST[secondsem]', Final='$finals', Remarks='$remarks' WHERE srms_tblresult.studentsnumber = $studentsnumber AND srms_tblresult.combi_id = $combi_id ";
    $query_run = mysqli_query($conn, $sql);


    if ($query_run) {
        echo '<script> alert("Grades Successfully Added"); </script>';
        header("location: home.php");
        die();
    } else {

        echo '<script> alert("Please fill in the right data"); </script>';
    }
}


if (isset($_POST['incsubmit'])) {
    $remarks = "INC";
    $studentsnumber = $_POST['studentsnumber'];
    $combi_id = $_POST['combi_id'];



    $sql1 = "UPDATE srms_tblresult SET Remarks='$remarks' WHERE srms_tblresult.studentsnumber = $studentsnumber AND srms_tblresult.combi_id = $combi_id ";
    $query_run1 = mysqli_query($conn, $sql1);


    if ($query_run1) {
        echo '<script> alert("Grades Successfully Added"); </script>';
        header("location: home.php");
        die();
    } else {

        echo '<script> alert("Please fill in the right data"); </script>';
    }
}



if (isset($_POST['dropsubmit'])) {
    $remarks = "DROPPED";
    $studentsnumber = $_POST['studentsnumber'];
    $combi_id = $_POST['combi_id'];



    $sql2 = "UPDATE srms_tblresult SET Remarks='$remarks' WHERE srms_tblresult.studentsnumber = $studentsnumber AND srms_tblresult.combi_id = $combi_id ";
    $query_run2 = mysqli_query($conn, $sql2);


    if ($query_run2) {
        echo '<script> alert("Grades Successfully Added"); </script>';
        header("location: home.php");
        die();
    } else {

        echo '<script> alert("Please fill in the right data"); </script>';
    }
}
