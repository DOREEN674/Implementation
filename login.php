<?php ob_start(); ?>
<?php
 include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>milk</title>
    <link rel="stylesheet"href="CSS/login.css"> 
</head>
<body>
<?php
if(isset($_POST['submit'])){
  $Email =$_POST['Email']; 
  $Password =$_POST['Password'];

 

  $query="INSERT INTO login_page(Email, password)";
  $query .="VALUES('{$Email}','{$Password}')";
  $create_post_query = mysqli_query($connect, $query);

if($create_post_query){
    echo "welcome on board";
}
else{
    die("query failed" .mysqli_error($connect));
}
}
?>
<div class="container">
    <form>
       <div class="input-grpup">
            <label>Email</label><br>
            <input type="text" name="username" placeholder="Email"><br>
       </div>

       <div class="input-grpup">
             <label> password </label><br>
             <input type="password" name="password" required placeholder="Enter your password"><br>
       </div>

       <div class="input-grpup">
            <input type="submit" name="submit" value="submit">
       </div>
       <p>do not have an account?<a href="register.php">Register here</a></p>

    </form>
</div>
</body>
</html>