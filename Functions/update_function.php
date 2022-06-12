<?php
session_start();
// Connect to DB ($conn)
include('../includes/dbconn.php');


if (isset($_POST['changepass'])) {

    $profid = $_SESSION['uname'][1];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "UPDATE srms_tblprof SET Username='$_POST[username]', Password='$_POST[password]' where srms_tblprof.prof_id = $profid ";
    $query_run = mysqli_query($conn, $sql);


    if ($query_run) {
        $_SESSION['change'] = "Successfully Updated";
        header('location: ../ProfPlatform/changepass.php');
    } else {
        echo "Something went wrong";
    }
}


if (isset($_POST['studpass'])) {

    $studnum = $_SESSION['studnum'][1];

    $password = $_POST['password'];


    $sql = "UPDATE srms_students SET password='$_POST[password]' where srms_students.studentsnumber = $studnum ";
    $query_run = mysqli_query($conn, $sql);


    if ($query_run) {
        $_SESSION['studpass'] = "Successfully Updated";
        header('location: ../StudentPlatform/changepassword.php');
    } else {
        echo "Something went wrong";
    }
}



if (isset($_POST['updateinfo'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $coorid = $_POST['coorid'];

    $sql1 = "UPDATE srms_admin SET username='$_POST[username]', password='$_POST[password]' where srms_admin.admin_id = $coorid ";
    $query_run1 = mysqli_query($conn, $sql1);


    if ($query_run1) {
        $_SESSION['changcoor'] = "Successfully Updated";
        header('location: ../polisher/changeinfo.php');
    } else {
        echo "Something went wrong";
    }
}



if (isset($_POST['classedit'])) {
    $course = $_POST['course'];
    $year = $_POST['year'];
    $classsection = $_POST['classsection'];
    $classid = $_POST['classid'];

    $sql2 = "UPDATE srms_tblclasses SET Course='$_POST[course]', Year='$_POST[year]', Section='$_POST[classsection]' where srms_tblclasses.class_id = $classid ";
    $query_run2 = mysqli_query($conn, $sql2);


    if ($query_run2) {
        $_SESSION['edclass'] = "Class Updated";
        header('location: ../_manage-class.php');
    } else {
        echo "Something went wrong";
    }
}





if (isset($_POST['updatestud'])) {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $studentsnumber = $_POST['studentsnumber'];
    $class = $_POST['class'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contactnum = $_POST['contactnum'];
    $studid = $_POST['studid'];

    $sql3 = "UPDATE srms_students SET firstname='$_POST[firstname]', middlename='$_POST[middlename]', lastname='$_POST[lastname]', gender='$_POST[gender]',
    course='$_POST[course]', year='$_POST[year]', section='$_POST[section]', studentsnumber='$_POST[studentsnumber]', class_id='$_POST[class]', status='$_POST[status]',
    address='$_POST[address]', email='$_POST[email]', contactnum='$_POST[contactnum]' WHERE srms_students.student_id = $studid";

    $query_run3 = mysqli_query($conn, $sql3);


    if ($query_run3) {
        $_SESSION['studup'] = "Student Updated Successfully";
        header('location: ../_students.php');
    } else {
        echo "Something went wrong";
    }
}



if (isset($_POST['combi'])) {
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $assprof = $_POST['assprof'];
    $combiid = $_POST['combiid'];
    $sem = $_POST['sem'];

    $sql4 = "UPDATE srms_tblmanagesubcombi SET class_id='$_POST[class]', sub_id='$_POST[subject]', prof_id='$_POST[assprof]', Sem='$_POST[sem]'
    WHERE srms_tblmanagesubcombi.combi_id = $combiid ";
    $query_run4 = mysqli_query($conn, $sql4);


    if ($query_run4) {
        $_SESSION['combi'] = "Curriculum Updated Successfully";
        header('location: ../_managesubjectcombination.php');
    } else {
        echo "Something went wrong";
    }
}


if (isset($_POST['esub'])) {
    $subjectdescription = $_POST['subjectdescription'];
    $subjectcode = $_POST['subjectcode'];
    $units = $_POST['units'];
    $subid = $_POST['subid'];


    $sql5 = "UPDATE srms_tblsubject SET SubjectDescription='$_POST[subjectdescription]', SubjectCode='$_POST[subjectcode]', Units='$_POST[units]' WHERE srms_tblsubject.sub_id = $subid";
    $query_run5 = mysqli_query($conn, $sql5);


    if ($query_run5) {
        $_SESSION['sub'] = "Subject Updated Successfully";
        header('location: ../_manage-subject.php');
    } else {
        echo "Something went wrong";
    }
}
