<?php

    /* RSVP Form Functionality */

    /* The below if function ensures the form is only submitted via email once it has relevant data - this stops an email from being sent everytime the page has reloaded */

    $message_sent = false; //assumes the email is not sent

    if(isset($_POST['guestemail']) && $_POST['guestemail'] != ""){
        
        // if function makes sure the email address added is an actual email address

        if ( filter_var($_POST['guestemail'], FILTER_VALIDATE_EMAIL) ){
            
            // Submit the form

            $guestName = $_POST['fullguestname'];
            $Subject = "Wedding RSVP";
            $guestContact = $_POST['guestcontactnumber'];
            $guestEmail = $_POST['guestemail'];
            $guestAttend = $_POST['attending'];
        
            $to = "nic.designs115@gmail.com"; /* the email address that will receive the form data */
            $body = "";
        
            $body .= "From: ".$guestName. "\r\n"; /* \r\n is a line break for an email. Any data after this will appear on a new line */ 
            $body .= "Contact Number: ".$guestContact. "\r\n";
            $body .= "Email: ".$guestEmail. "\r\n";
            $body .= "Attending? ".$guestAttend. "\r\n";
        
            /* mail($to,$Subject,$body); 
            
            Mail isn't going to send right now, because the server is a local one and it isn't set up to send emails. Commenting out when it's active on a live server */

            $message_sent = true;
        }
    }
?>


<?php

/* Registry Form Functionality */

    $message_sent_reg = false;

    if(isset($_POST['regcontact']) && $_POST['regcontact'] != ""){

        $regName = $_POST['regname'];
        $regContact = $_POST['regcontact'];
        $regMessage = $_POST['regmessage'];
        $regSubject = "Registry Query From Website";

        $regTo = "nic.designs115@gmail.com";
        $body = "";

        $body.="From: ".$regName. "\r\n";
        $body.="Contact: ".$regContact. "\r\n";
        $body.="Message: ". "\r\n" .$regMessage. "\r\n";

        /* mail($to,$Subject,$body); 
            
        Mail isn't going to send right now, because the server is a local one and it isn't set up to send emails. Commenting out when it's active on a live server */

        $message_sent_reg = true;

    }




?>