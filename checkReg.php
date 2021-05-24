<?php 
 $user = "root";
$password = "root";
$db = "database";
$host = "localhost";

$conn= new mysqli($host,$user,$password,$db);

if ($conn->connect_error) {
    die('Ошибка при подключении: ' . $conn->connect_error);
}
else{
    echo "yes";
}
?> 