<?php
$to = "61451707@sms.telenor.bg";
$from = "villadsgrum12@gmail.com";
$message = "This is a text message\nNew line...";
$headers = "From: ".$from."\n";
mail($to,'',$message,$headers);

?>
