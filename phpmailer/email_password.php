<?php
function email_password($password,$email)
{
	require 'PHPMailerAutoload.php';
	require 'credential.php';
	$mail = new PHPMailer;
	//$mail->SMTPDebug = 4;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = EMAIL;                 // SMTP username
	$mail->Password = PASS;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('booksxchange.services@gmail.com', 'booksXchange');
	$mail->addAddress($email, 'Unknown');     // Add a recipient

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Password Request';
	$mail->Body    = '<div>
						<h1> booksXchange </h1>
						<p> Dear user,<br>Your new password is: '.$password.'. Do not share it with anyone. Change this password as soon as you log in to your account.<br>Warm regards,<br><br>booksXchange team</p>					
						</div>';
	$mail->AltBody = '';

	if(!$mail->send()) {
		return false;
	} else {
		return true;
	}
}
?>