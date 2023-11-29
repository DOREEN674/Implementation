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
    <link rel="stylesheet" href="CSS/About.css">
</head>
<body>
<header>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="Orders.php">Oders</a></li>
        <li><a href="contact.php">contact</a></li>
    </ul>
</header>
<section>
<h2 style="text-align:center; text-color:white;">why choose us</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h4 style="text-align:center">24/7 services</h4>
        <p>we are open anytime you want</p>
        <p>we are available in every city and county</p>
        <p>we deliver the products at your door</p>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h4 style="text-align:center">healthy and nutritious</h4>
        <p>our milk is very healthy</p>
        <p>the milk has essential nutrients</p>
        <p>the milk is well pausterized</p>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h4 style="text-align:center">99% uptime</h4>
        <p>we open from morning till late</p>
        <p>the products are always readily available</p>
        <p>we are located in every town</p>
      </div>
    </div>
  </div>
</section>

<section>
  <h2 style="text-align:center">our milk ATM services</h2>
<div class="test">
  <div class="box">
    <h4 style="text-align:center">high product preservation</h4>
    <p>The products of the milk ATM are well preserved<br>so that when the customers buy they do not experience problems with their health</p>
  </div>
  <div class="box">
    <h4 style="text-align:center">high production</h4>
    <p>there is high production of milk which aids in the making of mala and different flavours of yoghurt!</p>
  </div>
  <div class="box">
    <h4 style="text-align:center">reliable pasteurization</h4>
    <p>the raw milk is placed in a  pasteurizer where it is heated upto 71 degrees<br>and then it is cooled to its original temperature of 4 degrees</p>
  </div>
  <div class="box">
    <h4 style="text-align:center">Environmentally friendly</h4>
    <p>the dairy products of the farm are environment friendly<br>in the sense that they do not affect the environment in any way</p>
  </div>
</div>
</section>


<section class="hey">
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
    <img src="images/doreen.jpg" alt="doreen" style="width:200px">
      <div class="container">
        <h2>Doreen Nambafu</h2>
        <p class="title">Dairy farmer</p>
        <p>doreennambafu@mail.com</p>
        <p><button class="button"><a href="tel:254113523077">254113523077</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/joan.jpg" alt="joan" style="width:200px">
      <div class="container">
        <h2>Joan Irungu</h2>
        <p class="title">Dairy marketing</p>
        <p>joanirungu@gmail.com</p>
       <p><button class="button"><a href="tel:254750433421">254750433421</a></button></p> 

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/daisy.jpg" alt="Daisy" style="width:200px">
      <div class="container">
        <h2>Daisy Nyambura</h2>
        <p class="title">dairy farmer</p>
        <p>daisymungai@gmail.com</p>
        <p><button class="button"><a href="tel:254793705387">254793705387</a></button></p>
      </div>
    </div>
  </div>
</div>
</section>
<footer>
<div class="row primary">
  <div class="column1">
    <h3>Connect</h3>
    <p>
      <i class="fa fa-map-marker" aria-hidden="true"></i>
      Nairobi, Eldoret, Homa bay, Nakuru
    </p>
    <div class="social">
      <i class="fa fa-facebook-square"></i>
      <i class="fa fa-twitter-square"></i>
      <i class="fa fa-linkedin-square"></i>
      <i class="fa fa-instagram"></i>
    </div>
  </div>

  <div class="column1">
    <h3>Links</h3>
    <ul class="navbar">
      <li><a href="index.php">Home</a></li>
      <li><a href="About.php">about</a></li>
      <li><a href="contact.php">contact</a></li>
      <li><a href="products.php">products</a></li>
    </ul>
</div>
</footer>
  
</body>
</html>