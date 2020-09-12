<?php
$conn = null;

try {
    $conn = new PDO("mysql:host=localhost;dbname=alandi_darshan", "root", "");
} catch(PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}

if($conn == null)
{
    echo "error in connecting database";
}
else
{
    echo "welcome to database";
}

?>