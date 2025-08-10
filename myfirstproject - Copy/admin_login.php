<?php
session_start();
include("connection1.php"); 

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_id = $_POST['admin_id'];
    $admin_password = $_POST['admin_password'];

    
    $stmt = $conn->prepare("SELECT * FROM admin WHERE admin_id = ?");
    if ($stmt) {
        $stmt->bind_param("s", $admin_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows === 1) {
            $admin = $result->fetch_assoc();

           
            if ($admin_password === $admin['admin_password']) {
                $_SESSION['admin_id'] = $admin['admin_id'];
                header("Location: order_history.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Admin not found.";
        }

        $stmt->close();
    } else {
        $error = "Database error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login</title>
  <style>
    body {
      background: #f5f5f5;
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
<div class="login-box">
  <h2>Admin Login</h2>
  <form method="POST">
    <input type="text" name="admin_id" placeholder="Enter Admin ID" required />
    <input type="password" name="admin_password" placeholder="Enter Password" required />
    <button type="submit">Login</button>
    <?php if (!empty($error)): ?>
      <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
  </form>
</div>
</body>
</html>
