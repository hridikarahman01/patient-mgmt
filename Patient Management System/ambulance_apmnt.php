<?php
session_start();


$conn = mysqli_connect("localhost", "root", "",'nsu_pms');

if(isset($_POST['submit'])){
$date = $_POST['date'];
$time = $_POST['time'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$postcode = $_POST['pstcd'];


$s = "select * from ambulance where booking_time = '$time'";
$result = mysqli_query($conn,$s);

if(mysqli_num_rows($result)>0){
    echo"time Already Taken";
}else{
    $reg = "insert into ambulance(booking_date,booking_time,street,suburb,postcode) values('$date','$time','$street','$suburb','$postcode')";
    mysqli_query($conn,$reg);
    echo"Booking Successful";
}
}
?>