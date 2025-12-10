# Daily Task Reminder App

## Requirements
- PHP 8+
- MySQL
- Apache (XAMPP/WAMP/MAMP) set to point `public/` as web root or use localhost path

## Install
1. Import `db_export.sql` into MySQL.
2. Update DB credentials in `includes/db_config.php`.
3. Run `setup.php` once to create admin (http://localhost/.../setup.php). Remove it after.
4. Point your web server to `public/` folder and open `login.php`.
5. Admin credentials from setup: email `admin@dailytaskreminder.local`, password `admin123` (change immediately).

## Tech Stack
- Frontend: HTML5, CSS3, Bootstrap, JS
- Backend: Core PHP (PDO)
- Database: MySQL

## Notes
- Uses prepared statements to prevent SQL injection.
- Passwords hashed with PHP `password_hash`.
- Session-based authentication.
