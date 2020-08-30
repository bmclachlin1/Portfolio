<?php

    function console_log($data, $add_script_tags = false) {
        $command = 'console.log('. json_encode($data, JSON_HEX_TAG).');';
        if ($add_script_tags) {
            $command = '<script>'. $command . '</script>';
        }
        echo $command;
    }

    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

     if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $from_email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        $to_email = "blake.mclachlin@icloud.com";
        
        $headers = "From: ".$from_email;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
        if(mail($to_email, $subject, $txt, $headers)) {
            echo "true";
        } else {
            echo "false";
        }

        //header("Location: index.html");
     }
?>
