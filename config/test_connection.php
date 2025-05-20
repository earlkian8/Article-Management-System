<?php

    include 'database.php';
    $db = new Database();
    $conn = $db->getConnection();

    if($conn){
        json_encode(["status" => "success", "message" => "Database connected successfully!"]);
    }else{
        json_encode(["status" => "failed", "message" => "Database fails to connect"]);
    }
?>