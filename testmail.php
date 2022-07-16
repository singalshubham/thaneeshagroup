<?php
function sendmail($to,$nameto,$subject,$message,$altmess)  {
  $from  = "info@thaneeshagroup.com"; 
  $to  = "info@toponsearch.com";
  $namefrom = "Rekha Sahni";
  $mail = new PHPMailer();
  $mail->SMTPDebug = 0;
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();
  $mail->SMTPAuth   = true;
  $mail->Host   = "server310.web-hosting.com";
  $mail->Port       = 465;
  $mail->SMTPusername   = "info@thaneeshagroup.com";
  $mail->SMTPPassword   = "Yash@1234";
  $mail->SMTPSecure = "ssl";
  $mail->setFrom($from,$namefrom);
  $mail->addCC($from,$namefrom);
  $mail->Subject  = $subject;
  $mail->isHTML();
  $mail->Body = $message;
  $mail->AltBody  = $altmess;
  $mail->addAddress($to, $nameto);
  return $mail->send();
}
?>

