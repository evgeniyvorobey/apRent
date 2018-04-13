  <?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['firstname'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$apartment = $_POST['apartment'];
$mesenger = $_POST['mesenger'];
$token = "546203664:AAGBkn_eYXYqou0Xc4forruutiFjJcsY8DI";
$chat_id = "-299903649";
$token = "546203664:AAGBkn_eYXYqou0Xc4forruutiFjJcsY8DI";
$chat_id = "-299903649";
$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $phone,
    'Даты: ' => $date,
    'Апартаменты' => $apartment,
    'Обратная связь: ' => $mesenger
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Спасибо";
} else {
  echo "Error";
}
?>