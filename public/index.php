<?php

$mysqlServerName = "mysql";
$mysqlUserName = "root";
$mysqlPassword = "onlylocalhost";

try {

    $conn = new PDO("mysql:host=$mysqlServerName;dbname=dbname", $mysqlUserName, $mysqlPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "MySQL connection to ".$mysqlServerName." success";

} catch(PDOException $e) {

    echo "MySQL connection to ".$mysqlServerName." failed: " . $e->getMessage();

}

