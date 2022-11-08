<?php 
if(!isset($_SESSION["loggedin"])){
    header("location: login.php"); 
}
if(isset($_SESSION["loggedin"])){
    header("location: index.php"); 
}
?>