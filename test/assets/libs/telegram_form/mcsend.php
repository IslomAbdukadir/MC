<?php

$webPage = 'Chotqol';
$name = $_POST['user_name'];
$phone = urlencode($_POST['user_phone']);
$in = $_POST['user_in'];
$out = $_POST['user_out'];
// $selected = $_POST['selected'];
$token = "1829935374:AAHGnHMDWbkyuhf2Ish71vkR4Ng2sNuRoOQ"; //НЕ МЕНЯЕТСЯ

$chat_id = "-795406922"; //МЕНЯЕТСЯ!!! //test
// $chat_id = "-531409952"; //МЕНЯЕТСЯ!!!

$arr = array(
  'Новая заявка с сайта: ' => $webPage,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Заезд:' => $in,
  'Выезд:' => $out
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};


  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");




// require 'PHPMailer.php';
// require 'SMTP.php';
// require 'Exception.php';
// $clientMail = 'jasurrahmon24@gmail.com';

// // Формирование самого письма
// $title = "Заявка с сайта Chotqol:";
// $body = "
// <body>
// <h2>Новая заявка с сайта BMK</h2>
// <b>Имя:</b> $name<br>
// <b>Номер телефона:</b> $phoneMail<br>
// <b>Заказ:</b> $type<br>
// </body>
// ";

// // Настройки PHPMailer
// $mail = new \PHPMailer\PHPMailer\PHPMailer();
// try {
//   $mail->isSMTP();
//   $mail->CharSet = "UTF-8";
//   $mail->SMTPAuth   = true;
//   // $mail->SMTPDebug = 2;
//   $mail->Debugoutput = function ($str, $level) {
//     $GLOBALS['status'][] = $str;
//   };

//   // Настройки вашей почты
//   $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
//   $mail->Username   = 'mczayavki@gmail.com'; // Логин на почте
//   $mail->Password   = 'mczayavki2021'; // Пароль на почте
//   $mail->SMTPSecure = 'ssl';
//   $mail->Port       = 465;
//   $mail->setFrom('mczayavki@gmail.com', 'Служба отправки сообщений');

//   // Получатель письма
//   $mail->addAddress($clientMail);

//   // Отправка сообщения
//   $mail->isHTML(true);
//   $mail->Subject = $title;
//   $mail->Body = $body;
// } catch (Exception $e) {
//   $result = "error";
//   $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
// }

if ($sendToTelegram) {
  header('Location: success.php');
} else {
  header('Location: error_form.php');
}

?>





