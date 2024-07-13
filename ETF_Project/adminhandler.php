<?php 
session_start();
require_once 'Connection.php';

if(isset($_POST['registaion_submit'])){
    
$username = $_POST['username'];
$password = $_POST['password'];
$useremail = $_POST['useremail'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `admin`( `aname`, `pw`, `aemail`, `phone`) 
VALUES ('".$username."','".$password."','".$useremail."','".$phone."')";


if (mysqli_query($con, $sql)) {
    header("Location: acc.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($con);

}else{
    header("Location: acc.php");
}
?>