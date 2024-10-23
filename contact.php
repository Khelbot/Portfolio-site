<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form was submitted
    if (isset($_POST['_replyto']) && isset($_POST['message'])) {
        // Sanitize user input
        $mailForm = filter_var(trim($_POST['_replyto']), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST['message']);

        // Validate the email address
        if (filter_var($mailForm, FILTER_VALIDATE_EMAIL)) {
            $mailTo = "khelseaalarefi@gmail.com"; // Your email address
            $subject = "New Message from Website"; // Subject line
            $headers = "From: " . $mailForm;
            $txt = "You have received a message: \n\n" . $message;

            // Send the email
            if (mail($mailTo, $subject, $txt, $headers)) {
                // Redirect to a success page or back to the form with a success message
                header("Location: index.html?MessageSent");
                exit(); // Good practice to exit after a redirect
            } else {
                echo "Email sending failed. Please try again.";
            }
        } else {
            echo "Invalid email format. Please enter a valid email address.";
        }
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "No form data submitted.";
}
?>