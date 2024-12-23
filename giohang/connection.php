<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "webbanhang";      // Khai báo database

// Kết nối database 
$connect = new mysqli($server, $username, $password, $dbname);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//lấy tiếng việt utf8
mysqli_set_charset($connect,"utf8");