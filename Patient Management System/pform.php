<?php
session_start();


$conn = mysqli_connect("localhost", "root", "",'nsu_pms');

if(isset($_POST['submit'])){

$name = $_POST['name'];   
$age = $_POST['age'];
$department = $_POST['department'];
$dname = $_POST['dname'];
$date = $_POST['date'];
$time = $_POST['time'];

$s = "select * from patient where apnt_time = '$time' && doctor_name='$dname'";
$result = mysqli_query($conn,$s);

if(mysqli_num_rows($result)>0){
  echo"time Already Taken";
}else{

    $reg = "insert into patient(patient_name,patient_age,depertment_name,doctor_name,apnt_date,apnt_time) values('$name','$age','$department','$dname','$date','$time')";
   $sql= mysqli_query($conn,$reg);
   if($sql){
    echo"Booking Successful";
    
   }
    
}
}
?> 