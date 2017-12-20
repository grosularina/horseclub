<?php

$recepient = "sunny-arina@mail.ru";
$sitename = "Конный клуб зоопарка";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
