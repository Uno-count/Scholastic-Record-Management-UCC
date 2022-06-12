<?php

session_start();
$uname = $_POST['uname'];
$password = $_POST['password'];


// Connect to DB ($conn)
include('../includes/dbconn.php');


// Query
$sql = "SELECT * FROM srms_tblprof WHERE Username = '" . $uname . "' AND Password = '" . $password . "'";
$result = $conn->query($sql);






// Fire request

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $prof_array = array(
        $_POST['uname'], //0 username
        $row['prof_id'], // 1 profid
        $row['Fullname'], // 2 Name of prof 
    );
    $_SESSION['uname'] = $prof_array;
    header("location: home.php?login=success");
} else {
    header("location: loginprof.php?Invalid=Please Enter Correct Username and Password ");
}


// Close connection ($conn)
$conn->close();
