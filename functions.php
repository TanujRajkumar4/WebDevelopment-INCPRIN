<?php

function getAllData($tableName,$status){
    global $dbConn;
    $Query = "SELECT * FROM $tableName WHERE $status = 'A'";
    $results =$dbConn->query($Query);
    // $results=$results->fetch_assoc();
    return $results;
}

function getAllDataC($tableName,$status,$condition){
    global $dbConn;
    $Query = "SELECT * FROM $tableName WHERE $status = 'A' ".$condition;
    $results =$dbConn->query($Query);
    // $results=$results->fetch_assoc();
    return $results;
}
?>