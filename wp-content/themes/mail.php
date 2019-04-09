<?php
	require 'classSimpleMail.php';

	$mail = new SimpleMail('net-service.home.pl', 587, 'tls');
  $mail->auth('kontakt@elektryk.mazury.pl', '8!h_lS2kp+uo');
	$mail->from('kontakt@elektryk.mazury.pl', $_POST['name']);
	$mail->to('kontakt@elektryk.mazury.pl', 'Mazury to biznes');
  $mail->subject = $_POST['topic'];
	$mail->message = "od: ". $_POST['name'] . '<br>' . "Email: ". $_POST['email'] . '<br><br>' . $_POST['message'];

	$mail->send()
?>