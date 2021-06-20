<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$dateb = $_POST['dateb'];
$placeb = $_POST['placeb'];
$index = $_POST['index'];
$placel = $_POST['placel'];
$datereg = $_POST['datereg'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
echo "<h3>Данные:</h3>Имя:".$name."<br /> Фамилия:".$surname."<br /> Отчество:".$fname."<br /> Пол:".$gender."<br /> День рождения:".$dateb."<br /> Место рождения:".$placeb."<br /> Индекс:".$index."<br /> Домашний адрес:".$placel."<br /> Дата регистрации:".$datereg."<br /> Номер телефона:".$mobile."<br /> Почта:".$email;
