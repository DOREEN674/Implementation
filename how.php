<span>products<span class="required">*</span></span>
                        <select name="selection">
                              <option value="select">Select a county...</option>
                               <option value="AFG">nairobi</option>
                               <option value="ALA">Nakuru</option>
                               <option value="ALB">kajiado</option>
                               <option value="DZA">baringo</option>  
                               <option value="AFG">Bomet</option>
                        </select>
                </label>

                <h1>Online Order Form</h1>
<div class="container">
        <form action="Action.php" method="POST">
            <div class="form-row">
                <label class="select">
                    <label>
                        <h3>Delivery Methods
                            <select name="option1" tabindex="-1">
                                <option value="1">Home Delivery</option>
                                <option value="2">Store Pick-up</option>
                                <option value="3">Rural Delivery</option>
                            </select>
                    </label>
            </div>
            <div class="container">
                <h3>Customer Information</h3>
                    <label>full name</label><br>
                        <input class="fill_form" id="full_name" type="text" name="firstname" required/>
                    <label>county <br>
                            <select name="selection">
                                <option value="select">Select a county...</option>
                                <option value="AFG">nairobi</option>
                                 <option value="ALA">Nakuru</option>
                                 <option value="ALB">kajiado</option>
                                 <option value="DZA">baringo</option>  
                                 <option value="AFG">Bomet</option>
                                 <option value="ALA">Homabay</option>
                                 <option value="ALB">Bungoma</option>
                                 <option value="DZA">Uasin Gishu</option>  
                            </select>
                    </label><br>
                    <label>Contact</label><br>
                        <input class="fill_form" id="contact_number" type="text" name="phone" required/>
                    <label>Email</label><br>
                        <input class="fill_form" id="email_address" type="text" name="email" required/>
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
                    <input type="submit" name="orderform" id= "online_order_submit" value="Submit" ondblclick="validate_enquiry_form()">
                </form>
            </div id="information">
<script>
function validate_enquiry_form() {
    var targetForm = document.getElementById('information'),
        first_name = document.getElementById('.first_name'),
        last_name = document.getElementById('last_name'),
        county = document.getElementById('county'),
        contact = document.getElementById('contact'),
        email= document.getElementById('email'),
        products = document.getElementById('products');

    if (first_name == "") {
        targetForm.innerHTML = "*Please enter your customer id";
        return false;
    } else if (last_name == "") {
        targetForm.innerHTML = "*Please enter your last_name";
        return false;
    } else if (address == "") {
        targetForm.innerHTML = "*Please enter your address";
        return false;
    } else if ((!isNaN(contact_number)) == false || contact_number == "") {
        targetForm.innerHTML = "*Please enter your contact_number number";
        return false;
    } else if ((email_address == "") || (email_address.indexOf("@") == -1) || (email_address.indexOf(".") == -1)) {
        targetForm.innerHTML = "*Please enter a valid Email address";
        email_address = "";
        return false;
    } else if (confirm_email != email_address) {
        targetForm.innerHTML = "*Please enter matching email_address address";
        confirm_email = "";
        return false;
    } else {
        targetForm.innerHTML = "Order Processing";
        return true;
    }

}
</script>