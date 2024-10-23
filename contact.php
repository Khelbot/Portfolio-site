<?php   


if (isset($_POST ['submit'])){
   
    $mailForm = $_POST['_replyto'];
    $message = $_POST['message'];


$mailTo = "khelseaalarefi@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have a message".$message;

mail($mailTo, $txt, $headers);

header("Location: index.html?MessageSent");
}
?>