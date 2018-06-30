<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

if(!$update)
{
  exit;
}

$user_id = $result['message']['from']['id'];
$text = $result['message']['text'];
$token = '602808275:AAEArhxsxhUjnyXAx5-88M03WcTBN6Ruw2U';


$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";

if($text == '/start')
	$response = "Ciao bellu";

$token = '';
$url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id;
$url .= '&text=' .$response;
$res = file_get_contents($url); 