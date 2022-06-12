<?php
// Connect to DB
session_start();

include('../includes/dbconn.php');

if (isset($_POST['addprof'])) {

    $fulln = $_POST['fulln'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $spec = $_POST['spec'];
    $dept = $_POST['dept'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "INSERT INTO srms_tblprof(Fullname,Email,No,DOB,Spec,Department,Username,Password) VALUES ('$fulln','$email', '$num','$dob', '$spec', '$dept', '$username', '$password')";
    $query_run = mysqli_query($conn, $sql);


    if ($query_run) {
        $_SESSION['status'] = "Professor Successfully Added";
        header('location: ../_add-prof.php');
    } else {
        echo "Something went wrong";
    }
}




if (isset($_POST['addcombi'])) {

    $course = $_POST['course'];
    $subject = $_POST['subject'];
    $assprof = $_POST['assprof'];
    $sem = $_POST['sem'];


    $sql1 = "INSERT INTO srms_tblmanagesubcombi(class_id,sub_id,prof_id,Sem) VALUES ('$course', '$subject', '$assprof', '$sem')";
    $query_run1 = mysqli_query($conn, $sql1);


    if ($query_run1) {
        $_SESSION['combi'] = "Curriculum Successfully Added";
        header('location: ../_addsubjectcombination.php');
    } else {
        echo "Something went wrong";
    }
}



if (isset($_POST['createcl'])) {

    $course = $_POST['course'];
    $year = $_POST['year'];
    $classsection = $_POST['classsection'];
    $yeara = $_POST['yeara'];
    $yearb = $_POST['yearb'];


    $sql2 = "INSERT INTO  srms_tblclasses(Course,Year,Section,syb,sye)  VALUES ('$course', '$year', '$classsection', '$yeara', '$yearb')";
    $query_run2 = mysqli_query($conn, $sql2);


    if ($query_run2) {
        $_SESSION['createcl'] = "Class Successfully Created";
        header('location: ../_create-class.php');
    } else {
        echo "Something went wrong";
    }
}



if (isset($_POST['createfc'])) {


    $department = $_POST['department'];

    $sql3 = "INSERT INTO srms_tbldepartment(Department) VALUES ('$department')";
    $query_run3 = mysqli_query($conn, $sql3);


    if ($query_run3) {
        $_SESSION['createfc'] = "Department Successfully Created";
        header('location: ../_create-faculty.php');
    } else {
        echo "Something went wrong";
    }
}



if (isset($_POST['createsub'])) {

    $subjectdescription = $_POST['subjectdescription'];
    $subjectcode = $_POST['subjectcode'];
    $units = $_POST['units'];

    $sql4 = "INSERT INTO srms_tblsubject(SubjectDescription,SubjectCode,Units) VALUES ('$subjectdescription', '$subjectcode', '$units')";
    $query_run4 = mysqli_query($conn, $sql4);


    if ($query_run4) {
        $_SESSION['sub'] = "Subject Successfully Created";
        header('location: ../_create-subject.php');
    } else {
        echo "Something went wrong";
    }
}



if (isset($_POST['addresult'])) {

    $combid = $_POST['combid'];
    $sql5 = " INSERT INTO srms_tblresult(combi_id,prof_id,studentsnumber,Subject,syb,sye,Sem) 
    SELECT srms_tblmanagesubcombi.combi_id, srms_tblprof.prof_id, srms_students.studentsnumber, srms_tblmanagesubcombi.sub_id, srms_tblclasses.syb, srms_tblclasses.sye,srms_tblmanagesubcombi.Sem 
    FROM srms_tblmanagesubcombi
    INNER JOIN srms_students ON srms_tblmanagesubcombi.class_id = srms_students.class_id
    INNER JOIN srms_tblprof ON srms_tblmanagesubcombi.prof_id = srms_tblprof.prof_id
    INNER JOIN srms_tblclasses ON srms_tblmanagesubcombi.class_id = srms_tblclasses.class_id
    WHERE srms_tblmanagesubcombi.combi_id = $combid";


    $query_run5 = mysqli_query($conn, $sql5);

    if ($query_run5) {
        $_SESSION['result'] = "Students are ready for results";
        header('location: ../_managesubjectcombination.php');
    } else {
        echo "Something went wrong";
    }
}





if (isset($_POST['addstud'])) {
    $class = $_POST['class'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $studentsnumber = $_POST['studentsnumber'];
    $status = $_POST['status'];
    $contactnum = $_POST['contactnum'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $studentsnumber;



    $sql6 = "INSERT INTO srms_students(class_id,firstname,middlename,lastname,course,year,section,studentsnumber,status,contactnum,address,gender,email,password)
     VALUES ('$class', '$firstname', '$middlename', '$lastname', '$course', '$year', '$section', '$studentsnumber', '$status', '$contactnum', '$address', '$gender', '$email', '$password' )";
    $query_run6 = mysqli_query($conn, $sql6);


    if ($query_run6) {
        $_SESSION['addstudent'] = "Student Added";
        header('location: ../_students.php');
    } else {
        echo "Something went wrong";
    }
}

