<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploaded succesfully</title>
    <link rel="stylesheet" href="./style.css">
   
</head>
<body>
    <div class="datahandle">
<?php
include_once("connect.php");
if($_POST["submit"])
{
    $placename=$_POST["placename"];
    $map=$_POST["map"];
    $dis=$_POST["discription"];
    $image=$_FILES["image"]["name"];
    // echo $placename." ";
    // echo $dis,"  ";
    // echo $map;
    // echo $image;
    $extention=pathinfo($image,PATHINFO_EXTENSION);
    $allowedtypes=array("jpg","jpeg","png","gif");
    $tempname=$_FILES["image"]["tmp_name"];
    $targetpath="uploads/".$image;
    if(in_array($extention,$allowedtypes))
    {
       if( move_uploaded_file($tempname,$targetpath))
       {
$query="insert into images(name,map,discription,filename) values('$placename','$map','$dis','$image')";

    if(mysqli_query($conn,$query))
    {
        echo "<p>your images uploaded</p>";
        
        
    }
    else
    {
        echo "<p>somethin wrong</p>";
    }

       }else{
        echo" <p>file not uploaded</p>";
       }
    }
    else
    {
        echo "<p>your files not alloweed try to upload smaller size</p>";
    }
 
    
}
?>
 <a href="./index.html"><button>Back</button></a>
</div>
</body>
</html>


