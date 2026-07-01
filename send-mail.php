<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "aatifamugheer34@gmail.com";  // ← Change to your email
    $email_subject = "New Message from Portfolio: $subject";
    $email_body = "Name: $name\n".
                  "Email: $email\n".
                  "Message:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $email_subject, $email_body, $headers)) {
        header("Location: index.html?success=1#contact");
        exit();
    } else {
        header("Location: index.html?error=1#contact");
        exit();
    }
}
?>
