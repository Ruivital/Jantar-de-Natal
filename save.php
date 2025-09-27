<?php
header("Content-Type: application/json");
$file = "events.json";

if ($_GET['action'] === "load") {
    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        echo "[]";
    }
    exit;
}

if ($_GET['action'] === "save") {
    $data = file_get_contents("php://input");
    file_put_contents($file, $data);
    echo json_encode(["status"=>"ok"]);
    exit;
}
?>

