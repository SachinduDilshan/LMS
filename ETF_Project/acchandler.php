<?php 
session_start();
require_once 'Connection.php';


if(isset($_POST['btnSubmit'])){

    $txtEmail = $_POST['useremail'];
    $txtPassword = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `aemail` = '".$txtEmail."' AND `pw` = '".$txtPassword."'";
    $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
        $_SESSION["USER_ID"] = $row["aid"];
        header("Location:  home.html");

} 
else {

    header("Location: acc.php?Error=No User Found");
}

}

?>
