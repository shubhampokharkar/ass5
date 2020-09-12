<?php
include "Database.php";
include "Dance.php";


header('Content-type: application/json');

$db = new Database();
$dance = new Dance($db->connect());

$dance->Name= $_POST['Name'] ?? null;
$dance->Email= $_POST['Email'] ?? null;
$dance->Mobile_no= $_POST['Mobile_no'] ?? null;
$dance->Age= $_POST['Age'] ?? null;
$dance->Gender= $_POST['Gender'] ?? null;
$dance->Performance= $_POST['Performance'] ?? null;
$dance->No_of_members= $_POST['No_of_members'] ?? null;
$dance->Type= $_POST['Type'] ?? null;
$dance->Comment= $_POST['Comment'] ?? null;

$response = array(
    "status" => "Failed",
    "message" => "Error in inserting the record"
);

if ( $dance->insert() > 0 ) {
    $response['status'] = "Success";
    $response['message'] = "Record inserted";
}

echo json_encode($response);




?>