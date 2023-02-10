<?php
$name =$_POST["s_id"];
$lastname= $_POST["s_name"];
$address= $_POST["s_date"];

include('connection.php');

//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_sale (s_id,s_name,s_date) VALUES ('$name','$lastname','$address')";
if ($conn->query($sql)) {
    
 echo "New record created successfully";
 header('location:ins_form4.php'); //กลับไปยังหน้าตาราง
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>