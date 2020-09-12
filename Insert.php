<?php
include "../core/database.php";
include "../core/dance.php";


header('Content-type: application/json');

$db = new Database();
$student = new Student($db->connect());

$dance->name= $_POST['name'] ?? null;
 = $_POST[''] ?? null;
$student->lname = $_POST['lname'] ?? null;
$student->rollno = $_POST['rollno'] ?? null;
$student->email = $_POST['email'] ?? null;
$student->mobile = $_POST['mobile'] ?? null;

$response = array(
    "status" => "Failed",
    "message" => "Error in updating the record"
);

if ( $student->update() > 0 ) {
    $response['status'] = "Success";
    $response['message'] = "Record Updated";
}

echo json_encode($response);




?>