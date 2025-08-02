<?php
$host = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "";

$conn = mysqli_connect($host, $dbuser, $dbpass, k$dbname);

if(!$conn) die("Connection failed: " . mysqli_connect_error());