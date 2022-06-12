<?php
/*
* Database Module
*/

// DB Credentials
$server_name = "sql200.epizy.com";
$server_username = "epiz_31875596"; // default = "root"
$server_password = "1jNbPWXNtI1K68"; // default = ""
$database_name = "epiz_31875596_db_scholastic";

// Create connection
$conn = new mysqli($server_name, $server_username, $server_password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . " Please contact site admin.");
}
