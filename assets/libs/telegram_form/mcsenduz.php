<?php

$webPage = 'Marketing Concept';
$name = $_POST['user_name'];
$phone = urlencode($_POST['user_phone']);
$phoneMail = $_POST['user_phone'];
$text = $_POST['user_text'];
$type = $_POST['service_type'];
// $text = $_POST['user_text'];
// $selected = $_POST['selected'];
$token = "1829935374:AAHGnHMDWbkyuhf2Ish71vkR4Ng2sNuRoOQ"; //НЕ МЕНЯЕТСЯ

$chat_id = "-473098578"; //МЕНЯЕТСЯ!!!
// $chat_id = "-527614334"; //МЕНЯЕТСЯ!!! //test

$arr = array(
  'Новая заявка с сайта: ' => $webPage,
  'Имя: ' => $name,
  'Телефон: ' => $phone
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
$clientMail = 'sales@marketingconcept.uz';

// Формирование самого письма
$title = "Marketing Concept saytidan so'rov:";
$body = "
<body>
<h2>Marketing Concept saytidan yangi so'rov</h2>
<b>Ism:</b> $name<br>
<b>Telefon raqami:</b> $phoneMail<br>
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
  $mail->Username   = 'mczayavki@gmail.com'; // Логин на почте
  $mail->Password   = 'mczayavki2021'; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('mczayavki@gmail.com', 'Служба отправки сообщений');

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
  header('Location: successuz.php');
} else {
  header('Location: error_form.php');
}
// if ($sendToTelegram) {
//   header('Location: success.php');
// } else {
//   header('Location: error_form.php');
// }

?>





