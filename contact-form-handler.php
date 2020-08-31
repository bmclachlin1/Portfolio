<?php

    require 'vendor/autoload.php';

    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

     if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $FROM_EMAIL = $_POST['email'];
        $TO_EMAIL = "blake.mclachlin@icloud.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        $from = new SendGrid\Email(null, $FROM_EMAIL);
	    $to = new SendGrid\Email(null, $TO_EMAIL);
        
        $API_KEY = getenv('SENDGRID_API_KEY');

        $htmlContent = '';

        // Create Sendgrid content
        $content = new SendGrid\Content("text/html",$htmlContent);

        // Create a mail object
        $mail = new SendGrid\Mail($from, $subject, $to, $message);
        
        $sg = new \SendGrid($API_KEY);

        $response = $sg->client->mail()->send()->post($mail);
                
        if ($response->statusCode() == 202) {
            // Successfully sent
            echo 'done';
        } else {
            echo 'false';
        }

        //header("Location: index.html");
     }
?>
