<?php
require 'PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['submit'])){
	$msg = 'Name: ' . $_POST['name'] ."\r\n"
			.'Email: ' . $_POST['email'] ."\r\n"
			. 'Message: ' . $_POST['message'];

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'valmarkencia@gmail.com';                 // SMTP username
	$mail->Password = 'Iam100%4814';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom($_POST['email'], $_POST['name']);
	$mail->addAddress('valmarkencia@gmail.com', 'mark valencia');     // Add a recipient
	$mail->addReplyTo($_POST['email'], $_POST['name']);

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Sent from markvalencia.com';
	$mail->Body    = 
	"<b>html this</b><br><br>

	<span>Name: ".$_POST['name']."</span><br>
	<span>Email: ".$_POST['email']."</span><br>
	<span>Message: ".$_POST['message']."</span>

	";
	$mail->AltBody = $msg;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    header('location: contact.php');
	}
} else{
	header('location: index.php');
	exit(0);
}
?>
