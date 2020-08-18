<?php
var_dump($_FILES);

foreach ($_FILES["myFiles"]["tmp_name"] as $key => $value) {
	$name = "uploads/" . basename($_FILES["myFiles"]["name"][$key]);
	move_uploaded_file($value, $name);
};

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);
$subject = "My subject";
$to = "michal.rutz@gmail.com";

// send email
mail( $to , $subject , $msg);
