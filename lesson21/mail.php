<?php
  //Принимаем постовые данные
  $whatever=$_POST['whatever'];
  $name=$_POST['username'];
  $phone=$_POST['phone'];
  $user_message=$_POST['user_message'];

  //Тут указываем на какой ящик посылать письмо
  $to = "to-fedorova@mail.ru";
  //Далее идет тема письма и само сообщение
  // Тема письма
  $subject = "Заявка с сайта";
  // Сообщение письма
  $message = "
  Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
  Имя пользователя: ".htmlspecialchars($username)."<br />
  Phone: ".htmlspecialchars($phone)."<br />
  Сообщение: ".htmlspecialchars($user_message);

  // Отправляем письмо при помощи функции mail();
  $headers = "From: homework.sl <putin@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
  // Отправляем письмо при помощи функции mail();
  mail ($to, $subject, $message, $headers);
  // Перенаправляем человека на страницу благодарности и завершаем скрипт
  header('Location: thanks.html');
  exit();
?>