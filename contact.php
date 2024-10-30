<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$email = $_POST["sender"];
$message = $_POST["message"];

$mailHeader = "From:".$email. "\r\n";

$recipient = "khelseaalarefi@gmail.com";

mail($recipient, "Contact Form Message", $message, $mailHeader)
or die("Error");




echo'<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Khelsea Al-Arefi is a Front-End Developer, based in New York City. Check out her projects here and contact her for job inquiries"
    />
    <title>Khelsea Al-Arefi Software Developer Portfolio</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://kit.fontawesome.com/531fd4969d.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
          <h2 class="sent-message text-center"> Thank you for contacting me. 
            <br>I\'ll get back to you as soon as possible!</h2>

           <a
                class="back-to-homepage"
                aria-current="page"
                href="index.html"
                title="Khelsea portfolio home"
                >Back to Homepage </a
              >
   
  </body>
</html>';



?>