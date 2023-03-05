<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "loginsystem";
 //  echo "sad";
session_start();
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  //echo "sad";
  if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
  }


    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];


 echo   $entered_username, $entered_password;

if(isset($_POST['choice'])) {
  $selected = $_POST['choice'];


  if($selected == "option1") {


    $sql = "SELECT * FROM logintb WHERE username = '{$entered_username}' and password = '{$entered_password}'";
    $result = mysqli_query($conn, $sql);
echo "sasdfedfd";
    if (mysqli_num_rows($result) == 1) {
      // Redirect to success page
      $row = mysqli_fetch_assoc($result);
      $uid=$row ['username'];
      $_SESSION['uid']=$uid;
    //  echo $_SESSION['uid'];





     header("Location: admin-panel.php");
    } else {
      // Redirect to failure page
      header("Location:index.php");
    }

    exit;
  }

   elseif($selected == "option2") {

    $sql = "SELECT * FROM trainer WHERE username = '{$entered_username}' and password = '{$entered_password}' and approve='yes'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      // Redirect to success page
       $row = mysqli_fetch_assoc($result);
            $uid=$row ['username'];
            $_SESSION['uid']=$uid;
    header("Location: trainerhome.php");
    } else {
      // Redirect to failure page
      header("Location:index.php");
    }

    exit;
  } elseif($selected == "option3") {

//$sql = "SELECT * FROM user WHERE username = 'dfb' and password = 'xcvc'";
  $sql = "SELECT * FROM user WHERE username = '{$entered_username}' and password = '{$entered_password}' and approve='yes'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      // Redirect to success page
      $row = mysqli_fetch_assoc($result);
      $uid=$row ['uid'];
      $_SESSION['uid']=$uid;
    //  echo $_SESSION['uid'];
   header("Location: user.php");
    } else {
      // Redirect to failure page
      echo "fail";
      //header("Location: index.php");
    }

    exit;
     }
     mysqli_close($conn);
  }

?>
