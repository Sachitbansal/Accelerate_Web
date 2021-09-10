<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "sachitbansal2006@gmail.com";
$subject = $_POST['subject'];

$txt ="Message From ". $name . "\r\n" . $message;
$headers = "From: $email" . "\r\n" . "CC: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

// redirect
echo 'Sent Successfuly';
?>    