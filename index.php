<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home - E-Commerce</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Welcome to My Shop</h1>
  <div class="products">
    <?php
    $query = "SELECT * FROM products";
    $stmt = $pdo->query($query);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='product'>
                <img src='images/{$row['image']}' alt='' width='150'>
                <h3>{$row['name']}</h3>
                <p>\${$row['price']}</p>
                <a href='product.php?id={$row['id']}'>View</a>
              </div>";
    }
    ?>
  </div>
</body>
</html>
