<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "class_ranks";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if($koneksi->connect_error){
    var_dump($koneksi->connect_error);
    die("koneksi bermasalah");
    
}