<?php
session_start();


$conn = mysqli_connect("localhost", "root", "",'hms');

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from patient where patient_email = '$email' && patient_pass = '$pass'";
$result = mysqli_query($conn,$s);

if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['email']=$email;
    echo "<script>alert('Successful');document.location='http://localhost/Patient%20Management%20System/index.html'</script>";
}else{
    header('location:index.php');
}
}
?>