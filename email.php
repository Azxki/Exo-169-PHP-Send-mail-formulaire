<?php

if (isset($_POST['submit'])){
    $to = $_POST['email'];
    $from = 'cococoursan@gmail.com';
    $subject = 'Merci d\'avoir pris contact avec nous !';
    $message = 'Bonjour, merci d\'avoir pris contact avec notre support, nous vous contacterons bientôt';
    $message = wordwrap($message, 70, "\r\n");
    $headers = array (
        'reply-To' => 'cococoursan@gmail.com',
        'X-Mailer' => 'PHP/' .phpversion()
    );

    $mail = mail($to, $subject, $message, $headers, "-f cococoursan@gmail.com");

    echo "Mail envoyé !";
}