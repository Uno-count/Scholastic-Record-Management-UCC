<?php

session_start();
$studnum = $_POST['studnum'];
$password = $_POST['password'];


// Connect to DB ($conn)
include('../includes/dbconn.php');


// Query
$sql = "SELECT * FROM srms_students WHERE studentsnumber = '" . $studnum . "' AND password = '" . $password . "'";
$result = $conn->query($sql);






// Fire request

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $stud_array = array(
        $_POST['studnum'], //0 username
        $row['studentsnumber'], // 1 student number
    );
    $_SESSION['studnum'] = $stud_array;
    header("location: stud.php?login=success");
} else {
    header("location: login-stud.php?Invalid=Please Enter Correct Username and Password ");
}


// Close connection ($conn)
$conn->close();
