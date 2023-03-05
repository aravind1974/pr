<?php

$conn=mysqli_connect("localhost","root","","loginsystem") or die("connection failed");
if (isset($_GET['id1'])) {
$id1 = $_GET['id1'];
$id2 = $_GET['id2'];
echo $id1;
$sql="UPDATE `user` SET `t_id` = {$id2} WHERE `user`.`uid` = {$id1}";

$result = mysqli_query($conn, $sql);

if($result)
{
  $SQL="DELETE FROM `req` WHERE `req`.`uid` = {$id1}";
  $r = mysqli_query($conn, $SQL);
   header("Location: admin-panel.php");
}

}
