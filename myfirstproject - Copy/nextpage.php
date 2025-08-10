<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Order snacks, drinks, meals and more from My Restaurant." />
  <meta name="keywords" content="restaurant, food delivery, snacks, drinks, meals, order online" />
  <meta property="og:title" content="My Restaurant - Online Food Delivery" />
  <meta property="og:description" content="Delicious food combos, meals, and more delivered to your door!" />
  <link rel="icon" href="logo.png" type="image/png">
  <title>My Restaurant</title>

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #fff5f0;
      color: #2c3e50;
    }


    header {
      background: #ff6f61;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      animation: slideDown 0.5s ease;
    }

    header img {
      height: 60px;
      margin-right: 10px;
      vertical-align: middle;
    }
.image-container {
  max-width: 800px;
  margin: 30px auto;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
  animation: fadeIn 1.5s ease;
}

.hero-image {
  width: 100%;
  height: auto;
  transition: transform 0.5s ease, filter 0.5s ease;
  border-radius: 16px;
}

.hero-image:hover {
  transform: scale(1.05);
  filter: brightness(1.1);
  box-shadow: 0 0 15px rgba(255, 111, 97, 0.5);
}

    nav a {
      color: #fff;
      margin-left: 20px;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ffeae5;
    }

    #toggle-sidebar {
      display: none;
    }

    .toggle-label {
      display: none;
      font-size: 24px;
      cursor: pointer;
      margin-left: 10px;
    }

  
    .container {
      display: flex;
    }

    aside.sidebar {
      width: 220px;
      background: #fff0ea;
      padding: 30px 20px;
      min-height: 100vh;
      box-shadow: 2px 0 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      animation: fadeIn 1s ease;
    }

    aside.sidebar h3 {
      font-size: 22px;
      margin-bottom: 20px;
      border-bottom: 2px solid #ff6f61;
      padding-bottom: 10px;
      color: #b83b2b;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin-bottom: 15px;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
      display: block;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .sidebar ul li a i {
      margin-right: 10px;
      color: #ff6f61;
    }

    .sidebar ul li a:hover {
      color: #ff6f61;
      transform: translateX(5px);
    }

    main {
      flex-grow: 1;
      padding: 20px;
    }

    .hero {
      text-align: center;
      padding: 100px 20px;
      background: linear-gradient(-45deg, #ff6f61, #ffc4b2);
      color: #fff;
      animation: fadeIn 1s ease;
    }

    .hero h2 {
      font-size: 50px;
      margin-bottom: 20px;
      animation: fadeUp 1s ease-in-out;
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 30px;
      animation: fadeUp 1.3s ease-in-out;
    }

    .hero a {
      display: inline-block;
      background: #fff;
      color: #ff6f61;
      padding: 15px 40px;
      border-radius: 50px;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      transition: transform 0.3s ease, background 0.3s ease;
      animation: fadeUp 1.6s ease-in-out;
    }

    .hero a:hover {
      background: #ffeae5;
      transform: scale(1.05);
    }

    .section {
      background: #fff;
      margin: 40px auto;
      padding: 60px 20px;
      text-align: center;
      max-width: 900px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      animation: fadeIn 1.2s ease;
    }

    .section h3 {
      font-size: 36px;
      margin-bottom: 20px;
      color: #ff6f61;
    }

    .section p {
      max-width: 800px;
      margin: 0 auto;
      font-size: 18px;
      color: #555;
    }

   
    footer {
      background: #2c3e50;
      color: #fff;
      padding: 30px 20px;
      text-align: center;
      animation: fadeIn 1.5s ease;
    }

  
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      aside.sidebar {
        transform: translateX(-100%);
        position: absolute;
        top: 70px;
        left: 0;
        z-index: 999;
        width: 220px;
        height: 100vh;
      }

      .overlay {
        position: fixed;
        top: 70px;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        z-index: 998;
        display: none;
      }
      #toggle-sidebar:checked ~ .overlay {
        display: block;
      }

      #toggle-sidebar:checked ~ .container aside.sidebar {
        transform: translateX(0);
      }

      .toggle-label {
        display: block;
        color: #fff;
      }
	  .star-rating {
  direction: rtl;
  display: inline-flex;
  justify-content: center;
  gap: 5px;
}
    }

    @media (max-width: 480px) {
      .hero h2 { font-size: 32px; }
      .hero p { font-size: 16px; }
    }

 
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideDown {
      from { transform: translateY(-100%); }
      to { transform: translateY(0); }
    }
  </style>
</head>
<body>
  <input type="checkbox" id="toggle-sidebar">
  
  <header>
    <div>
      <label for="toggle-sidebar" class="toggle-label"><i class="fas fa-bars"></i></label>
      <img src="logo.png" alt="SN Food Fantasy Logo">
      <strong>SN Food Fantasy</strong>
    </div>
    <nav>
      <a href="#home">🏠 Home</a>
      <a href="about.php">ℹ️ About</a>
      <a href="menu.php">📋 Menu</a>
      <a href="admin_login.php">🔐 Admin</a>
    </nav>
  </header>

  <div class="overlay"></div>

  <div class="container">
    <aside class="sidebar" role="complementary" aria-label="Menu Navigation">
      <h3>Browse Menu</h3>
      <ul>
        <li><a href="snacks.php"><i class="fas fa-utensils"></i> 🍿 Snacks</a></li>
        <li><a href="drinks.php"><i class="fas fa-mug-saucer"></i> 🥤 Drinks</a></li>
        <li><a href="desserts.php"><i class="fas fa-ice-cream"></i> 🍨 Desserts</a></li>
        <li><a href="meals.php"><i class="fas fa-drumstick-bite"></i> 🍛 Meals</a></li>
        <li><a href="combos.php"><i class="fas fa-concierge-bell"></i> 🍱 Combos</a></li>
        <li><a href="#" onclick="event.preventDefault(); document.getElementById('toggle-sidebar').checked = false;">
    <i class="fas fa-times"></i> Close
  </a>
</li>

		</ul>
    </aside>

    <main>
      <section class="hero" id="home">
        <h2><em>Welcome to Food Fantasy by SN</em></h2>
        <p>Delicious food, quick delivery, and unbeatable taste!</p>
		<div class="image-container">
  <img src="image.png" alt="People eating food with family and friends" class="hero-image" />
</div>

         <br> <br>
        <a href="order_categories.php">Order Now</a>
      </section>

      <section class="section" id="about">
        <h3>About Us</h3>
        <p>We are passionate about delivering fresh, flavorful meals straight to your door. From traditional favorites to exciting new combos, our chefs prepare every dish with care and love.</p>
      </section>

      <section class="section" id="services">
        <h3>Our Menu</h3>
        <p>Explore a variety of mouth-watering meals — snacks, drinks, desserts, combos, and more. Whether you're hungry for a light bite or a full meal, we’ve got something for everyone.</p>
      </section>

      <section class="section" id="testimonials">
        <h3>What Our Customers Say</h3>
        <p>⭐⭐⭐⭐⭐ “Delicious and fast delivery!” – S.</p>
        <p>⭐⭐⭐⭐⭐ “The best food delivery in town!” – N.</p>
      </section>
    </main>
  </div>

  <footer>
    &copy; 2025 My Restaurant | Fresh Taste, Fast Delivery
  </footer>
</body>
</html>
