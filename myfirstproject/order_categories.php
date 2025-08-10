<!-- order_categories.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Choose Category - SN Food Fantasy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* Page transitions */
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #fefefe;
      margin: 0;
      padding: 0;
      text-align: center;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    body.fade-in {
      opacity: 1;
      transform: translateY(0);
    }

    a.fade-link {
      transition: opacity 0.4s ease;
    }

    a.fade-link:active {
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    header {
      background: #27ae60;
      color: white;
      padding: 20px;
      font-size: 26px;
      font-weight: bold;
      animation: slideDown 0.8s ease-in-out;
    }

    .category-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      padding: 50px 20px;
      animation: fadeInCategories 1.2s ease-in-out;
    }

    .category {
      width: 220px;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      text-decoration: none;
      color: #2c3e50;
      overflow: hidden;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      animation: popIn 0.8s ease-in;
    }

    .category:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 12px 22px rgba(0, 0, 0, 0.15);
    }

    .category img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-bottom: 2px solid #27ae60;
      transition: transform 0.3s ease;
    }

    .category:hover img {
      transform: scale(1.05);
    }

    .category-content {
      padding: 20px;
    }

    .category-content i {
      font-size: 24px;
      color: #27ae60;
      margin-bottom: 10px;
      display: block;
      animation: bounce 1.5s infinite;
    }

    .category-content h3 {
      margin: 10px 0 0;
      font-size: 20px;
    }

    .back-button {
      display: inline-block;
      margin: 30px auto 0;
      background-color: #4caf50;
      color: white;
      padding: 10px 25px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      font-size: 1rem;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .back-button:hover {
      background-color: #388e3c;
      transform: scale(1.05);
    }

    footer {
      background: #2c3e50;
      color: white;
      padding: 20px;
      margin-top: 60px;
      animation: fadeInFooter 1.5s ease-in;
    }

    @media (max-width: 768px) {
      .category-container {
        flex-direction: column;
        align-items: center;
      }
    }

    /* Animations */
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeInCategories {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes fadeInFooter {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes popIn {
      0% { opacity: 0; transform: scale(0.9); }
      100% { opacity: 1; transform: scale(1); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-5px); }
    }
  </style>
</head>

<body class="fade-in">

<header>🍽️ Choose Your Favorite Category</header>

<div class="category-container">
  
  <a class="category fade-link" href="snacks.php">
    <img src="snacks.png" alt="Snacks">
    <div class="category-content">
      <i class="fas fa-utensils"></i>
      <h3>Snacks</h3>
    </div>
  </a>

  <a class="category fade-link" href="desserts.php">
    <img src="desserts.png" alt="Desserts">
    <div class="category-content">
      <i class="fas fa-ice-cream"></i>
      <h3>Desserts</h3>
    </div>
  </a>

  <a class="category fade-link" href="drinks.php">
    <img src="drinks.png" alt="Drinks">
    <div class="category-content">
      <i class="fas fa-mug-saucer"></i>
      <h3>Drinks</h3>
    </div>
  </a>

  <a class="category fade-link" href="meals.php">
    <img src="meals.png" alt="Meals">
    <div class="category-content">
      <i class="fas fa-drumstick-bite"></i>
      <h3>Meals</h3>
    </div>
  </a>

  <a class="category fade-link" href="combos.php">
    <img src="combos.png" alt="Combos">
    <div class="category-content">
      <i class="fas fa-concierge-bell"></i>
      <h3>Combos</h3>
    </div>
  </a>
</div>

<div style="text-align: center;">
  <a href="nextpage.php" class="back-button fade-link">← Back</a>
</div>

<footer>&copy; 2025 SN Food Fantasy | Fresh Taste, Fast Delivery</footer>

</body>
</html>
