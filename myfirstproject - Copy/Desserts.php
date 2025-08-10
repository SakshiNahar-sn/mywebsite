<?php
session_start();
include("connection1.php");

$result = mysqli_query($conn, "SELECT * FROM desserts");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Delicious Desserts</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff5e6;
      color: #5c3d2e;
    }

    header {
      background: #ffcc99;
      color: #5c3d2e;
      padding: 20px;
      text-align: center;
      font-size: 24px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 40px;
      font-size: 36px;
      color: #d2691e;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      max-width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
    }

    .card h3 {
      margin: 15px 0 10px;
      color: #8b4513;
    }

    .card p {
      font-size: 14px;
      color: #6a4e3d;
    }

    .price {
      font-size: 1.1rem;
      color: #e65100;
      font-weight: bold;
      margin-bottom: 12px;
    }

    .btn {
      background-color: #ff5722;
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      font-size: 0.95rem;
      cursor: pointer;
      margin-top: 10px;
    }

    .btn:hover {
      background-color: #e64a19;
    }

    input[type="number"] {
      width: 60px;
      padding: 5px;
      margin-top: 8px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #ffcc99;
      color: #5c3d2e;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>🍰 Delicious Desserts</h1>
    <p>Explore mouth-watering sweets from around the world</p>
  </header>

  <div class="container">
    <h2>Our Dessert Selection</h2>
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

  <footer>
    &copy; 2025 Delicious Desserts. All rights reserved.
  </footer>

</body>
</html>
