<?php

//get data from form

$name = $_POST['name']; 
$number $_POST['mobile'];
$email= $_POST['email'];

$message= $_POST['message'];



$to = "patelchintan10082001@gmail.com";

$subject = "Mail From lover";

$txt="Name = ". $name . "\r\n Email = ". $email . "\r\n Message = ". $message . "\r\n Mobile number = ". $number .;


$headers = "From: hitmovies2455@gmail.com" . "\r\n". "CC: hitmovies2455@gmail.com";

if($email!=NULL){ 
    mail($to, $subject, $txt, $headers);

} //redirect

header("Location:thankyou.html");

?>
