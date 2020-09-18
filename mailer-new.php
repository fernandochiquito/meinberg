<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $msg = trim($_POST["msg"]);

    // Check the data.
    if (empty($name) OR empty($msg) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: https://www.meinberg.biz/new/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "paulo@meinberg.biz";

    // Set the email subject.
    $subject = "Fale Conosco $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Msg:\n$msg\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: https://www.meinberg.biz/new/index.php?success==1#form");

?>