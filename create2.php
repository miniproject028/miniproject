<?php
$name =$_POST["p_id"];
$lastname= $_POST["p_name"];
$address= $_POST["p_type"];

include('connection.php');

//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_product (p_id,p_name,p_type) VALUES ('$name','$lastname','$address')";
if ($conn->query($sql)) {
    
 echo "New record created successfully";
 header('location:ins_form3.php'); //กลับไปยังหน้าตาราง
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>