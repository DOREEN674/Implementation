<?php
   include "connect.php";
   ?>
<?php
   if(isset($_POST['submit'])){
     $First_Name =$_POST['First_Name'];
     $Last_Name =$_POST['Last_Name'];
     $Gender=$_POST['Gender'];
     $Email =$_POST['Email'];
     $City=$_POST['City'];
     $Subject=$_POST['Subject'];
    
   
     $query="INSERT INTO contact(First_Name, Last_Name, Gender, Email, City, Subject)";
     $query .="VALUES('{$First_Name}','{$Last_Name}','{$Gender}', '{$Email}','{$City}', '{$Subject}')";
     $create_post_query = mysqli_query($connect, $query);
   
   if($create_post_query){
       echo "thank you for contacting us!";
   }
   else{
       die("query failed" .mysqli_error($connect));
   }
   }
   ?>