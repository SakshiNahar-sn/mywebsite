<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Menu Card</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
      padding: 30px;
      color: #333;
    }

    h1 {
      text-align: center;
      color: #444;
      margin-bottom: 40px;
    }

    .menu-card {
      max-width: 900px;
      margin: 0 auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
      animation: slideUp 1s ease-out;
    }

    @keyframes slideUp {
      from {
        transform: translateY(50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .category {
      margin-bottom: 30px;
    }

    .category h2 {
      font-size: 22px;
      border-left: 5px solid #ff6600;
      padding-left: 15px;
      margin-bottom: 15px;
      color: #222;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }

    ul li {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 15px;
      margin-bottom: 10px;
      background: #f5f5f5;
      border-radius: 8px;
      transition: transform 0.2s ease, background-color 0.3s ease;
    }

    ul li:hover {
      background-color: #e0e0e0;
      transform: scale(1.01);
    }

    ul li span {
      font-size: 16px;
    }

    .order-btn {
      padding: 6px 12px;
      background-color: #ff6600;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .order-btn:hover {
      background-color: #e65c00;
    }

    .back-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #6c757d;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-size: 16px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .back-btn:hover {
      background-color: #5a6268;
      transform: translateY(-2px);
    }

    @media (max-width: 600px) {
      .menu-card {
        padding: 20px;
      }

      .category h2 {
        font-size: 20px;
      }

      ul li span {
        font-size: 15px;
      }

      .order-btn {
        font-size: 13px;
        padding: 5px 10px;
      }
    }
  </style>
</head>
<body>

  <h1>Food Menu</h1>

  <div class="menu-card">

    <div class="category">
      <h2>Snacks</h2>
      <ul>
        <li><span>Samosa</span><a href="snacks.php?item=Samosa" class="order-btn">Order Now</a></li>
        <li><span>Veg Burger</span><a href="snacks.php?item=Veg+Burger" class="order-btn">Order Now</a></li>
        <li><span>Hakka Noodles</span><a href="snacks.php?item=Hakka+Noodles" class="order-btn">Order Now</a></li>
        <li><span>Paneer Pakora</span><a href="snacks.php?item=Paneer+Pakora" class="order-btn">Order Now</a></li>
        <li><span>French Fries</span><a href="snacks.php?item=French+Fries" class="order-btn">Order Now</a></li>
      </ul>
    </div>

    <div class="category">
      <h2>Meals</h2>
      <ul>
        <li><span>Cheese Pizza</span><a href="meals.php?item=Cheese+Pizza" class="order-btn">Order Now</a></li>
        <li><span>Chicken Burger</span><a href="meals.php?item=Chicken+Burger" class="order-btn">Order Now</a></li>
        <li><span>White Sauce Pasta</span><a href="meals.php?item=White+Sauce+Pasta" class="order-btn">Order Now</a></li>
        <li><span>Hyderabadi Biryani</span><a href="meals.php?item=Hyderabadi+Biryani" class="order-btn">Order Now</a></li>
      </ul>
    </div>

    <div class="category">
      <h2>Drinks</h2>
      <ul>
        <li><span>Lemonade</span><a href="drinks.php?item=Lemonade" class="order-btn">Order Now</a></li>
        <li><span>Cold Coffee</span><a href="drinks.php?item=Cold+Coffee" class="order-btn">Order Now</a></li>
        <li><span>Strawberry Shake</span><a href="drinks.php?item=Strawberry+Shake" class="order-btn">Order Now</a></li>
        <li><span>Masala Chai</span><a href="drinks.php?item=Masala+Chai" class="order-btn">Order Now</a></li>
        <li><span>Mango Smoothie</span><a href="drinks.php?item=Mango+Smoothie" class="order-btn">Order Now</a></li>
      </ul>
    </div>

    <div class="category">
      <h2>Desserts</h2>
      <ul>
        <li><span>Chocolate Cake</span><a href="desserts.php?item=Chocolate+Cake" class="order-btn">Order Now</a></li>
        <li><span>Vanilla Ice Cream</span><a href="desserts.php?item=Vanilla+Ice+Cream" class="order-btn">Order Now</a></li>
        <li><span>Strawberry Cheesecake</span><a href="desserts.php?item=Strawberry+Cheesecake" class="order-btn">Order Now</a></li>
        <li><span>Colorful Macarons</span><a href="desserts.php?item=Colorful+Macarons" class="order-btn">Order Now</a></li>
      </ul>
    </div>

    <div class="category">
      <h2>Combos</h2>
      <ul>
        <li><span>Burger & Fries Combo</span><a href="combos.php?item=Burger+%26+Fries+Combo" class="order-btn">Order Now</a></li>
        <li><span>Pasta & Garlic Bread</span><a href="combos.php?item=Pasta+%26+Garlic+Bread" class="order-btn">Order Now</a></li>
        <li><span>Chicken Biryani Combo</span><a href="combos.php?item=Chicken+Biryani+Combo" class="order-btn">Order Now</a></li>
        <li><span>Veg Wrap Combo</span><a href="combos.php?item=Veg+Wrap+Combo" class="order-btn">Order Now</a></li>
      </ul>
    </div>

    <div style="text-align: center; margin-top: 30px;">
      <a href="nextpage.php" class="back-btn">← Back</a>
    </div>

  </div>
</body>
</html>
