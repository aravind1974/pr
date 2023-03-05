<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Trainer details</title>
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
      <li class="nav-item">
        <a class="nav-link" href="member_details.php">Members</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Trainer.php">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="package.php">Package</a>
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

             </div>
             <div class="col-md-3"><h3> Create a new workout</h3></div>

             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">








          <div class="row">


                 </form></div></div></div></div>
     <div class="card-body" style="background-color:grey;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Name</th>
            <th>Sets</th>
            <th>Reps</th>
						<th>Select upto 5 </th>

        </tr>
        </thead>
        <tbody>
           <?php
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "loginsystem";

             // Create connection
             $conn = mysqli_connect($servername, $username, $password, $dbname);
             // Check connection
             if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
             }

             $sql = "SELECT * FROM workout";
             $result = mysqli_query($conn, $sql);


//....................
						 if ($result->num_rows > 0) {
						     echo "<form method='post'>";


						     while($row = $result->fetch_assoc()) {
						         echo "<tr>";
						         echo "<td>" . $row["e_name"] . "</td>";
						         echo "<td>" . $row["reps"] . "</td>";
						         echo "<td>" . $row["sets"] . "</td>";
						         echo "<td><input type='checkbox' name='selected[]' value='" . $row["eid"] . "'></td>";
						         echo "</tr>";
						     }
						     echo "</table>";
								 echo '<center><input type="submit" id="inputbtn" name="submit" value="Submit" class="btn btn-success"> </center>';
						    echo'<br><a href="addex.php" class="btn btn-success"><i class="fa fa-sign-out" aria-hidden="true"></i>Add new exercise</a>';// echo "<input type='submit' value='Submit'>";
						     echo "</form>";
						 } else {
						     echo "0 results";
						 }

						 // Close connection
						 $conn->close();

						 // Save selected checkboxes into variables
						 if ($_SERVER["REQUEST_METHOD"] == "POST") {
						     if (isset($_POST["selected"])) {
						         $selected = $_POST["selected"];
						         $count = count($selected);
						         if ($count > 5) {
						             echo "You can only select up to 5 checkboxes.";
						         } else {
						             // Process selected checkboxes
						        {

														 $id1 = $selected[0];
            $id2 = $selected[1] ?? 0; // Assign null if not set
            $id3 = $selected[2] ?? 0;
            $id4 = $selected[3] ?? 0;
            $id5 = $selected[4] ?? 0;

					//	echo "dcs".$id4;
						                 //echo "Selected ID: " . $id1 . "<br>";
														 $sql="INSERT INTO `wo` (`e1`, `e2`, `e3`, `e4`, `e5`) VALUES($id1,$id2,$id3,$id4,$id5)";
														 	$result=mysqli_query($con,$sql)or die("error");
															if($result)
															{
																header('Location:workouts.php');

															}

												 }
						         }
						     }
						 }

/*...................

             if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while($row = mysqli_fetch_assoc($result)) {
                 echo "<tr><td>" . $row["e_name"]. "</td><td>" . $row["reps"]. "</td><td>" . $row["sets"]. "</td><td><input type='checkbox' name='selected[]' value='" . $row["e_name"] . "'></td></tr>";
               }
             } else {
               echo "0 results";
             }

             mysqli_close($conn);*/
           ?>
        </tbody>
    </table>

     </div>
    </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
