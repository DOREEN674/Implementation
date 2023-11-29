<?php
   include "connect.php";
   ?>
   <?php
   
if(isset($_POST['submit'])){
  $First_Name =$_POST['First_Name'];
  $Last_Name =$_POST['Last_Name'];
  $Town =$_POST['Town'];
  $Phone_Number =$_POST['Phone_Number'];
  $Email=$_POST['Email'];
  $Products  =$_POST['Products'];
  $Quantity  =$_POST['Quantity'];
  $Price  =$_POST['Price'];
  $Payment=$_POST['Payment'];

 

  $query="INSERT INTO Order(First_Name, Last_Name, Town, Phone_Number, Email, Products, Quantity, Payment)";
  $query .="VALUES('{$First_Name}','{$Last_Name}','{$Town}','{$Phone_Number}',
  '{$Email}','{$Products}','{$Quantity}','{$Price}','{$Payment}',)";
  $create_post_query = mysqli_query($connect, $query);

if($create_post_query){
    echo "thank you for trusting and making an order with us";
}
else{
    die("query failed" .mysqli_error($connect));
}
}
?>