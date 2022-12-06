<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$typesEventHook = array(
    4  => 'Генератор лидов',
    10 => 'Offline чат',
    12 => 'Online Чат',
);

$data = $_REQUEST;
$phone = array_key_exists('phone', $data) ? preg_replace('/\D/', '', $data['phone']) : null;
$email = array_key_exists('email', $data) ? $data['email'] : null;

if ($phone === null && $email === null) {
    Logs('Телефон или почта должны быть заполнены!');
    die();
}

$comment = null;
if (array_key_exists('link', $data)) {
    $comment = "Ссылка на чат: {$data['link']}";
}
if (array_key_exists('call_record', $data)) {
    $comment = "Запись разговора: {$data['call_record']}";
}

$formName = array_key_exists($data['webhooktype'], $typesEventHook) ? $typesEventHook[$data['webhooktype']] : 'Заказ звонка';

$roistatData = array(
    'roistat' => array_key_exists('roistat_promo', $data) ? $data['roistat_promo'] : null,
    'key'     => '', //Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
    'title'   => "Заявка с формы : {$formName} Envybox", //Название сделки
    'comment' => $comment, //Комментарий к сделке
    'name'    => array_key_exists('name', $data) ? $data['name'] : null, // Имя клиента
    'email'   => $email, //Email клиента
    'phone'   => $phone, //Номер телефона клиента
    'fields'  => array(
        "form_name" => $formName, //Форма захвата
    ),
);

$result = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
$result = json_decode($result, true);
if ($result['status'] === 'error') {
    Logs("Ошибка : {$result['data']}");
    die();
}



function Logs($var)
{
    $logfile = 'log.log';
    $mode = 'a';
    if (!file_exists($logfile)) {
        $mode = 'w+';
    }
    $f = fopen($logfile, $mode);
    fwrite($f, PHP_EOL . "###############################################################################" . PHP_EOL .
        date('Y-m-d H:i:s') . ": " . print_r($var, 1));
}
