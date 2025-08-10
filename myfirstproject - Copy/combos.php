<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Meal Combos</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f8f8f8;
      color: #333;
    }
    header {
      background-color: #4caf50;
      color: white;
      text-align: center;
      padding: 30px 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }
    header p {
      font-size: 1.1rem;
      margin-top: 8px;
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
      gap: 30px;
      padding: 40px 20px;
    }
    .combo-card {
      background: white;
      width: 280px;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s;
    }
    .combo-card:hover {
      transform: scale(1.05);
    }
    .combo-card img {
      width: 100%;
      height: 280px; 
      object-fit: cover;
    }
    .combo-content {
      padding: 20px;
    }
    .combo-content h3 {
      margin-top: 0;
      font-size: 1.4rem;
      margin-bottom: 10px;
    }
    .combo-content p {
      font-size: 0.95rem;
      color: #666;
      margin-bottom: 10px;
    }
    .price {
      font-size: 1.1rem;
      color: #e65100;
      font-weight: bold;
      margin-bottom: 12px;
    }
    .buttons {
      display: flex;
      justify-content: space-between;
      gap: 10px;
    }
    .btn {
      flex: 1;
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
      background-color: #4caf50;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <header>
    <h1>🥡 Meal Combos</h1>
    <p>Perfectly paired meals for every craving</p>
  </header>
  <div class="container">


    <div class="combo-card">
      <img src="Burger Combo.png" alt="Burger Combo">
      <div class="combo-content">
        <h3>Burger & Fries Combo</h3>
        <p>Juicy chicken burger with crispy fries and a cold drink.</p>
        <div class="price">₹249</div>
        <form method="post" action="customer_form.php">
          <input type="hidden" name="item_name" value="Burger & Fries Combo">
          <input type="hidden" name="item_price" value="249">
          <label>Qty:</label>
          <input type="number" name="quantity" value="1" min="1" style="width:50px;">
          <br><br><div class="buttons">
           
            <button type="submit" class="btn order">Order Now</button>
          </div>
        </form>
      </div>
    </div>

   
    <div class="combo-card">
      <img src="Pasta Combo.png" alt="Pasta Combo">
      <div class="combo-content">
        <h3>Pasta & Garlic Bread</h3>
        <p>Delicious white sauce pasta served with garlic bread and salad.</p>
        <div class="price">₹299</div>
        <form method="post" action="customer_form.php">
          <input type="hidden" name="item_name" value="Pasta & Garlic Bread">
          <input type="hidden" name="item_price" value="299">
          <label>Qty:</label>
          <input type="number" name="quantity" value="1" min="1" style="width:50px;">
           <br><br><div class="buttons">
            
            <button type="submit" class="btn order">Order Now</button>
          </div>
        </form>
      </div>
    </div>

    <div class="combo-card">
      <img src="Biryani Combo.png" alt="Biryani Combo">
      <div class="combo-content">
        <h3>Chicken Biryani Combo</h3>
        <p>Spicy chicken biryani with raita and gulab jamun.</p>
        <div class="price">₹349</div>
        <form method="post" action="customer_form.php">
          <input type="hidden" name="item_name" value="Chicken Biryani Combo">
          <input type="hidden" name="item_price" value="349">
          <label>Qty:</label>
          <input type="number" name="quantity" value="1" min="1" style="width:50px;">
           <br><br><div class="buttons">
                       <button type="submit" class="btn order">Order Now</button>
          </div>
        </form>
      </div>
    </div>

    <div class="combo-card">
      <img src="Wrap Combo.jpg" alt="Wrap Combo">
      <div class="combo-content">
        <h3>Veg Wrap Combo</h3>
        <p>Healthy vegetable wrap served with salad and iced tea.</p>
        <div class="price">₹199</div>
        <form method="post" action="customer_form.php">
          <input type="hidden" name="item_name" value="Veg Wrap Combo">
          <input type="hidden" name="item_price" value="199">
          <label>Qty:</label>
          <input type="number" name="quantity" value="1" min="1" style="width:50px;">
          <br><br> <div class="buttons">
		  <button type="submit" class="btn order">Order Now</button>
          </div>
        </form>
      </div>
    </div>

  </div>
  <div style="text-align: center;">
    <a href="nextpage.php" class="back-button">← Back</a>
  </div>

  <footer>
    &copy; 2025 Meal Combos. All rights reserved.
  </footer>

</body>
</html>