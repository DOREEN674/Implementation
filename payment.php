<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/payment.css">
    <title>milk</title>
</head>
<body>
  <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted means of payment</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">mpesa number</label><br>
            <input type="text" id="cname" name="cardname" placeholder="mpesa number"><br>
            <label for="ccnum">Mpesa Name</label><br>
            <input type="text" id="ccnum" name="cardnumber"><br>  
        </div>
        </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label><br>
        <input type="submit" name="" value="pay now" class="btn">
      </form>
    </div>
  </div>
</body>
</html>