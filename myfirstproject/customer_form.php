<?php
// customer_form.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $quantity = $_POST['quantity'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Customer Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
    }
    .form-container {
      max-width: 500px;
      margin: auto;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      background: #4caf50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Enter Your Details</h2>
    <form action="order.php" method="post">
     
      <input type="hidden" name="item_name" value="<?php echo htmlspecialchars($item_name); ?>">
      <input type="hidden" name="item_price" value="<?php echo $item_price; ?>">
      <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">

   
      <label>Name:</label>
      <input type="text" name="customer_name" required>

      <label>Contact Number:</label>
      <input type="tel" name="contact" required pattern="[0-9]{10}" placeholder="10-digit number">

      <label>Address:</label>
      <textarea name="address" rows="4" required></textarea>

      <button type="submit">Place Order</button>
    </form>
  </div>
</body>
</html>
