<?php

    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

     if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $from_email = "blake.mclachlin@icloud.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        $to_email = "blake.mclachlin@icloud.com";
        
        $headers = "From: ".$from_email;
        $txt =  "You have received an e-mail from $name.\n". 
                "Message: $message.\n";
        $txt = str_replace("\n.", "\n..", $txt);
    
        // if(mail($to_email, $subject, $txt, $headers)) {
        //     echo "true";
        // } else {
        //     echo "false";
        // }

        header("Location: index.html");
     }
?>
