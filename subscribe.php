<?php
require 'db_config.php'; // Make sure db_config.php is also in the same folder

if (!empty($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Check if email is actually valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=Invalid email format");
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO ms_subscribers (mss_email) VALUES (:email)");
        $stmt->execute(['email' => $email]);

        // Success
        header("Location: index.php?success=1");
        exit;
    } catch (PDOException $e) {
        // Duplicate email (MySQL error code 23000)
        if ($e->getCode() == 23000) {
            header("Location: index.php?error=Email already subscribed");
        } else {
            // Any other DB error
            header("Location: index.php?error=Something went wrong");
        }
        exit;
    }

} else {
    // No email posted
    header("Location: index.php?error=Email is required");
    exit;
}
