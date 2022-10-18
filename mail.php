<?php

if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['email'])&&$_POST['email']!="")) { //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'serbulatov@bk.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'New email from justtrustme.ru'; //Заголовок сообщения
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body style="background-color: #EFFFFF;">
                    <h1 style="font-size: 2rem;">Детали письма</h1>
                    <p>Имя: '.$_POST['name'].'</p>
                    <p>Телефон: '.$_POST['phone'].'</p>
                    <p>E-mail: '.$_POST['email'].'</p>
                    <p style="color: #149492;">Выбран способ для обратной связи: '.$_POST['channel'].'</p>
                    <p>Тема письма: '.$_POST['subject'].'</p>
                    <p>Содержание письма: '.$_POST['message'].'</p>
                    <p>Согласие на ОПД: '.$_POST['formAgreement'].'</p>
                </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <fromuser@justtrustme.ru>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}

// // Отправляем
// if ($mail->send()) {
//     echo 'Письмо отправлено!';
// } else {
//     echo 'Ошибка: ' . $mail->ErrorInfo;
// }

?>
