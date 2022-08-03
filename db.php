<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$enquiries = $_POST["enquiries"];
$conn = mysqli_connect("localhost","root", "","contact_details"); 
$sql = "INSERT INTO contact_details(Name,Email_Id,Phone_No.,Enquiries) VALUES('{$name}','{$email}','{$phone}','{$enquiries}')";
$result = mysqli_query($conn,$sql)

?>