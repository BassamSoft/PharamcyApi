<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"user_name" => "Bassam",
"user_email" => "Bassam@gmail.com",
"user_phone" => "324234",
"user_verfiycode" => "3243243",       
);
$count = insertData($table , $data);