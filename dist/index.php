<?php

$name = $_POST['firstname'];
$phone = $_POST['tel'];
$arrival = $_POST['arrival'];
$departure = $_POST['departure'];
$apartment = $_POST['apartment'];
$mesenger = $_POST['mesenger'];
$toket = "546203664:AAGBkn_eYXYqou0Xc4forruutiFjJcsY8DI";
$chat_id = "-299903649";
$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $tel,
    'Заезд: ' => $arrival,
    'Выезд: ' => $departure,
    'Обратная связь: ' => $mesenger
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/
    sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: index.html');
} else {
        echo "Error";
};
?>