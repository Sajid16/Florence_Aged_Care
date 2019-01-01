<?php

$to = "floranceacf@softwoodridge.com.au";
$from = $_POST['subscribe_email'];
$subject = "Subscription submission";
$message_body =  "Email: ".$from."\n". " Here is a request for a new subscriber.";
$headers = "From:" . $from;

mail($to,$subject,$message_body,$headers);

echo "<div align='center' style='padding-top:25%;'><h2>Mail Sent <span style='color:#10a516;'>Successfully.</span> Thank You for subscribing request, we will contact you shortly.</h2></div>";

echo "<div align='center' style='padding-top:30px;'><a align='center' style='color:#10a516;' href='index.html' target='_blank'><span style='color:#10a516;'><h2>GOT TO FLORANCE AGED CARE</h2></span></a></div>";

?>
