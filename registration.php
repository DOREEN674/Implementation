<?php ob_start(); ?>
<?php
 include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user login</title>
  <link rel="stylesheet" href="CSS/Register.css">
</head>
<body>
 <div class="container">
    <form action="register.php">
        <h1>register</h1>
        <p>please fill in this form to create an account</p><br>
        
        <div class="input-group">
            <label for="Last Name"><b>Username</b></label><br>
            <input type="text" name="Username" id="Username" placeorder="Enter your username" required><br>
        </div>

        <div class="input-group">
             <label for="Email"><b>Email</b></label><br>
             <input type="text" placeorder="Enter Email" name="email" id="email" placeholder="Enter email" required><br>
        </div>

        <div class="input-group">
           <label for="password"><b>Password</b></label><br>
           <input type="Password" name="Password" id="Password"  placeholder="Enter password" required><br>
        </div>

        <div class="input-group">
            <button type="Submit" class="register button">submit</button><br>
        </div>
  <p>Already have an account?<a href="login.php">Sign in</a></p>
    </form>
</div> 
</body>
</html>