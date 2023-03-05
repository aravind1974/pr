<?php

session_start();
if(isset($_SESSION['uid']))
{
    session_destroy();
  //  echo "<script>logged out</script>";
    echo "<script>location.href='index.php'</script>";
}
else
{

    session_destroy();
  //  echo "<script>alert('logged out')</script>";
  echo "<script>location.href='index.php'</script>";
}

?>
