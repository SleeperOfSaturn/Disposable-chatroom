<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['message'])) {
    $message = $_POST['message'];
    $file = fopen('chat.txt', 'a'); // Open file in append mode
    fwrite($file, $message . PHP_EOL); // Write message to file
    fclose($file);
}
?>