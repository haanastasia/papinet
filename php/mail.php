<?php 

if(!empty($_POST['name'])) {

	$to      = 'haanastasia@yandex.com';
	$subject = 'ПАПЫ.NET: Сообщение из формы обратной связи';
	$message = 'Имя: '.$_POST['name'].'\r\nЭл.почта: '.$_POST['mail'].'\r\nТекст сообщения: '.$_POST['text'];
	$headers = 'From: nobody@bonya-studio.ru'       . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "Ваше сообщение успешно отправлено!";
} else {
	echo "Пожалуйста, заполните все поля!";
}
?>