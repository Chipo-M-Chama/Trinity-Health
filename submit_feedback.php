<?php
// Set your destination email
$to = "info@trinity-hearing.com"; // Replace with your email
$subject = "New Feedback from Trinity Health Website";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic sanitization
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // Validation
    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please complete the form correctly.";
        exit;
    }

    // Create message
    $body = "You have received new feedback:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your feedback!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "Invalid request.";
}
?>