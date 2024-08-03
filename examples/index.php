<?php

$mysqlServerName = "mysql";
$mysqlUserName = "";
$mysqlPassword = "";
$mysqlDBName = "dbname";

try {

    $conn = new PDO("mysql:host=$mysqlServerName;dbname=$mysqlDBName", $mysqlUserName, $mysqlPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "MySQL connection to ".$mysqlServerName." success";

} catch(PDOException $e) {

    echo "MySQL connection to ".$mysqlServerName." failed: " . $e->getMessage();

}

