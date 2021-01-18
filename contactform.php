<?php



//get data from form  
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$subject = $_POST ['subject'];
$message= $_POST['message'];
$to = "vatsala.bahal@mail.com";
$subject = "Mail From website";


$txt ="Firstname = ". $firstname 
. "\r\n  Lastname = " . $lastname 
. "\r\n Email =" . $email
. "\r\n Subject = " . $subject
. "\r\n Message = " . $message;



$headers = "From: vatsala.bahal@com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");

?>
