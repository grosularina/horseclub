<?php

/* Задаем переменные */

$email = htmlspecialchars($_POST["email"]);
$subject = htmlspecialchars($_POST["subject"]);
$message = htmlspecialchars($_POST["message"]);

/* Ваш адрес и тема сообщения */
$address = "pochta@kakoy-to-sajt.com";
$sub = "Сообщение с сайта ХХХ";

/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Электронный адрес отправителя: $email
$subject
Текст сообщения:
$message";
?>
