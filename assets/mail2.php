<?php

/* Задаем переменные */

$email = htmlspecialchars($_POST["email"]);
$subject = htmlspecialchars($_POST["subject"]);
$message = htmlspecialchars($_POST["message"]);

/* Ваш адрес и тема сообщения */
$address = "sunny-arina@mail.ru";
$sub = "Сообщение с сайта ХХХ";

/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Электронный адрес отправителя: $email
$subject
Текст сообщения:
$message";


/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $email <$email> \r\n Reply-To: $email \r\n";
if (mail($email, $sub, $mes)) {
 header('Refresh: 5; URL=https://grosularina.github.io/horseclub/');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу XXX</body>';}
else {
 header('Refresh: 5; URL=https://grosularina.github.io/horseclub/');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}

?>
