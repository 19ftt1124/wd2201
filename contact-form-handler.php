<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST ['message'];


$email_from = '19ftt1124@gmail.com';

$email_subject = "Contact Us";

$email_body="User Name= $name.\n";
                "User Email: $visitor_email.\n";
                    "User Message: $message.\n";


$to = "19ftt1124@student.pb.edu.bn"

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contactus.html");

?>