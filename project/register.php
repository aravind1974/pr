



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
              
              <form class="form-group" method="POST" action="register.php">
                <div class="row">
              
                <div class="col-md-4"><label style="color: white;"> Username:</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="username" name="username"><br><br></div>
                <div class="col-md-4"><label style="color: white;"> Password:</label></div>
                <div class="col-md-8"><input type="password" class="form-control" id="password" name="password"></div><br><br>
                <div class="col-md-4"><label style="color: white;"> Height (in cm):</label></div>
                <div class="col-md-8"><input type="number" class="form-control" id="height" name="height"></div><br><br>
                <div class="col-md-4"><label style="color: white;"> Weight (in kg):</label></div>
                <div class="col-md-8"><input type="number" class="form-control" id="weight" name="weight"></div><br><br>
                <div class="col-md-4"><label style="color: white;"> Age:</label></div>
                <div class="col-md-8"><input type="number" class="form-control" id="age" name="age"></div><br><br>
              
                
                <div class="col-md-4"><label style="color: white;"> Male</label></div>
                <div class="col-md-8"><input type="radio" class="form-control" id="male" name="gender" value="male"></div>
             
              <div class="col-md-4"><label style="color: white;"> Female</label></div>  
                 <div class="col-md-8"><input type="radio" class="form-control" id="female" name="gender" value="female"></div></div><br><br>
                <center><input type="submit" id="inputbtn" name="register" value="Register" class="btn btn-success"> </center>
              </form>

              <a href="index.php">Login</a>
              
        <?php      
  
  if (isset($_POST['username']) &&
      isset($_POST['password']) &&
      isset($_POST['height']) &&
      isset($_POST['weight']) &&
      isset($_POST['age']) &&
      isset($_POST['gender'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loginsystem";
    
    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO user (username, password, height, weight, age, gender)
            VALUES ('$username', '$password', '$height', '$weight', '$age', '$gender')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
       header("Location: index.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }


       ?>      
            
              
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