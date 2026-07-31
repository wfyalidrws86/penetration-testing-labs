<?php
$input_data = $_GET['input'] ?? '';

// تطبيق معايير التعقيم وحماية وافة المخرجات البرمجية
$sanitized_output = htmlspecialchars($input_data, ENT_QUOTES, 'UTF-8');

echo "<div class='user-content'>" . $sanitized_output . "</div>";
?>
