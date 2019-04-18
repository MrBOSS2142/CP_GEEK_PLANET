<?php
if(isset($_POST['submit'])) {
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$subject = htmlspecialchars($_POST["subject"]);
$message = htmlspecialchars($_POST["message"]);
$adress = "Mr.BOSS2142bf@gmail.com";

 $body = "Сообщение с сайта Geek Planet \n Имя: $name \nEmail: $email \nТема: $subject \nСообщение:\n $message";
 $success = mail($adress, $subject, $body);
 if ($success){
   echo "Сообщение отправлено! :)";
}else{
    echo "Error!!!";
}
}
?>

