<?php 
include('database.php');
include("connection.php");
$uid = "$_GET[title]";
// print($uid);
$APP='APPROVED';
$sql = "UPDATE owner SET Approval='APPROVED' WHERE uniqueID=$uid";
header("location:description-indent.php?title=$uid");  
?>