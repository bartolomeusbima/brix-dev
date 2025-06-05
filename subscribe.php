<?php
require 'config/db_config.php';
header('Content-Type: text/plain');

if (!empty($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO ms_subscribers (mss_email) VALUES (:email)");
        $stmt->execute(['email' => $email]);

        echo "success";
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Email already subscribed";
        } else {
            echo "Something went wrong";
        }
        exit;
    }

} else {
    echo "Email is required";
    exit;
}
