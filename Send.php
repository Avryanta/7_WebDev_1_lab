$name = $_POST['name'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = urldecode($name);
$email = urldecode($email);

$name = trim($name);
$email = trim($email);

echo $fio;
echo "<br>";
echo $email;



if (mail("moribet.moribet@gmail.com", "Новое сообщение", "От кого:".$name.". E-mail: ".$email ,"От: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>