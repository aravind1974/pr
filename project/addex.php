<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST['name'];
     $reps = $_POST['reps'];
     $sets = $_POST['sets'];
  $id=$_POST['id'];


$sql="INSERT INTO `workout` ( `e_name`, `sets`, `reps`) VALUES ('$name' ,'$reps' ,'$sets' )";
 $result = mysqli_query($conn, $sql);

  if($result)
  {
  //  $id=$POST['id'];
    echo $id;

    header("Location: workout.php?id=".$id);
   //header('Location:workout.php?id='. $id);
//echo $id;
  }
  else{
    echo "failed";
  //  header('Location:index.php');
  }





}


  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}



  </style>
  <body style="background:url('images/41.jpg'); background-size: cover;">
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">

            <div class="card-body" style="background-color:grey;">
              <center style="">

              <form class="form-group" method="POST" action="addex.php">
                <input type='hidden' name='id' value='<?php echo $_GET['id'];?>' />
                <div class="row">
                  <div class="col-md-4"><label style="color: white;">  Exercise Name:</label></div>
                  <div class="col-md-8"><input type="text" name="name" class="form-control" placeholder="Enter name" required/></div><br><br>
                  <div class="col-md-4"><label  style="color: white;">Sets: </label></div>
                  <div class="col-md-8"><input type="number" class="form-control" name="sets" placeholder="Enter no of sets" required/></div><br><br>
                  <div class="col-md-4"><label  style="color: white;">Reps: </label></div>
                  <div class="col-md-8"><input type="number" class="form-control" name="reps" placeholder="Enter no of reps" required/></div><br><br><br>

                    <?php $id=$_GET['id'];
                    //echo $id;?>
                </div>
                <center><input type="submit" id="inputbtn" name="login_submit" value="Add workout" class="btn btn-success"> </center>

            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
