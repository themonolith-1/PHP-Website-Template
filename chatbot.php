<?php
require_once __DIR__ . '/chatbot-config.php';
?>
<link rel="stylesheet" href="assets/css/chatbot.css">
<div id="chatbot-popup" class="chatbot-popup">
  <div class="chatbot-header">
    <span class="chatbot-title"><?= htmlspecialchars($chatbotConfig['title']) ?></span>
    <button class="chatbot-close" aria-label="Close">&times;</button>
  </div>
  <div class="chatbot-messages" id="chatbot-messages">
    <div class="chatbot-message bot">
      <?= htmlspecialchars($chatbotConfig['welcome']) ?>
    </div>
  </div>
  <form class="chatbot-input-area" id="chatbot-form" autocomplete="off">
    <input type="text" id="chatbot-input" placeholder="<?= htmlspecialchars($chatbotConfig['input_placeholder']) ?>" />
    <button type="submit"><?= htmlspecialchars($chatbotConfig['send_label']) ?></button>
  </form>
</div>
<button id="chatbot-toggle" class="chatbot-toggle" aria-label="Open chat">
  <i class="fa-solid fa-message"></i>
</button>
<script src="assets/js/chatbot.js"></script>
