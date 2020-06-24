<?php

require "../config.php";
//define variables and declare them empty
$name = $email = $message = "";


//Receive the form data if submited and validate
if(isset($_POST["submit"])){
$name = clean_input($_POST['name']);
$email = clean_input($_POST['email']);
$message = clean_input($_POST['message']);

};

//function to validate form input and protect from malicious code

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Recipients
try{
    $mail->addReplyTo($email, 'Your message was received successfully');
    $mail->setFrom('60a9d6fcf0-85b064@inbox.mailtrap.io', 'Webmail');
    $mail->addAddress('joseph@lazpet.com', 'Joe User');     // Add a recipient
    $mail->addAddress('richardemate@gmail.comm');               // Name is optional
    
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mail from '.$name;
    $mail->Body    = ' <b>MESSAGE</b><br><p>'.$message.'</p>';
    $mail->AltBody = $message;

    $mail->send();
    echo 'Message has been sent';

    mail($email, 'Mail received', 'Your message was sent successfully, we will reply shortly'); 
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
















// sanitize the email and make sure it is valid
// function sanitize_email($field)
// {
//     $field = filter_var($field, FILTER_SANITIZE_EMAIL);
//     if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
//         return true;
//     } else {
//         return false;
//     }
// }

//     //send mail
//     $email_check = sanitize_email($email);
//     if ($email_check == false) {
//         echo "<script>
//                     alert('Invalid email.');
//                 </script>";
//     } else {

//         //send mail
//         $my_email= "richardemate@gmail.com";
//         $msg = "new mail from ".$name ." with the email ".$email."\r\n \r\n" .$message;

//         mail($my_email, $name, $msg);
//         echo "<script>
//                 alert('Thanks for reaching us, we will get back to you shortly.');
//             </script>";
 
// }

?>