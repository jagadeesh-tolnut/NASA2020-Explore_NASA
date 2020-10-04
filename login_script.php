<?php
   $con=mysqli_connect("localhost", "root","","missiontoearth") or die(mysqli_error($con));
   $email= $_POST ["email"];
   $password= $_POST ["password"];
  
   $select_query="SELECT email,password FROM signup where email= '$email'";
   $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
   $row= mysqli_fetch_array($result);
   if($row["email"]==$email && $row["password"]==$password)
   {
        header('location:homepage.php');
   }
   else
   {
       echo "invalid data,please try again";
   }
   ?>