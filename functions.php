<?php

function getAllData($tableName,$status){
    global $conn;
    $Query = "SELECT * FROM $tableName WHERE $status = 'A'";
    $results =$conn->query($Query);
    // $results=$results->fetch_assoc();
    return $results;
}
?>