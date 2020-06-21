<?php

require 'base.php';

//define variables and declare them empty
$name = $email = $message = "";


//Receive the form data if submited and validate
if(isset($_POST["submit"])){
$name = clean_input($_POST['name']);
$email = clean_input($_POST['email']);
$message = clean_input($_POST['message']);

};

//funtion to validate form input and protect from malicious code

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($email, $name)) {
        $mail->Subject = 'Website contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
                Email: {$email}
                Name: {$name}
                Message: {$message}
                EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }

?>