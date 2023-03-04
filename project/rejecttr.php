<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","loginsystem") or die("connection failed");
$sql="DELETE FROM `trainer` WHERE `trainer`.`Trainer_id` = {$id}";
$result=mysqli_query($conn,$sql) or die("Query unsuccessfull");


header("Location:admin-panel.php");
?>
