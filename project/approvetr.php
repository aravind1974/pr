<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","loginsystem") or die("connection failed");
$sql="UPDATE `trainer` SET `approve` = 'yes' WHERE `trainer`.`Trainer_id` = {$id}";
$result=mysqli_query($conn,$sql) or die("Query unsuccessfull");


if($result)

header('Location:trainerreq.php');
?>
