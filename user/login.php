<?php
header('Content-Type: application/json');

// Simulate a login check
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Simple authentication check
if ($email === 'user@example.com' && $password === 'password123') {
    // In a real application, you would set a session or a token here
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>