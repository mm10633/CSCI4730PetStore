<!DOCTYPE html>
<html>
<head>
<style>
        .header {
  border: 3px outset red;
  background-color: lightgrey;
  text-align: center;
}
               
       .button {
  text-align: center;
}
    </style>
</head>

<body>
    <div class="header">
<h1>EDIT PAYMENT DETAILS</h1><br>
    </div>

    <div class="content">
    <br><br>
<form action='edit_payment.php' method='post'>
 <label for="card holder name">Card Holder Name :</label><nbsp>
 <input type="text" id="customer_name" name="customer_name" size="30px" style="text-transform:uppercase"><br><br>
  
 <label for="card number">Card Number :</label><nbsp>
 <input type="number" min="0000000000000000" max="9999999999999999" oninput="validity.valid||(value='');" id="card_number" name="new_card_number" placeholder="1234 1234 1234 1234" size="40px"><br><br>

      <label for="exp date">Expiration Date :</label><nbsp>
      <input type="month" id="exp_date" name="exp_date" size="15px"><br><br>  
     
      <label for="cvv">CVV :</label><nbsp>
 <input type="number" min="000" max="999" oninput="validity.valid||(value='');" id="cvv" name="cvv" placeholder="123" size="40px"><br><br><br><br><br><br>

  <div class="button">
<input type="submit" value="Update" align="center">
           </div>
</form>
    </div>
</body>
</html>