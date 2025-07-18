<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $password]);

    echo "Registered successfully!";
}
?>

<form method="POST">
  <input type="text" name="username" placeholder="Username"><br>
  <input type="email" name="email" placeholder="Email"><br>
  <input type="password" name="password" placeholder="Password"><br>
  <input type="submit" value="Register">
</form>
