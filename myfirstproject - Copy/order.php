<?php
session_start();
include("connection1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Confirmation</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f7f7f7;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .confirmation-box {
      background: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      text-align: center;
      max-width: 400px;
    }
    h2 {
      color: green;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      margin: 10px 0;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background: #ff9800;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background 0.3s ease;
    }
    a:hover {
      background: #e68a00;
    }

    /* Rating styles */
    .rating-box {
      margin-top: 30px;
    }
    .emoji-rating {
      font-size: 30px;
      cursor: pointer;
      padding: 5px;
      transition: transform 0.2s;
    }
    .emoji-rating:hover {
      transform: scale(1.3);
    }
    .selected {
      transform: scale(1.4);
    }
    .thank-you {
      margin-top: 15px;
      font-weight: bold;
      color: green;
    }
  </style>
</head>
<body>
  <div class="confirmation-box">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_name'])) {
        $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
       $item_price = isset($_POST['item_price']) ? (float) $_POST['item_price'] : 0;
$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;
$customer_name = isset($_POST['customer_name']) ? mysqli_real_escape_string($conn, $_POST['customer_name']) : '';
$contact = isset($_POST['contact']) ? mysqli_real_escape_string($conn, $_POST['contact']) : '';
$address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) : '';

        $total = $item_price * $quantity;

        $sql = "INSERT INTO order_items (item_name, quantity, item_price, customer_name, contact, address)
                VALUES ('$item_name', $quantity, $item_price, '$customer_name', '$contact', '$address')";

        if (mysqli_query($conn, $sql)) {
            echo "<h2>Order placed successfully!</h2>";
            echo "<p><strong>Customer Name:</strong> $customer_name</p>";
            echo "<p><strong>Contact:</strong> $contact</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "<hr>";
            echo "<p><strong>Item:</strong> $item_name</p>";
            echo "<p><strong>Quantity:</strong> $quantity</p>";
            echo "<p><strong>Price per item:</strong> ₹$item_price</p>";
            echo "<p><strong>Total: ₹$total</strong></p>";
            echo '<a href="nextpage.php">Back to Menu</a>';
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    // Handle rating
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['emoji_rating'])) {
        $rating = mysqli_real_escape_string($conn, $_POST['emoji_rating']);

        $stmt = $conn->prepare("INSERT INTO ratings (rating) VALUES (?)");
        $stmt->bind_param("s", $rating);
        if ($stmt->execute()) {
            echo "<p class='thank-you'>Thank you for rating us $rating</p>";
        } else {
            echo "<p>Error saving rating.</p>";
        }
        $stmt->close();
    }
    ?>

    <!-- Rating Form -->
    <div class="rating-box">
      <form method="POST">
        <p><strong>Rate your experience:</strong></p>
        <input type="hidden" name="item_name" value="<?= htmlspecialchars($_POST['item_name'] ?? '') ?>">
        <div>
          <button type="submit" name="emoji_rating" value="😠" class="emoji-rating">😠</button>
          <button type="submit" name="emoji_rating" value="😐" class="emoji-rating">😐</button>
          <button type="submit" name="emoji_rating" value="🙂" class="emoji-rating">🙂</button>
          <button type="submit" name="emoji_rating" value="😍" class="emoji-rating">😍</button>
          <button type="submit" name="emoji_rating" value="😎" class="emoji-rating">😎</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
