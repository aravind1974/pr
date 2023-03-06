<?php
session_start();
	 $uid = $_SESSION['uid'];
echo $uid;

$tid=$_GET['id'];
$conn=mysqli_connect("localhost","root","","loginsystem") or die("connection failed");
$sql="select * from req where `uid`={$uid}";
$result=mysqli_query($conn,$sql) ;
$r=mysqli_fetch_array($result);
if(!$r)
        {
          $sql="INSERT INTO `req` (`uid`, `tid`) VALUES ({$uid}, {$tid});";
        //  echo $uid;
        }
  else
      {
        $sql="UPDATE `req` SET `tid` = {$tid} WHERE `req`.`uid` = {$uid}";
      }
        $result=mysqli_query($conn,$sql) or die("Query unsuccessfull");
          if($result)
          {
            //echo $tid;
          header("Location:user.php");
          }

?>
