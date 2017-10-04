<?php
	echo !extension_loaded('openssl')?"Not Available":"Available";
	echo "<br/>";
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Subject = $_POST['subject'];
	$Message = $_POST['message'];
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	//Load composer's autoloader
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	$mail = new PHPMailer;  

	$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testwebnew123@gmail.com';                 // SMTP username
    $mail->Password = '123testweb';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;

    $mail->setFrom('febrik1996@gmail.com', 'Mailer');
	$mail->addAddress('febrik1996@gmail.com', 'Febrik');

	$mail->Subject = $Subject;

	$mail->Body = $Message;

	if(!$mail->send()){
?>
      <script language="JavaScript">
        alert("Something not going right!");
        document.location='http://localhost/ContactPage/';
        history.go(1);
      </script>
<?php
	}else{
    ?>
      <script language="JavaScript">
        alert("Your Message has been succesfully sent!");
        document.location='http://localhost/ContactPage/';
      </script>
<?php
	}
?>