<?php
$meals = [
  ["name" => "Cheese Pizza", "image" => "Cheese Pizza.jpg", "desc" => "Thin crust pizza loaded with gooey cheese and fresh tomato sauce.", "price" => 299],
  ["name" => "Chicken Burger", "image" => "Chicken Burger.jpg", "desc" => "Crispy chicken patty with lettuce, mayo, and soft buns.", "price" => 199],
  ["name" => "White Sauce Pasta", "image" => "White Sauce Pasta.png", "desc" => "Creamy and cheesy pasta with herbs and vegetables.", "price" => 249],
  ["name" => "Hyderabadi Biryani", "image" => "Hyderabadi Biryani.png", "desc" => "Fragrant basmati rice cooked with marinated chicken and spices.", "price" => 299],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Delicious Meals</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #fefefe;
      color: #333;
    }
    header {
      background-color: #ff704d;
      color: white;
      padding: 25px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    header h1 {
      margin: 0;
      font-size: 2.8rem;
    }
    header p {
      margin-top: 10px;
      font-size: 1.1rem;
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
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 40px 20px;
      gap: 25px;
    }
    .card {
      background: white;
      width: 270px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.05);
    }
    .card img {
      width: 100%;
      height: 190px;
      object-fit: cover;
    }
    .content {
      padding: 20px;
    }
    .content h3 {
      margin-top: 0;
      margin-bottom: 10px;
      font-size: 1.5rem;
    }
    .content p {
      font-size: 0.95rem;
      margin-bottom: 12px;
      color: #555;
    }
    .price {
      font-size: 1.1rem;
      color: #e65100;
      font-weight: bold;
      margin-bottom: 12px;
    }
    .buttons {
      display: flex;
      gap: 10px;
      flex-direction: column;
    }
    .btn {
      text-align: center;
      background-color: #4caf50;
      color: white;
      padding: 10px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      font-size: 0.95rem;
    }
    .btn:hover {
      background-color: #388e3c;
    }
    .btn.order {
      background-color: #ff5722;
    }
    .btn.order:hover {
      background-color: #e64a19;
    }
    footer {
      background: #ff704d;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
      margin-top: 40px;
    }
    input[type='number'] {
      width: 100%;
      padding: 6px;
      margin-bottom: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>🍛 Delicious Meals</h1>
    <p>Taste the best dishes made with love</p>
  </header>

  <div class="container">
    <?php foreach ($meals as $meal): ?>
    <div class="card">
      <img src="<?= $meal['image'] ?>" alt="<?= $meal['name'] ?>">
      <div class="content">
        <h3><?= $meal['name'] ?></h3>
        <p><?= $meal['desc'] ?></p>
        <div class="price">₹<?= $meal['price'] ?></div>
        <form action="customer_form.php" method="post" class="buttons">
          <input type="hidden" name="item_name" value="<?= $meal['name'] ?>">
          <input type="hidden" name="item_price" value="<?= $meal['price'] ?>">
          <label>Qty:
            <input type="number" name="quantity" value="1" min="1" required>
          </label>
          <button type="submit" class="btn order">Order Now</button>
        </form>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div style="text-align: center;">
    <a href="nextpage.php" class="back-button">← Back</a>
  </div>

  <footer>
    &copy; 2025 Delicious Meals. All rights reserved.
  </footer>

</body>
</html>
