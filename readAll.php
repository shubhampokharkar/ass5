<?php
include "../core/Database.php";
include "../core/Dance.php";

header('Content-type: application/json');

$db = new Database();
$dance = new Dance($db->connect());

$stmt = $dance->getRecords();

if ($stmt->rowCount() > 0) {
    $dance_arr = array(
        "records" => array()
    );

    while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $dance_arr['records'][] = $row;
    }

    echo json_encode($dance_arr);
}
?>
