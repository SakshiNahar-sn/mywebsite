<?php
session_start();
include("connection1.php");

$result = mysqli_query($conn, "SELECT * FROM snacks");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Snacks Menu</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f2f2;
      color: #333;
    }
    header {
      background: #ff9800;
      padding: 20px;
      text-align: center;
      color: white;
    }
    .container {
      padding: 20px;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .card {
      background: white;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    .card img {
      width: 100%;
      height: 240px;
      object-fit: cover;
      border-radius: 8px;
    }
    .price {
      margin: 10px 0;
      font-weight: bold;
      color: green;
    }
    .btn {
      background: #ff9800;
      color: white;
      border: none;
      padding: 10px 15px;
      margin-top: 5px;
      cursor: pointer;
      border-radius: 5px;
    }
    .btn.order {
      background: #4caf50;
    }
	.back-button {
      display: inline-block;
      margin: 20px auto 0;
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    .back-button:hover {
      background-color: #388e3c;
    }
  </style>
</head>
<body>
  <header>
    <h1>Snacks Menu</h1>
  </header>
  <div class="container">
    <div class="grid">
      <?php
      while($row = mysqli_fetch_assoc($result)) {
        $item_name = htmlspecialchars($row['name']);
        $item_price = (int)$row['price'];
        $itemImage = htmlspecialchars($row['image']);
      ?>
      <div class="card">
        <img src="<?php echo $itemImage; ?>" alt="<?php echo $item_name; ?>">
        <h3><?php echo $item_name; ?></h3>
        <p><?php echo htmlspecialchars($row['description']); ?></p>
        <div class="price">₹<?php echo $item_price; ?></div>
       
        <form action="customer_form.php" method="post">
          <input type="hidden" name="item_name" value="<?php echo $item_name; ?>">
          <input type="hidden" name="item_price" value="<?php echo $item_price; ?>">
          Qty: <input type="number" name="quantity" min="1" value="1" required style="width: 50px; padding: 5px;">
          <button type="submit" class="btn order">Order Now</button>
        </form>
      </div>
	  
	        <?php } ?>
    </div>
	<div style="text-align: center;">
    <a href="nextpage.php" class="back-button">← Back</a>
    </div>
  </div>
</body>
</html>
