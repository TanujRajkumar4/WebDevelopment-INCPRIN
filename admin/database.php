<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'cms_inc';
$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error($dbConn));
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error($dbConn));

// $secret = "6Lefda8dAAAAAHgwTBamNP7qiw_T4rkJLhQ-GMQp";
