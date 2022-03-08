<?php
header('Content-Type: application/json');

$response['status'] = "0";
$response['message'] = null;
$response['error'] = null;

// START - MANDATORY PARAMETERS CHECK
if (!isset($_FILES["file_upload"])) {
    $response['status'] = 400;
    $response['message'] = "Missing Parameter(s)";
    $response['error'] = "One or more of the mandatory parameters are missing from the Request.";
    print json_encode($response);
    exit();
}
// END - MANDATORY PARAMETERS CHECK

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
// if (file_exists($target_file)) {
//     unlink($target_file);
// }
if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
    $response['status'] = 200;
    $response['message'] = "File Upload was Successful";
    $response['error'] = null;
} else {
    $response['status'] = 400;
    $response['message'] = "File Upload Failed";
    $response['error'] = null;
}

print_r(json_encode($response));
