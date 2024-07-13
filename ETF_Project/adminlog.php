<?php 
session_start();
require_once 'Connection.php';

if(isset($_POST['btnSubmit'])){

    $txtpassword = $_POST['txtpassword'];
    $useremail = $_POST['useremail'];
   
    $sql = "SELECT * FROM `admin` WHERE `pw` = '".$txtpassword."' AND `aemail` = '".$useremail."'";
    $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $_SESSION["USER_ID"] = $row["aid"];
        header("Location:  home.html");

} else {

    header("Location: admin.php?Error=No User Found");
}
}
?>