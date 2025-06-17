<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <style>
    body {
      font-family: Arial;
      background-color: #e8f4f8;
      text-align: center;
      padding-top: 100px;
    }
    h1 {
      color: #333;
    }
  </style>
</head>
<body>
  <h1>Welcome, <?php echo $name; ?>!</h1>
  <p>You have successfully registered.</p>
</body>
</html>
