<?php 
session_start();
require_once 'Connection.php';

if(isset($_POST['registaion_submit'])){
    
$fullname = $_POST['fname'];
$ininame = $_POST['iname'];
$firstname = $_POST['onename'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$city = $_POST['ncity'];
$coursename = $_POST['course'];
$guardianname = $_POST['gname'];

$sql = "INSERT INTO `user`(`fullname`, `iname`, `fname`, `lname`, `email`, `ncity`, `course`, `gname`)
 VALUES ('".$fullname."','".$ininame."','".$firstname."','".$lastname." ','".$email."','".$city."','".$coursename."','".$guardianname."')";


if (mysqli_query($conn, $sql)) {
    header("Location: add.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

}else{
    header("Location: add.php");
}

?>