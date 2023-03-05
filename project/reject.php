<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","loginsystem") or die("connection failed");
$sql="DELETE FROM `user` WHERE `user`.`uid` = {$id}";
$result=mysqli_query($conn,$sql) or die("Query unsuccessfull");


header("Location:memberreq.php");
?>
