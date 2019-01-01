<?php

$to = "floranceacf@softwoodridge.com.au";
$from = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
$message_body = "Name: ".$name."\n". "Email: ".$from."\n". " wrote the following:" . "\n\n" .$message;
$headers = "From:" . $from;

mail($to,$subject,$message_body,$headers);

echo "<div align='center' style='padding-top:25%;'><h2>Mail Sent <span style='color:#10a516;'>Successfully.</span> Thank You, we will contact you shortly.</h2></div>";

echo "<div align='center' style='padding-top:30px;'><a align='center' style='color:#10a516;' href='index.html' target='_blank'><span style='color:#10a516;'><h2>GOT TO FLORANCE AGED CARE</h2></span></a></div>";

?>
