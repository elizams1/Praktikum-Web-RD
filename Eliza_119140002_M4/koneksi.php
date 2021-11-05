<?php

$host="localhost";
$user="root";
$pw="";
$db="crud";

$connect = mysqli_connect($host,$user,$pw,$db);

if(!$connect){
    die(mysqli_error($connect));
} 

?>