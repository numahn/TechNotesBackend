<?php
require 'connect.php';
header("Access-Control-Allow-Origin: http://localhost:3000");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
     
     
    $date_created = date('YYYY-MM-DD') ;
    $note_title = $request->note_title;
    $note_content = $request->note_content;
    $sql = "INSERT INTO `Notes` (note_title, note_content) VALUES ('$note_title', '$note_content')";
    if(mysqli_query($db,$sql)){
        http_response_code(201);
    }
    else{
         http_response_code(422); 
    }
         
}
?>