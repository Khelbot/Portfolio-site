<?php   
$messageSent = ""; // Initialize message variable

if (isset($_POST['submit'])) {
    $mailForm = filter_var(trim($_POST['_replyto']), FILTER_VALIDATE_EMAIL);
    $message = trim($_POST['message']);

    if ($mailForm && !empty($message)) {
        $mailTo = "khelseaalarefi@gmail.com";
        $subject = "New Message from Website";
        $headers = "From: $mailForm\r\nReply-To: $mailForm\r\n";

        // Send email
        if (mail($mailTo, $subject, $message, $headers)) {
            $messageSent = "Message sent successfully!";
        } else {
            $messageSent = "Email sending failed.";
        }
    } else {
        $messageSent = "Invalid email address or message.";
    }
}
?>