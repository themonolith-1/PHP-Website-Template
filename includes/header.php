<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Website Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <header>
    <h1 style="font-size:2.2rem;letter-spacing:2px;">
      <i class="fa-solid fa-leaf icon"></i>
      <span style="font-weight:700;">PHP Web Template</span>
    </h1>
    <nav>
      <?php
        $current = basename($_SERVER['PHP_SELF']);
      ?>
      <a href="index.php" class="<?= $current == 'index.php' ? 'active' : '' ?>"><i class="fa-solid fa-house icon"></i>Home</a>
      <a href="about.php" class="<?= $current == 'about.php' ? 'active' : '' ?>"><i class="fa-solid fa-circle-info icon"></i>About</a>
      <a href="login.php" class="<?= $current == 'login.php' ? 'active' : '' ?>"><i class="fa-solid fa-right-to-bracket icon"></i>Login</a>
      <a href="register.php" class="<?= $current == 'register.php' ? 'active' : '' ?>"><i class="fa-solid fa-user-plus icon"></i>Register</a>
    </nav>
  </header>
  <div class="container">
