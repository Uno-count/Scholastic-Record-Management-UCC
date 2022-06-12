<?php

session_start();
$uname = $_POST['uname'];
$password = $_POST['password'];


// Connect to DB ($conn)
include('./includes/dbconn.php');


// Query
$sql = "SELECT * FROM srms_admin WHERE username = '" . $uname . "' AND password = '" . $password . "'";
$result = $conn->query($sql);






// Fire request

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $coor_array = array(
        $_POST['uname'], //0 username
        $row['username'], // 1 username
        $row['admin_id'], // 2 Coorid
    );
    $_SESSION['uname'] = $coor_array;
    header("location: _dashboard.php?login=success");
} else {
    header("location: login.php?Invalid=Please Enter Correct Username and Password ");
}


// Close connection ($conn)
$conn->close();
