<?php 
 
$sendto   = "prostovikup.spb@yandex.ru"; // почта, на которую будет приходить письмо
$username = $_POST['model'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['number']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermt = $_POST['motor'];   // сохраняем в переменную данные полученные из поля c именем
$userold = $_POST['year']; // сохраняем в переменную данные полученные из поля c телефонным номером

 
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Год машины:</strong> ".$userold."</p>\r\n";
$msg .= "<p><strong>Двигатель:</strong> ".$usermt."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<center>Ваша заявка отправлена</center>";
} else {
    echo "<center>Заявка не отправлена</center>";
}
 
?>