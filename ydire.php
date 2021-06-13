<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("contactus@mytarget.org", "Заявка с сайта", "ФИО: ".$fio.". E-mail: ".$email ,"From: contactus2@mytarget.org \r\n"))
 {     echo "Сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://www.mytarget.org/yandexdirect.html");}
window.setTimeout("changeurl();",3000);
</script>