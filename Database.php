<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'CRUD';

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die(mysqli_connect().error());
 }
//else{
//     echo "Connection is successfully connected";
// }







?>