<?php

$message = '<h2>Новая заявка с сайта "PF-Finanse"</h2>';

if (isset($_POST['name']))
    $message .= '<p>Имя <b>' . $_POST['name'] . '</b></p>';

if (isset($_POST['phone']))
    $message .= '<p>Номер телефона <b>' . $_POST['phone'] . '</b></p>';

if (isset($_POST['value']))
  $message .= '<p>Стоимость квартиры<b>' . $_POST['value'] . '</b></p>';

if (isset($_POST['contribution']))
  $message .= '<p>Первоначальный взнос<b>' . $_POST['contribution'] . '</b></p>';

if (isset($_POST['rate']))
  $message .= '<p>Процентная ставка<b>' . $_POST['rate'] . '</b></p>';

if (isset($_POST['term']))
  $message .= '<p>Срок кредита<b>' . $_POST['term'] . '</b></p>';

if (isset($_POST['pay']))
  $message .= '<p>Ежемесячный платёж<b>' . $_POST['pay'] . '</b></p>';

if (isset($_POST['year']))
  $message .= '<p>В каком году заканчивается ипотека<b>' . $_POST['year'] . '</b></p>';

if (isset($_POST['remainder']))
  $message .= '<p>Остаток основного долга<b>' . $_POST['remainder'] . '</b></p>';


include "class.phpmailer.php";

$mail = new PHPMailer();
$mail->From = $_REQUEST['email'] ? $_REQUEST['email'] : "orders@next-team.ru";
$mail->FromName = $_REQUEST['name'];
$mail->AddAddress('lp@next-team.ru, platformacredit@pf-finans.com');
$mail->IsHTML(true);
$mail->Subject = "Новая заявка с сайта «PF-Finanse»";
$mail->Body = $message;

if (!$mail->Send()) print ('Mailer Error: ' . $mail->ErrorInfo);

?>
