 <?php

$to = 'info@ssdpestcontrol.com,ssdpestcontrol@gmail.com';

$subject = 'Contact Page Inquiry';

$from = 'info@ssdpestcontrol.com'; 



// To send HTML mail, the Content-type header must be set


$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$user_email =$_REQUEST['email_enq'];

$fname = $_REQUEST['name_enq'];



// Create email headers



$headers .= 'From: '.$user_email."\r\n".

'Reply-To: '.$user_email."\r\n" .

'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message



$message = '<html><body>';

$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border="1">';

$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$_POST['name_enq'] . "</td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>Contact Number:</strong> </td><td>" . $_POST['contact_enq'] . "</td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>Enter Email Id:</strong> </td><td>" .$_POST['email_enq'] . "</td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>City:</strong> </td><td>" .$_POST['city'] . "</td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>service-type:</strong> </td><td>" .$_POST['service-type'] . "</td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>Service:</strong> </td><td>" . $_POST['service'] . "</td></tr>";

$message .= '</body></html>';



// Sending email



if(mail($to, $subject, $message, $headers)){

echo ' Thank you! <br> We will get in touch with you real soon.';


    } else{

echo 'Mail not send successfully.';


    }



 ?>
