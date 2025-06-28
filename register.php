<?php include 'includes/header.php'; ?>

<section class="section" style="max-width:520px;margin:auto;">
  <div style="background:#fff;border-radius:18px;padding:2.5rem 2rem 2rem 2rem;box-shadow:0 4px 24px rgba(52,152,219,0.13);position:relative;">
    <div style="display:flex;align-items:center;justify-content:center;gap:1.2rem;margin-bottom:1.5rem;">
      <div style="background:linear-gradient(135deg,#2ecc71 60%,#3498db 100%);border-radius:50%;width:70px;height:70px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 12px rgba(44,62,80,0.10);">
        <i class="fa-solid fa-user-plus" style="font-size:2.2rem;color:#fff;"></i>
      </div>
      <h2 style="margin:0;color:#2d3e50;letter-spacing:1px;"><i class="fa-solid fa-user-plus icon"></i>Create Account</h2>
    </div>
    <div style="margin-bottom:2rem;">
      <ol style="list-style:none;padding:0;display:flex;justify-content:space-between;max-width:340px;margin:auto;">
        <li style="text-align:center;">
          <div style="background:#2ecc71;color:#fff;width:32px;height:32px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-weight:bold;">1</div>
          <div style="font-size:0.95rem;color:#2d3e50;margin-top:0.3rem;">Info</div>
        </li>
        <li style="text-align:center;">
          <div style="background:#3498db;color:#fff;width:32px;height:32px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-weight:bold;">2</div>
          <div style="font-size:0.95rem;color:#2d3e50;margin-top:0.3rem;">Email</div>
        </li>
        <li style="text-align:center;">
          <div style="background:#e67e22;color:#fff;width:32px;height:32px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-weight:bold;">3</div>
          <div style="font-size:0.95rem;color:#2d3e50;margin-top:0.3rem;">Password</div>
        </li>
      </ol>
    </div>
    <form method="post" action="#" class="form-anim" style="background:none;box-shadow:none;padding:0;">
      <div style="margin-bottom:1.2rem;">
        <label for="name" style="color:#2ecc71;"><i class="fa-solid fa-user icon"></i>Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required autocomplete="name" style="background:#f8fafc;">
      </div>
      <div style="margin-bottom:1.2rem;">
        <label for="email" style="color:#3498db;"><i class="fa-solid fa-envelope icon"></i>Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required autocomplete="email" style="background:#f8fafc;">
      </div>
      <div style="margin-bottom:1.2rem;">
        <label for="password" style="color:#e67e22;"><i class="fa-solid fa-lock icon"></i>Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required autocomplete="new-password" style="background:#f8fafc;">
      </div>
      <button type="submit" style="margin-top:0.5rem;background:linear-gradient(90deg,#2ecc71 60%,#3498db 100%);"><i class="fa-solid fa-user-plus icon"></i>Register</button>
      <div class="form-switch" style="color:#888;">
        <span>Already have an account? <a href="login.php" style="color:#3498db;text-decoration:underline;">Login here</a>.</span>
      </div>
    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
