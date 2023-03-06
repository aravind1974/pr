<!DOCTYPE html>
<?php

// php select option value from database
session_start();
if(!$_SESSION['uid'])
{
    echo "Invalid Login";
  echo'<a href="logout.php" class="btn btn-success"><i class="fa fa-sign-out" aria-hidden="true"></i>Login</a>';

exit();
}
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body >

    <!--NAVBAR-->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin-panel.php" style="color: cyan"> <img  class="rounded" alt="..." src="images/logo.jpg" width="30px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin-panel.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="member_details.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Trainer.php">Trainers</a>
      </li>

       <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


    </ul>


    <?php
                if (isset($_SESSION['u_id'])) {
              echo '<form action="logout.php" method="POST">
                      <button type="submit" name="submit">logout</button>
                        </form>';
                                 } else{

              echo '<form action="index.php" method="POST">


                        </form>
                      <a href="logout.php" class="btn btn-success"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>';


            }

            ?>
  </div>
</nav>

    <!--jumbotron-->

 <div class="jumbotron" style="border-radius:0;background:url('images/pic.png');background-size:cover;height:600px;">


   <div class="container-fluid">
    <div class="row">
        <div class="col-md-4" >
            <div class="list-group">
                <li class="list-group-item " style="background: black;color:white;font-size: 20px; "><i class="fa fa-users" aria-hidden="true"></i> <b>Members</b></li>

                <a href="memberreq.php" class="list-group-item" style="color:black;"><u>Member Requests</u></a>
                <a href="member_details.php" class="list-group-item" style="color:black;"><u>Member Details</u></a>





            </div>



        </div>

        <!--new-->
        <div class="col-md-4">
            <div class="list-group">
<li  class="list-group-item" style="color:white;background: black;font-size: 20px;"> <b>Trainer</b></li>


<a href="trainerreq.php" class="list-group-item " style="color:black;"><u>Add new Trainer</u></a>
<a href="trainer.php" class="list-group-item " style="color:black;"><u>Trainer details</u></a>


            </div>
          </div>


          <div class="col-md-4">
            <div class="list-group">
<li  class="list-group-item" style="color:white;background: black;font-size: 20px;"> <b>Assign</b></li>

                <a href="schedulereq.php" class="list-group-item"  style="color:black;"><u>Trainer assign</u></a>





            </div>
          </div>


        </div>  </div>
</div>









      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>

</html>
