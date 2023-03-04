
              <form class="form-group" method="POST" action="">
                <div class="row">

          <div class="col-md-4"><label style="color: white;">  Attach certificate </label></div>
                 <div class="col-md-8"><input type="file" name="file"  required  id="fil"></div>


                 <center><input type="submit" id="inputbtn" name="register" value="Register" class="btn btn-success"> </center>

              </form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{    $file = $_FILES['file'];
       if ($file['error'] === UPLOAD_ERR_OK) {
           $target_dir = "uploads/";
           $target_file = $target_dir . basename($file["name"]);
           if (move_uploaded_file($file["tmp_name"], $target_file)) {
               echo "File uploaded successfully.";
           } else {
               echo "Error uploading file.";
           }
       } else {
           echo "Error: " . $file['error'];
       }
     }?>
