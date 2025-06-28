<?php include 'includes/header.php'; ?>

<section class="section" style="max-width:480px;margin:auto;">
  <div style="background:linear-gradient(135deg,#3498db 60%,#2d3e50 100%);border-radius:18px;padding:2.5rem 2rem 2rem 2rem;box-shadow:0 4px 24px rgba(44,62,80,0.13);text-align:center;position:relative;">
    <div style="position:absolute;top:-40px;left:50%;transform:translateX(-50%);background:#fff;border-radius:50%;width:80px;height:80px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 12px rgba(44,62,80,0.10);">
      <i class="fa-solid fa-unlock-keyhole" style="font-size:2.5rem;color:#3498db;"></i>
    </div>
    <h2 style="margin-top:50px;margin-bottom:0.5rem;color:#fff;letter-spacing:1px;"><i class="fa-solid fa-right-to-bracket icon"></i>Sign In</h2>
    <p style="color:#eaf6fb;margin-bottom:2rem;">Welcome back! Please login to your account.</p>
    <form method="post" action="#" class="form-anim" style="background:none;box-shadow:none;padding:0;">
      <div style="margin-bottom:1.2rem;text-align:left;">
        <label for="email" style="color:#fff;"><i class="fa-solid fa-envelope icon"></i>Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required autocomplete="username" style="background:#f8fafc;">
      </div>
      <div style="margin-bottom:1.2rem;text-align:left;">
        <label for="password" style="color:#fff;"><i class="fa-solid fa-lock icon"></i>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password" style="background:#f8fafc;">
      </div>
      <button type="submit" style="margin-top:0.5rem;"><i class="fa-solid fa-arrow-right-to-bracket icon"></i>Login</button>
      <div class="form-switch" style="color:#eaf6fb;">
        <span>Don't have an account? <a href="register.php" style="color:#fff;text-decoration:underline;">Register here</a>.</span>
      </div>
    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
