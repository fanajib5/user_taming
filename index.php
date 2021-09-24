<?php
// Initialize the session
session_unset();
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // var_dump(explode("-",$_SESSION["level"])[0]);
    // die();
    if(explode("-",$_SESSION["level"])[0] == "admin" ){
        header("location: view/index.php");
        exit;
    }
    if(explode("-",$_SESSION["level"])[0] == "maker"){
        header("location: view/index.php");
        exit;
    }
    if(explode("-",$_SESSION["level"])[0] == "manager"){
        header("location: view/index.php");
        exit;
    }
} else{
    header("location: login.php");
    exit();
}
 

?>