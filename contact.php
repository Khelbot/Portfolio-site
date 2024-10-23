<?php   

if (isset($_POST['submit'])){
   
    $mailForm = $_POST['_replyto'];
    $message = $_POST['message'];

    $mailTo = "khelseaalarefi@gmail.com";
    $subject = "New Message from Website"; // Add a subject
    $headers = "From: ".$mailForm;
    $txt = "You have received a message: \n\n".$message;

    if(mail($mailTo, $subject, $txt, $headers)){
        header("Location: index.html?MessageSent");
    } else {
        echo "Email sending failed.";
    }
}
?>