<?php
include '../db_config.php';
$rawData = $db->query("SELECT * FROM blogs");
$rawData->fetch_object();
$blogs = [];
while ($row = $rawData->fetch_object()) {
    $blogs[] = $row;
}
print_r(json_encode($blogs));
?>