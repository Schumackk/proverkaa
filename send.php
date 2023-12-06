<?php
$name = $_POST['name'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = urlencode($name);
$email = urlencode($email);

$name = trim($name);
$email = trim($email);

if (mail("antoninaschumak@gmail.com",
     "Pest Reject",
     "Имя: ".$name."\n".
     "Почта ".$email,
     "From: script@mail.ru \r\n")
){
     header("Location: index.html");
}

else {
     echo ("Error");
}

?>