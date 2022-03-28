<?php

$webPage = 'Regal Stay';
// $name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$room = $_POST['user_room'];
$guests = $_POST['user_guests'];
$arrival = $_POST['user_date'];
$days = $_POST['user_days'];
// $text = $_POST['user_text'];
// $selected = $_POST['selected'];
$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k"; //НЕ МЕНЯЕТСЯ

$chat_id = "-309472835"; //МЕНЯЕТСЯ!!!

$arr = array(
  'Новая заявка на бронирование: ' => $webPage,
  // 'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Тип номера: ' => $room,
  'Количество гостей: ' => $guests,
  'Количество дней: ' => $days,
  'Въезд: ' => $arrival . ' ' . 'гггг/мм/дд',
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
$title = "Заявка с сайта Regal Stay на бронирование:";
$body = "
<body>
<h2>Новая заявка на бронирование номера в Regal Stay</h2>
<b>Номер телефона:</b> $phone<br>
<b>Тип номера:</b> $room<br>
<b>Количество гостей:</b> $guests<br>
<b>Количество дней:</b> $days<br>
<b>Въезд:</b> $arrival гггг/мм/дд<br>
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
