<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
    header("location: ../index.php");
    exit();
}
$session_id=$_SESSION['username'];
?>