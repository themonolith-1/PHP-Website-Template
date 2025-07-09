# PHP Website Template

A professional, clean PHP website template with placeholder pages and icons.

## Features

- Front page, About, Login, Register templates
- Responsive, modern design
- Font Awesome icons
- Modular header/footer includes

## Setup

1. **Requirements:** PHP 7.4+ and a web server (e.g., Apache, Nginx, XAMPP, etc.)
2. **Installation:**  
   - Clone or download this repository.
   - Place the folder in your web server's root directory.
3. **Usage:**  
   - Open your browser and navigate to `http://localhost/php-web/` (adjust path as needed).

## Quick Start: Running Locally

If you have PHP installed, you can quickly test this template using PHP's built-in server:

1. Open a terminal or command prompt.
2. Navigate to the project directory:
   ```
   cd path/to/php-web
   ```
3. Start the PHP built-in server:
   ```
   php -S localhost:8000
   ```
4. Open your browser and go to [http://localhost:8000](http://localhost:8000)

You should see the PHP Website Template homepage. You can navigate to other pages using the menu.

## Troubleshooting

### "php : The term 'php' is not recognized..." error

This means PHP is not installed or not added to your system's PATH.

### How to Install PHP on Windows

1. **Download PHP:**
   - Go to [https://windows.php.net/download/](https://windows.php.net/download/)
   - Download the latest "Thread Safe" .zip file for your system (x64 for most users).

2. **Extract PHP:**
   - Extract the .zip file to a folder, e.g., `C:\php`.

3. **Add PHP to PATH:**
   - Open the Start menu, search for "Environment Variables", and open "Edit the system environment variables".
   - Click "Environment Variables".
   - Under "System variables", find and select "Path", then click "Edit".
   - Click "New" and add the path to your PHP folder (e.g., `C:\php`).
   - Click OK to close all dialogs.

4. **Verify Installation:**
   - Open a new Command Prompt (important: open a new window).
   - Type:
     ```
     php -v
     ```
   - You should see the PHP version info.

5. **Run the Built-in Server:**
   - In your project folder, run:
     ```
     php -S localhost:8000
     ```
   - Open [http://localhost:8000](http://localhost:8000) in your browser.

For more details, see the [official PHP installation guide](https://www.php.net/manual/en/install.windows.php).

## Customization

- Edit the PHP files in the root directory to add your content.
- Update styles in `assets/css/style.css`.
- Replace icons using [Font Awesome](https://fontawesome.com/icons).

## Security Guarantee & Modular API Integration

This template includes a modular security file at `includes/security.php`:

- **Purpose:**  
  Allows hosters to implement their own API key validation, token checks, and other security logic for custom API endpoints.
- **How to use:**  
  - Include `includes/security.php` in any API endpoint or sensitive script.
  - Customize the provided functions (e.g., `validate_api_key`, `require_api_key`) to fit your security requirements.
  - Example usage in an API endpoint:
    ```php
    require_once __DIR__ . '/includes/security.php';
    require_api_key(); // Will block access if API key is invalid
    // ...your API logic...
    ```
- **Extendable:**  
  Add your own security checks (IP whitelisting, rate limiting, etc.) in `includes/security.php`.

**Note:**  
By default, the API key list is empty. Hosters must add their own keys and logic for production use.

## File Structure

```
php-web/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── img/
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── index.php
├── about.php
├── login.php
├── register.php
└── README.md
```

### "php : The term 'php' is not recognized..." error

This means PHP is not installed or not added to your system's PATH.

### Always seeing the same page (index.php) no matter what link you click?

Make sure you start the PHP built-in server **from inside the `php-web` directory**.  
If you start it from a parent directory, PHP will not find the correct files and will always serve the default file.

**Correct:**
```
cd path/to/php-web
php -S localhost:8000
```
Then visit:  
- [http://localhost:8000/index.php](http://localhost:8000/index.php)  
- [http://localhost:8000/login.php](http://localhost:8000/login.php)  
- [http://localhost:8000/register.php](http://localhost:8000/register.php)

### Still seeing the same page for every route?

1. Make sure you are visiting `http://localhost:8000/` in your browser, **not** opening files directly.
2. Make sure you started the server from inside the `php-web` directory.
3. Try creating a new file called `test.php` in your project folder with this content:
   ```php
   <?php
   echo "This is test.php";
   ```
   Then visit [http://localhost:8000/test.php](http://localhost:8000/test.php).  
   If you see "This is test.php", your server is working correctly.  
   If not, double-check your server directory and restart the server.
