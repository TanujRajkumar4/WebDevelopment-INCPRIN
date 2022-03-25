<?php
$dbHost = 'localhost';
$dbUser = 'INC_usr';
$dbPass = 'zE-MxE2i(Bzk';
$dbName = 'cms_inc';
$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error($dbConn));
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error($dbConn));
