<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $email = htmlspecialchars(trim($_POST['_replyto']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "recipient@example.com"; // Replace with your email address
        $subject = "New Message from Contact Form";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Prepare the email body
        $body = "You have received a new message from the contact form:\n\n";
        $body .= "Email: $email\n";
        $body .= "Message:\n$message\n";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Email sending failed.";
        }
    } else {
        echo "Invalid email format.";
    }
}
?>