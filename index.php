<!-- <?php
$connect=mysqli_connect('localhost','root','','dairy farm');
if($connect){
    echo"connected successfully";
}
else{
    echo "not connected";
}

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>milk ATM -DAIRY FARM </title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body class="full-screen-preview">
  <h2 style="text-align:center; text-color:white">Milk ATM online ordering</h2>
<header>
  <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="Orders.php">Orders</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><a href="Products.php">Products</a></li>
  </ul>
      <ul class="nav navbar-nav navbar-right">
             <li class="register-active"><a href="registration.php" class="button"><span class="glyphicon glyphicon-user"></span> register</a></li>
      </ul>     
</header>

<h2>Testimonials</h2>
<div class="slideshow-container">
<!-- Full-width slides/quotes -->
<div class="mySlides">
  <q>I love that the milk is very good and makes the best tea</q>
  <p class="author">- Joan Wambui</p>
</div>

<div class="mySlides">
  <q>the straberry yoghurt slaps</q>
  <p class="author">- Joyce Nyambura</p>
</div>

<div class="mySlides">
  <q>maziwa mala reminds me of the mursiki that we make at ushago</q>
  <p class="author">- Ethan Kiprop</p>
</div>
<div class="mySlides">
  <q>i love the fact that you deliver the products on time</q>
  <p class="author">- Mitchell Sang</p>
</div>
<div class="mySlides">
  <q>biggup to the best dairy products</q>
  <p class="author">- Griffin Mwita</p>
</div>
<div class="mySlides">
  <q>cheers to more experience with the dairy products of this company</q>
  <p class="author">- Doreen Nambafu</p>
</div>
<div class="mySlides">
  <q>i am in love with the yoghur and am a bit curious how it is made</q>
  <p class="author">- Slyvia Nambafu</p>
</div>
<div class="mySlides">
  <q>woow i am loving this</q>
  <p class="author">- Daisy Mungai</p>
</div>
<div class="mySlides">
  <q>i highly recommend anyone to this company because of the better quality services</q>
  <p class="author">- Boniface Bonyi</p>
</div>

<!-- Next/prev buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<!-- Dots/bullets/indicators -->
<div class="dot-container">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
<span class="dot" onclick="currentSlide(6)"></span>
<span class="dot" onclick="currentSlide(7)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script><br>
<footer>
<div class="row primary">
  <div class="column1">
    <h3>connect</h3>
    <p>
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      Nairobi, Eldoret, Homa bay, Nakuru
    </p>
    <div class="social">
    <a class="btn btn-outline-light btn-floating m-1" href="@Doreen Nambafu!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

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