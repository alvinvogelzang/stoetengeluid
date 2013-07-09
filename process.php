<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$url = strip_tags($_POST['url']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "janstoeten@hotmail.com", "Contactformulier bericht",
"Naam: $name\nEmail: $email\nTelefoon: $phone\nBericht: $message\n",
"From: Stoetengeluid.nl" );
?>