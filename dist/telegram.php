<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$location = $_POST['location'];
$migration = $_POST['migration'];
$work = $_POST['work'];
$communication = $_POST['communication'];
$expirience = $_POST['expirience'];


$token = "1006194898:AAHJar0DvU3zzR0hH0rd9quHaDNHFfJ44rc";
$chat_id = "-1001247536643";

$arr = array(
    'Имя' => $name,
    'Возраст' => $age,
    'Контакт' => $contact,
    'Место проживания' => $location,
    'Общение' => $communication,
    'Готовность к переезду' => $migration,
    'Готовность работать' => $work,
    'Опыт' => $expirience,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};
include 'fancybox/dist/locate.php';
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
    header('Location: Send.html');
} else {
    echo "Error";
}