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
    const msg = userMsg.trim().toLowerCase();

    // Keyword map (should match chatbot-config.php)
    const responses = [
      // Greetings
      { keywords: ['hello', 'hi', 'hey'], response: "Hello! How can I assist you?" },
      // Help/support
      { keywords: ['help', 'support'], response: "Sure! Ask me anything about this website." },
      // Registration
      { keywords: ['register', 'signup', 'sign up'], response: "To register, click the \"Register\" link at the top." },
      // Login
      { keywords: ['login', 'signin', 'sign in'], response: "To login, click the \"Login\" link at the top." },
      // About/info
      { keywords: ['about', 'template'], response: "This is a modern PHP website template. Check the About page for more info." },
      // Features
      { keywords: ['feature', 'features'], response: "Features include responsive design, modular PHP, and easy customization." },
      // Team
      { keywords: ['team', 'members', 'staff'], response: "Our team: Alex (Lead Developer), Jamie (UI/UX), Morgan (Community Manager)." },
      // Contact
      { keywords: ['contact', 'email', 'reach'], response: "Currently, there is no contact form. Please use the links in the footer." },
      // FAQ
      { keywords: ['faq', 'question', 'questions'], response: "You can ask me about registration, login, features, or the team!" },
      // Thanks
      { keywords: ['thanks', 'thank you', 'thx'], response: "You're welcome! 😊" },
      // Goodbye
      { keywords: ['bye', 'goodbye', 'see you'], response: "Goodbye! Have a great day!" }
    ];

    // Try to match any keyword in the message
    for (const entry of responses) {
      for (const keyword of entry.keywords) {
        if (msg.includes(keyword)) {
          return entry.response;
        }
      }
    }

    // Fallback
    return "I'm not sure how to answer that, but I'll learn more soon!";
  }
});
