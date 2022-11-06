<?php
require 'connect.php';
header("Access-Control-Allow-Origin: http://localhost:3000");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
     
     
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $username = $request->username;
    $dob = $request->dob;
    $pwd = $request->pwd;
    $sql = "INSERT INTO `Users` (username, first_name, last_name, dob, pwd) VALUES ('$username', '$fist_name', '$last_name', '$dob', '$pwd')";
    if(mysqli_query($db,$sql)){
        http_response_code(201);
    }
    else{
         http_response_code(422); 
    }
         
}
?>