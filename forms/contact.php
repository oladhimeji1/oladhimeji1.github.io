<?php
// if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  $to = 'abdulrazaq2a@gmail.com';
  $header = 'From: '.$_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['name']."\n".$_POST['message'];

  $retval = mail($to, $subject, $message, $header);
  if($retval){
    echo 'Thak you for contacting us. We\'ll get back to you';
  } else {
    echo 'Sorry, an error occured, this maybe due to bad network. Please try again later.';
  }
// } 
  
?>
