<?php
$con=mysqli_connect("localhost","root","","loginsystem");
if(isset($_POST['login_submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from logintb where username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("Location:admin-panel.php");

}
    else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        }


        if(isset($_GET['pay_submit']))
        {
            $Payment_id=$_GET['Payment_id'];
            $Amount=$_GET['Amount'];
            $customer_id=$_GET['customer_id'];
            $payment_type=$_GET['payment_type'];
             $query="insert into Payment(Payment_id,Amount,customer_id,payment_type,)values('$Payment_id','$Amount','$customer_id','$payment_type')";
              $result=mysqli_query($con,$query);
             if($result)
             {
                echo "<script>alert('payment added.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
             }


        }

 function get_memberreq(){
    $con=mysqli_connect("localhost","root","","loginsystem");
    $query="select * from user where approve='NO'";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
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


        </tr>";
    }
}






 function get_member_details(){
    $con=mysqli_connect("localhost","root","","loginsystem");
    $query="select * from user where approve='YES'";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
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
        </tr>";
    }
}
function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>

        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            <td><a href='?id=" . $row["id"] . "'>Select</a></td></tr>
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $customer_id=$row['customer_id'];
        $payment_type=$row['payment_type'];

        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>

            </tr>";

    }
}


?>
