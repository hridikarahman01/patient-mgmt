<?php
session_start();
header('location:index.php');

$conn = mysqli_connect("localhost", "root", "",'hms');

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from patient where patient_email = '$email'";
$result = mysqli_query($conn,$s);

if(mysqli_num_rows($result)>0){
    echo"Email Already Taken";
}else{
    $reg = "insert into patient(patient_name,patient_email,patient_pass) values($name,$email,$pass)";
    mysqli_query($conn,$reg);
    echo"Registration Successful";
}
}
?>