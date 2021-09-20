<?php
session_start();


$conn = mysqli_connect("localhost", "root", "",'nsu_pms');

if(isset($_POST['submit'])){

$test = $_POST['test'];   
$date = $_POST['date'];
$time = $_POST['time'];



$s = "select * from booking_test where time = '$time' && test_name='$test'";
$result = mysqli_query($conn,$s);

if(mysqli_num_rows($result)>0){
    echo"time Already Taken";
}else{
    $reg = "insert into booking_test(test_name,date,time) values('$test','$date','$time')";
    mysqli_query($conn,$reg);
    echo"Booking Successful";
}
}
?>