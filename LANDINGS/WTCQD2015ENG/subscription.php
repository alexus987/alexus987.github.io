<?php
// Information to be modified
$to_email = "golden.lotus.klubi@gmail.com"; // email address to which the form data will be sent
$subject = "Подписка на День Тайцзи"; // subject of the email that is sent
$thanks_page = "index.html"; // path to the thank you page following successful form submission
$contact_page = "index.html"; // path to the HTML contact page where the form appears



$ema = strip_tags($_POST["contact_email"]);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: <' .$ema. '>' . "\r\n";
$headers .= "Reply-To: ".$ema."\r\n";

$email_body = 
	"<strong>Email: </strong>" . $ema;
	

// Assuming there's no error, send the email and redirect to Thank You page
	
if( mail($to_email, $subject, $email_body, $headers) ) {	
	echo '<i class="glyphicon glyphicon-ok"></i> Благодарим Вас, адрес ' .$ema. ' успешно добавлен в список рассылки!';
} else {	
	echo '<i class="glyphicon glyphicon-remove"></i> Простите, что-то пошло не так. ' .$ema. ' не удалось добавить в список рассылки. Пожалуйста повторите попытку.';
}
die();