<?php
// setup.php
require_once __DIR__ . '/include/db_config.php';

$email = 'admin@dailytaskreminder.local';
$name = 'Admin';
$password = 'admin123'; // CHANGE THIS after first login
$role = 'admin';

// check if admin exists
$stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->fetch()) {
    echo "Admin already exists: $email\n";
    exit;
}
$hash = password_hash($password, PASSWORD_DEFAULT);
$ins = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
$ins->execute([$name, $email, $hash, $role]);
echo "Admin user created: $email with password: $password\n";
echo "Please delete this file after use for security.";
