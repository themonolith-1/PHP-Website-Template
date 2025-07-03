<?php include 'includes/header.php'; ?>

<section class="section" style="max-width:520px;margin:auto;">
  <h2 style="text-align:center;"><i class="fa-solid fa-envelope icon"></i>Contact Us</h2>
  <form method="post" action="#" class="form-anim" style="background:#f8fafc;">
    <div style="margin-bottom:1.2rem;">
      <label for="name" style="color:#3498db;"><i class="fa-solid fa-user icon"></i>Name</label>
      <input type="text" id="name" name="name" placeholder="Your name" required autocomplete="name" style="background:#fff;">
    </div>
    <div style="margin-bottom:1.2rem;">
      <label for="email" style="color:#3498db;"><i class="fa-solid fa-envelope icon"></i>Email</label>
      <input type="email" id="email" name="email" placeholder="Your email" required autocomplete="email" style="background:#fff;">
    </div>
    <div style="margin-bottom:1.2rem;">
      <label for="message" style="color:#3498db;"><i class="fa-solid fa-message icon"></i>Message</label>
      <textarea id="message" name="message" placeholder="Type your message..." required rows="4" style="width:100%;padding:0.8rem;border-radius:6px;border:1px solid #ddd;background:#fff;"></textarea>
    </div>
    <button type="submit" style="margin-top:0.5rem;"><i class="fa-solid fa-paper-plane icon"></i>Send Message</button>
  </form>
</section>

<section class="section">
  <h3 style="text-align:center;"><i class="fa-solid fa-heart icon"></i>What People Say</h3>
  <div class="testimonials">
    <div class="testimonial-card">
      <i class="fa-solid fa-user icon"></i>
      "The support team responded quickly and solved my issue in no time!"
      <div class="testimonial-author">&mdash; Riley</div>
    </div>
    <div class="testimonial-card">
      <i class="fa-solid fa-user icon"></i>
      "I love the clean design and easy customization options."
      <div class="testimonial-author">&mdash; Taylor</div>
    </div>
    <div class="testimonial-card">
      <i class="fa-solid fa-user icon"></i>
      "Best PHP starter template I've used. Highly recommended!"
      <div class="testimonial-author">&mdash; Casey</div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
