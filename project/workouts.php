<!DOCTYPE html>
<?php
  						 // Close connection
						// $conn->close();
				
						 // Save selected checkboxes into variables

						 $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "loginsystem";
 $id=$_GET['id'];
             // Create connection
             $conn = mysqli_connect($servername, $username, $password, $dbname);
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $selected_id = $_POST["selected"];
                $sql = "UPDATE `user` SET `wid` = $selected_id WHERE `user`.`uid`  = $id";
    $result = $conn->query($sql);
		if($result)
		{
			header("Location:trainerhome.php");

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
           ?><?php include("func.php");?>
<html>
<head>
	<title>Workouts</title>
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
             <div class="col-md-3"><h3> Assign  workout</h3></div>

						 <?php
						 $query="select * from user where uid=$id";
						 $result=mysqli_query($con,$query);

						while ($row=mysqli_fetch_array($result)){
								 $name=$row['wid'];
								 if($name!=NULL){
									 echo"<a href='wo.php?id=$id '>View Assigned workout</a>";
}
}
      ?>       <div class="col-md-8">
        </div></div></div></div>
     <div class="card-body" style="background-color:grey;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Name</th>
            <th>e1</th>
            <th>e2</th>
						<th>e3</th>
            <th>e4</th>
            <th>e5</th>
						<th>Select A Workout</th>

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

             $sql = "SELECT * FROM wo";
             $result = mysqli_query($conn, $sql);


//....................
						 if ($result->num_rows > 0) {
						     echo "<form method='post'>";


						     while($row = $result->fetch_assoc()) {
						         echo "<tr>";
						         echo "<td>" . $row["ename"] . "</td>";
						         echo "<td>" . $row["e1"] . "</td>";
                       echo "<td>" . $row["e2"] . "</td>";
                       echo "<td>" . $row["e3"] . "</td>";
                         echo "<td>" . $row["e4"] . "</td>";
                           echo "<td>" . $row["e5"] . "</td>";
						          echo "<td><input type='radio' name='selected' value='" . $row["wid"] . "'></td>";

						         echo "</tr>";
						     }
						     echo "</table>";
								 echo '<center><input type="submit" id="inputbtn" name="submit" value="Submit" class="btn btn-success"> </center>';
						    //echo'<br><a href="addex.php" class="btn btn-success"><i class="fa fa-sign-out" aria-hidden="true"></i>Add new exercise</a>';// echo "<input type='submit' value='Submit'>";
						     echo "</form>";
						 } else {
						     echo "0 results";
						 }
   $id=$_GET['id'];
  // echo $id;
   //echo`<a href='workouts.php?id=" . $uid . "'  >Workout</a>`;?>
<br><a href='workout.php?id=<?php echo $id ;?>'><i class="fa fa-sign-out" aria-hidden="true"></i>Add new workout</a>

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
