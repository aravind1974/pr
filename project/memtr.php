<!DOCTYPE html>
<?php include("func.php");

if(isset($_SERVER['HTTP_REFERER'])) {
    $previous_page = $_SERVER['HTTP_REFERER'];}?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin-panel.php" style="color: cyan"> <img  class="rounded" alt="..." src="images/logo.jpg" width="30px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="admin-panel.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="member_details.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Trainer.php">Trainers</a>
      </li>



    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 700px;">

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:black;color:white;">
         <div class="row">
             <div class="col-md-1">
    	<?php echo "<a href=\"$previous_page\" class='btn btn-light '>Go back </a>";?>
             </div>
             <div class="col-md-3"><h3>Members Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="trainer_search.php" method="post">
          <div class="row">
   <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter contact"></div>
              <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"> </div></div>
                 </form></div></div></div>
     <div class="card-body" style="background-color:grey;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Name</th>
            <th>Age</th>
         <th>Gender</th>
         <th>Height</th>
         <th>Weight</th>
	<th>Trainer</th>
  	<th>Workout</th>
    	<th>Diet</th>
        </tr>
        </thead>
        <tbody>
          <?php
$id=$_GET['id'];
//echo $id;
           $con=mysqli_connect("localhost","root","","loginsystem");
          $query="select * from user where approve='YES' and t_id={$id}";
          $result=mysqli_query($con,$query);
          while ($row=mysqli_fetch_array($result)){

               $uid=$row['uid'];
               $name=$row ['username'];
          $age=$row['age'];
          $gender=$row['gender'];
          $height=$row['height'];
          $weight=$row['weight'];
          $tid=$row['t_id'];
            echo "<tr>

              <td>$name</td>
                  <td>$age</td>
                  <td>$gender</td>
                <td>$height</td>
         <td>$weight</td>
        <td>$tid</td>
        <td><a href='workouts.php?id=" . $uid . "'  >Workout</a></td>
        <td><a href='dietassign.php?id=" . $uid. "'  >Diet</a></td>
              </tr>";
          }

          ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
