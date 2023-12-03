<?php

//Sending an email with PHP.

    $emailTo = "devlynchelin6@gmail.com";
    $subject = "I hope that this works";
    $body = "Hello World!";
    $headers = "From: devlynchlin6@gmail.com";

    if(mail($emailTo, $subject, $body, $headers)){
        echo "The email was sent successfully!";
    }
    else {
        echo "The email could not be sent!";
    }

?>