<?php
require './config.php';
require './functions.php';
require './PHPMailer.php';
require './SMTP.php';
require './Exception.php';

$email = user_input($_POST['email']);
$tel = user_input($_POST['phone']);
$text = user_input($_POST['text']);

$title = "Заказ обратного звонка";
$body = "
<h2>Запрос обратного звонка</h2>
<b>Почта отправителя:</b> $email<br>
<b>Телефон отправителя:</b> $tel<br><br>
<b>Сообщение:</b><br>$text
";

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mail->isSMTP();   
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};
  $mail->Host       = $mymail_smptp;
  $mail->Username   = $mymail;
  $mail->Password   = $mymail_pass;
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom($mymail, 'Почта-бот');
  $mail->addAddress($mailto);
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  if ($mail->send()) {$result = "success";} 
  else {$result = "error";}
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
echo json_encode(["result" => $result, "status" => $status]);
?>