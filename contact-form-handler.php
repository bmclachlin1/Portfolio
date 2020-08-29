<?php
    $name = $_POST('name');
    $from_email = $_POST('email');
    $subject = $_POST('subject');
    $message = $_POST('message');

    $to_email = 'blake.mclachlin@icloud.com';
    
    $headers = "From: ".$from_email;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($to_email, $subject, $txt, $headers);

    header("Location: index.html");
?>