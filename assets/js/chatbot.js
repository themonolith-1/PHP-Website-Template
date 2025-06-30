document.addEventListener('DOMContentLoaded', function() {
  const popup = document.getElementById('chatbot-popup');
  const toggle = document.getElementById('chatbot-toggle');
  const closeBtn = popup.querySelector('.chatbot-close');
  const form = document.getElementById('chatbot-form');
  const input = document.getElementById('chatbot-input');
  const messages = document.getElementById('chatbot-messages');

  // Show popup on toggle
  toggle.addEventListener('click', () => {
    popup.classList.add('open');
    toggle.style.display = 'none';
    input.focus();
    setTimeout(() => {
      input.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 100);
  });

  // Close popup
  closeBtn.addEventListener('click', () => {
    popup.classList.remove('open');
    toggle.style.display = 'flex';
  });

  // Handle form submit
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const userMsg = input.value.trim();
    if (!userMsg) return;
    appendMessage(userMsg, 'user');
    input.value = '';
    setTimeout(() => {
      appendMessage(getBotResponse(userMsg), 'bot');
      messages.scrollTop = messages.scrollHeight;
    }, 500);
    messages.scrollTop = messages.scrollHeight;
  });

  function appendMessage(text, sender) {
    const msg = document.createElement('div');
    msg.className = 'chatbot-message ' + sender;
    msg.textContent = text;
    messages.appendChild(msg);
    messages.scrollTop = messages.scrollHeight;
  }

  // Simple keyword-based response (matches chatbot-config.php)
  function getBotResponse(userMsg) {
    const msg = userMsg.toLowerCase();
    // These responses must match chatbot-config.php
    if (msg.includes('hello')) return "Hello! How can I assist you?";
    if (msg.includes('help')) return "Sure! Ask me anything about this website.";
    if (msg.includes('register')) return "To register, click the \"Register\" link at the top.";
    if (msg.includes('login')) return "To login, click the \"Login\" link at the top.";
    if (msg.includes('bye')) return "Goodbye! Have a great day!";
    return "I'm not sure how to answer that, but I'll learn more soon!";
  }
});
