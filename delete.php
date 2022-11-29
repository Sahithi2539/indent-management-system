<?php
$link = mysqli_connect("localhost", "root", "", "mis");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "DELETE from mtech WHERE id ='$_GET[title]'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
header("location:4.php");  
?>