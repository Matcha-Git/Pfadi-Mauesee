<?php
$file = 'out.txt';

$message = $_POST['message'] ?? 'No message';

$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$entry = "Message: $message\n";

file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);
?>