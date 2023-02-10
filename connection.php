<?php
$host = "localhost";
$username = "id20250961_root";
$password = "9sVIB{ol<|v[+Z\H";
$dbname = "id20250961_miniproject028";

//สร้างการเชื่อมต่อ
$conn = new mysqli($host, $username, $password,$dbname);

//ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>