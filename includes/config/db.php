<?php

$hostname = "localhost";
// $username = "compass_user";
// $password = "yL0zoJbG";
$database = "compass_experiencias";

$mysqli = new mysqli($hostname, $username, $password, $database);

if($mysqli->connect_errno){
    echo "Fallo al contectar a MySQL: (" .$mysqli->connect_errno. ") ".$mysqli->connect_error;
}

$mysqli->set_charset('utf8');



