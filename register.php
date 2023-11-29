<?php
   include "connect.php";
   ?>
   <?php  
if(isset($_POST['submit'])){
  $First_Name =$_POST['First_Name']; 
  $Last_Name =$_POST['Last_Name'];
  $Email =$_POST['Email'];
  $Password =$_POST['password'];
 

  $query="INSERT INTO registration(First_Name, Last_Name, Email, Password)";
  $query .="VALUES('{$First_Name}','{$Last_Name}','{$Email}','{$password}')";
  $create_post_query = mysqli_query($connect, $query);

if($create_post_query){
    echo "data added successfully";
}
else{
    die("query failed" .mysqli_error($connect));
}
}
?>