<?php 
  $user = "danilsocol_db";
$password = "Seraphic21";
$db = "danilsocol_db";
$host = "localhost";

$mysql= new mysqli($host,$user,$password,$db);


$mysql->query("INSERT INTO `db`(`login`,`pass`,`name`) VALUES('$login','$pass','name')");
$mysql->close();
?> 