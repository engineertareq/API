<?php 

include 'db_config.php'; 
$data = json_decode(file_get_contents(filename: "php://input"));

if(isset($data)) {

    $title = $data->title;
    $content = $data->content;

    $sql = "INSERT INTO blogs (title, description) VALUES ('$title', '$content')";
    

    if(mysqli_query($db, $sql)) {
        echo json_encode(["status" => "success", "message" => "Blog Added!"]);
    } else {
        echo json_encode(["status" => "error", "message" => mysqli_error($db)]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "No data received"]);
}
?>