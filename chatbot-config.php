<?php
$chatbotConfig = [
  'title' => 'Assistant',
  'welcome' => '👋 Welcome! How can I help you today?',
  'input_placeholder' => 'Type your message...',
  'send_label' => 'Send',
  // Simple keyword-based responses
  'responses' => [
    'hello' => 'Hello! How can I assist you?',
    'help' => 'Sure! Ask me anything about this website.',
    'register' => 'To register, click the "Register" link at the top.',
    'login' => 'To login, click the "Login" link at the top.',
    'bye' => 'Goodbye! Have a great day!',
    // fallback
    'default' => "I'm not sure how to answer that, but I'll learn more soon!"
  ]
];
