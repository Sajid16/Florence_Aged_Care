<?php

$success = "";

if(isset($_POST['submit'])){
    $to = "floranceacf@softwoodridge.com.au"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    // $first_name = $_POST['first_name'];
    // $last_name = $_POST['last_name'];
    $name = $_POST['name'];
    $phone = $_POST['number'];
    $subject = "Appointment submission";
    $subject2 = "Copy of your form submission";
    $message = "Name: ".$name."\n"."Phone: ".$phone."\n". "Email: ".$from."\n". " wrote the following:" . "\n\n" . $_POST['msg'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['msg'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $success = "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/appointForm.css">
    <title>Make an appointment</title>
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Florance Aged Care Facility</h3>
    <h4>Contact us to get an appointment</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" autofocus required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="number" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="msg" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?php echo $success; ?></div>
  </form>
</div>
</body>
</html>