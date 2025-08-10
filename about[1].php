<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us - My Restaurant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #fff3e6;
    }

    header {
      background-color: orange;
      padding: 15px 0;
    }

    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .logo h2 {
      color: white;
      margin: 0;
      font-size: 28px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      margin-left: 25px;
      font-weight: bold;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #e0e0e0;
    }

    .container {
      max-width: 700px;
      margin: 40px auto;
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      color: orange;
      margin-bottom: 20px;
    }

    p {
      line-height: 1.6;
      color: #333;
      text-align: left;
    }

    .highlight {
      color: green;
      font-weight: bold;
    }

    .btn {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 25px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #45a049;
    }

    footer {
      text-align: center;
      padding: 15px;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>

  <header>
    <div class="header-container">
      <div class="logo">
        <center><h2>🍽️ My Restaurant</h2></center>
      </div>
    </div>
  </header>

 
  <div class="container">
    <h1>Welcome to My Restaurant</h1>
    <p>
      At <span class="highlight">My Restaurant</span>, we believe food is not just fuel—it's an experience. Since our founding,
      we've been passionate about serving delicious meals made from the freshest ingredients.
    </p>
    <p>
      Our menu includes a wide variety of snacks, meals, desserts, drinks, and special combos to
      delight every customer. Whether you're looking for a quick bite or a full meal, we have
      something just for you!
    </p>
    <p>
      We pride ourselves on excellent customer service and a warm, welcoming environment. Our
      mission is to make every dining experience memorable and satisfying.
    </p>
    <p>
      Thank you for choosing us. We look forward to serving you again and again!
    </p>
    <a href="nextpage.php" class="btn">← Back to Menu</a>
  </div>

  
  <footer>
    &copy; <?php echo date("Y"); ?> My Restaurant. All rights reserved.
  </footer>

</body>
</html>
