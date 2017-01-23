<?php
require '../mailgun-php/vendor/autoload.php';
require '../PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;

    $name = 'abhi';
    $email = 'vmkaabhirami@gmail.com';
    $message = 'GYANITH rocks';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'postmaster@mail.gyanith.org';                 // SMTP username
    $mail->Password = 'ea215a2bb46488c538e3904e52ee8f1d';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

$mail->From='vmkaabhirami@gmail.com';                             // Enable encryption, only 'tls' is accepted

$mail->FromName = 'gyanith17';
$mail->addAddress($email);    


    //$mail->setFrom( $email , $name );
    //$mail->addAddress('vmkaabhirami@gmail.com', 'Chinedu Abalogu');     // Add a recipient
 //  $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Someone has something to say about xxxx';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->SMTPDebug = 2;
    if(!$mail->send()) {
      //  header("Location: /error.html");
       echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
       echo 'success';
    }

?>