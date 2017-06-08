<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'videoteka';


$conn = mysqli_connect($server, $username, $password) or die (mysqli_error($conn));
mysqli_set_charset($conn, "utf8");
$baza=mysqli_select_db($conn, $database);

