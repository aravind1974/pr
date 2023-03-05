<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","loginsystem") or die("connection failed");
$sql="UPDATE `user` SET `approve` = 'yes' WHERE `user`.`uid` = {$id}";
$result=mysqli_query($conn,$sql) or die("Query unsuccessfull");
if($result)

header("Location:memberreq.php");
?>
