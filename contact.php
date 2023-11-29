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
    <link rel="stylesheet" href="CSS/contact.css">
</head>
<body>
<fieldset style="padding:30px; border:3px solid:white; background:white; width:500px; text-align:center; margin:0 auto;">
<div class="container">
  <form action="contact us.php"  method="POST">

    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Enter your name.."><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Enter your last name.."><br>

    <label for="Gender">Gender</label><br>
    <select id="Gender" name="Gender">
      <option value="female">Female</option>
      <option value="Male">Male</option>
    </select><br>
    
    <label for="Email">Email</label><br>
    <input type="text" id="Email" name="Email" placeholder="Enter your Email.."><br>

    <label for="country">City</label><br>
    <select id="country" name="country">
      <option value="Kenya">Jacaranda</option>
      <option value="Tanzania">Donholm</option>
      <option value="Uganda">Umoja</option>
      <option value="Congo">B centre</option>
      <option value="Rwanda">Koma</option>
    </select><br>

    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="say something to us!!" style="height:50px  width:50px"></textarea><br>

    <input type="submit" value="Submit">
  </form>
</div>
</fieldset>   
</body>
</html>