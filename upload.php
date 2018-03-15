<?php
//Form data
$name = $_POST['person_name'];
$lastname = $_POST['person_lastname'];

//Sender data
$email_from = 'villadsgrum12skole@gmail.com';
$email_subject = "A quick test email";
$email_body = "This is just a quick test mail, to check out the new PHP messaging system. Cheers!";

//Receiver data
$to = "villadsgrum12@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: You can't \r\n";
mail($to,$email_subject,$email_body,$headers);

?>