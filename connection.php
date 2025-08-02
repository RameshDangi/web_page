<?php
$host = "127.0.0.2";
$dbuser = "root";
$dbpass = "";
$dbname = "ecom_pro";

$conn = mysqli_connect($host, $dbuser, $dbpass, k$dbname);

if(!$conn) die("Connection failed: " . mysqli_connect_error());