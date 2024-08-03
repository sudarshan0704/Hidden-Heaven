<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbName="uploadimages";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbName);
 if(!$conn)
 {
    die("something went wrong");
 }
?>
