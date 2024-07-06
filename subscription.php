<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bpdubdr@gmail.com";
    $subject = "Subscription";
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = "I have subscribed";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Subscription successful.";
    } else {
        echo "Subscription failed.";
    }
} else {
    echo "Invalid request.";
}
?>
