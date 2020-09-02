<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from = $email;
    $to = 'faizanahmed80113@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    /*
    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
    */

    if (mail($to, $subject, $message)) {
       echo "Email sent";
    }
    else{
       echo "Failed to send email. Please try again later";
    }
}
?>

