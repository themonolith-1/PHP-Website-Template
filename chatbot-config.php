<?php
$chatbotConfig = [
  'title' => 'Assistant',
  'welcome' => '👋 Welcome! How can I help you today?',
  'input_placeholder' => 'Type your message...',
  'send_label' => 'Send',
  // Expanded keyword-based responses
  'responses' => [
    // Greetings
    'hello' => 'Hello! How can I assist you?',
    'hi' => 'Hi there! How can I help you today?',
    'hey' => 'Hey! What can I do for you?',
    // Help
    'help' => 'Sure! Ask me anything about this website.',
    'support' => 'I\'m here to help! What do you need support with?',
    // Registration/Login
    'register' => 'To register, click the "Register" link at the top.',
    'signup' => 'To sign up, use the "Register" button in the menu.',
    'login' => 'To login, click the "Login" link at the top.',
    'signin' => 'Use the "Login" link above to sign in.',
    // About/Info
    'about' => 'This is a modern PHP website template. Check the About page for more info.',
    'template' => 'This template is designed for quick PHP web projects.',
    // FAQ-style
    'features' => 'Features include responsive design, modular PHP, and easy customization.',
    'team' => 'Our team: Alex (Lead Developer), Jamie (UI/UX), Morgan (Community Manager).',
    'contact' => 'Currently, there is no contact form. Please use the links in the footer.',
    'faq' => 'You can ask me about registration, login, features, or the team!',
    // Thanks
    'thanks' => 'You\'re welcome! 😊',
    'thank you' => 'Glad to help!',
    // Goodbye
    'bye' => 'Goodbye! Have a great day!',
    'goodbye' => 'See you next time!',
    // fallback
    'default' => "I'm not sure how to answer that, but I'll learn more soon!"
  ]
];
