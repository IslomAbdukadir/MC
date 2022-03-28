<?php

$webPage = 'Regal Stay';
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$type = $_POST['user_type'];
// $text = $_POST['user_text'];
// $selected = $_POST['selected'];
$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k"; //НЕ МЕНЯЕТСЯ

$chat_id = "-309472835"; //МЕНЯЕТСЯ!!!

$arr = array(
  'Новая заявка с сайта: ' => $webPage,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Тип заявки:' => $type
  // 'Text' => $text
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
$clientMail = 'reservation@regalstay.uz';

// Формирование самого письма
$title = "Заявка с сайта Regal Stay:";
$body = "
<body>
<h2>Новая заявка с сайта Regal Stay</h2>
<b>Имя:</b> $name<br>
<b>Номер телефона:</b> $phone<br>
<b>Email:</b> $email<br>
<b>Тип заявки:</b> $type<br>
</body>
";

// Настройки PHPMailer
$mail = new \PHPMailer\PHPMailer\PHPMailer();
try {
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  // $mail->SMTPDebug = 2;
  $mail->Debugoutput = function ($str, $level) {
    $GLOBALS['status'][] = $str;
  };

  // Настройки вашей почты
  $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
  $mail->Username   = 'kiranosend@gmail.com'; // Логин на почте
  $mail->Password   = 'kirano54321'; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('kiranosend@gmail.com', 'Служба отправки сообщений');

  // Получатель письма
  $mail->addAddress($clientMail);

  // Отправка сообщения
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

if ($sendToTelegram && $mail->send()) {
  header('Location: success.php');
} else {
  header('Location: error_form.php');
}
