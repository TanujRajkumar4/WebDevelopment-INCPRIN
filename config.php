<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cms_inc";
try {
    $conn =  mysqli_connect($servername, $username, $password,$db);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
require('functions.php');
?>