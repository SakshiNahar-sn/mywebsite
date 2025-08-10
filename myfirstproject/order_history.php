<?php
include("connection1.php");

$query = "SELECT * FROM order_items ORDER BY order_time DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order History</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f2f2;
      padding: 30px;
    }
    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }
    table {
      width: 95%;
      margin: auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #ff9800;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .back-button {
      display: inline-block;
      margin-top: 30px;
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      text-align: center;
      margin-left: 45%;
    }
    .back-button:hover {
      background-color: #388e3c;
    }
  </style>
</head>
<body>
  <h1>Recent Customer Orders</h1>

  <table>
    <tr>
      <th>Order ID</th>
      <th>Customer Name</th>
      <th>Contact</th>
      <th>Address</th>
      <th>Item</th>
      <th>Quantity</th>
      <th>Price (₹)</th>
      <th>Total (₹)</th>
      <th>Order Time</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { 
      $total = $row['quantity'] * $row['item_price'];
    ?>
      <tr>
        <td><?php echo $row['item_id']; ?></td>
        <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
        <td><?php echo htmlspecialchars($row['contact']); ?></td>
        <td><?php echo htmlspecialchars($row['address']); ?></td>
        <td><?php echo htmlspecialchars($row['item_name']); ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td>₹<?php echo $row['item_price']; ?></td>
        <td><strong>₹<?php echo $total; ?></strong></td>
        <td><?php echo $row['order_time']; ?></td>
      </tr>
    <?php } ?>

  </table>

  <a href="nextpage.php" class="back-button">← Back to Menu</a>
</body>
</html>
