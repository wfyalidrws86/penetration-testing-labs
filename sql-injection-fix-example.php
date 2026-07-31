<?php
// ==========================================
// VULNERABLE CODE EXAMPLE (DO NOT USE)
// ==========================================
// $id = $_GET['id'];
// $query = "SELECT * FROM users WHERE id = $id"; // Vulnerable to SQLi!


// ==========================================
// SECURE CODE EXAMPLE (BEST PRACTICE)
// ==========================================
$id = $_GET['id'];

// Using Prepared Statements / Parameterized Queries to prevent SQLi
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
$stmt->execute(['id' => $id]);
$user = $stmt->fetch();

echo "User found securely!";
?>
