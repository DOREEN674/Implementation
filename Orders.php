<!-- <?php ob_start(); ?>
<?php
   include "connect.php";
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>milk</title>
    <link rel="stylesheet" href="CSS/Orders.css">
</head>
<body>
<div class="container">
  <div class="title">
      <h2>Product Order Form</h2>
  </div>
<div class="d-flex">
  <form action="connect.php" method="POST">
    <label>
      <span class="fname">First Name <span class="required"></span></span>
      <input type="text" name="fname">
    </label>
    <label>
      <span class="lname">Last Name <span class="required"></span></span>
      <input type="text" name="lname">
    </label>
    <label>
    <label>
      <span>Town<span class="required"></span></span>
      <input type="text" name="city">
      </label>
    <label>
      <span>Phone <span class="required"></span></span>
      <input type="tel" name="city">
    </label>
    <label>
      <span>Email<span class="required"></span></span>
      <input type="email" name="city">
    </label>
  </form>
  <div class="Yorder">
  <label>products
      <div class="products">
    <label>
        <input type="checkbox" class="item-checkbox" value="mala">mala
    </label>
</div>
<div class="products">
    <label>
        <input type="checkbox" class="item-checkbox" value="fresh">fresh milk
    </label>
</div>
<div class="products">
    <label>
        <input type="checkbox" class="item-checkbox" value="vanilla">vanilla yoghurt
    </label>
</div>
<div class="products">
    <label>
        <input type="checkbox" class="item-checkbox" value="natural">natural yoghurt
    </label>
</div>
<div class="products">
    <label>
        <input type="checkbox" class="item-checkbox" value="strawberry">strawberry yoghurt
    </label>
</div>
<label>
      <span>Quantity<span class="required"></span></span>
      <input type="number" name="p3" value="2" id="2">
</label>
<label>
      <span>Price<span class="required"></span></span>
      <input type="number" name="p3" value="30" id="30">
</label>
    <div>
      <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
    </div>
    <p>
        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
    </p>
    <div>
      <input type="radio" name="dbt" value="cd"> Cash on Delivery
    </div>
    <div>
    <input type="radio" name="dbt" value="cd"> mpesa
    </div>
    <div>
    <input type="submit" name="orderform" id= "online_order_submit" value="place your order" ondblclick="validate_enquiry_form()">
  </div><!-- Yorder -->
 </div>
</div>

</body>
</html>