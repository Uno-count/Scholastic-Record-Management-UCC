<?php
// DB credentials.
define('DB_HOST', 'sql200.epizy.com');
define('DB_USER', 'epiz_31875596');
define('DB_PASS', '1jNbPWXNtI1K68');
define('DB_NAME', 'epiz_31875596_db_scholastic');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
