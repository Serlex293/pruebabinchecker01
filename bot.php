<?php

//=======[Webhook]========https://api.telegram.org/bot5325109280:AAETUhRv_03rkKwZQOYT4TD0WmK3DtMRFMk/setwebhook?url=https://04f0-45-231-34-36.ngrok.io/main.php

//================[Telegram BOT API TOKEN ]================//
$botToken = "5350020794:AAHoCUF-tHSpK7gannjVrfLpZhm_yKJE2_Y"; #<------------------- PUT YOUR TOKEN HERE------------->#
$website = "https://api.telegram.org/bot".$botToken;
    error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$cdata2 = $update["callback_query"]["data"];
$caption = $update["message"]["from"]["chat"]["caption"];
$chatId = $update["message"]["chat"]["id"]; 
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$mention = '<a href="tg://user?id='.$userId.'">'.$firstname.'</a>';
$mention1 = '<a href="tg://user?id=1219059028">𝙎𝙚𝙧𝙡𝙚𝙭</a>';
$type = $update["message"]["chat"]["type"];
$rand = rand(1,100);
$chatid2 = $update["callback_query"]["message"]["chat"]["id"];
$message_id2 = $update["callback_query"]["message"]["message_id"];
$data = $update["callback_query"]["data"];
$userId = $update["message"]["from"]["id"]; 
$firstname = $update["message"]["from"]["first_name"]; 
$username = $update["message"]["from"]["username"]; 
$message = $update["message"]["text"]; 
$message_id = $update["message"]["message_id"]; 
$r_userId = $update["message"]["reply_to_message"]["from"]["id"];  
$r_firstname = $update["message"]["reply_to_message"]["from"]["first_name"];  
$r_username = $update["message"]["reply_to_message"]["from"]["username"]; 
$r_msg_id = $update["message"]["reply_to_message"]["message_id"]; 
$mentionrp = '<a href="tg://user?id='.$r_userId.'">'.$r_firstname.'</a>'; 

//[GATES]//

foreach(glob("gates/*.php") as $filename){
include $filename;
}

//[CMDS]//

foreach(glob("tools/*.php") as $filename){
include $filename;
}

//================[FUNCTION]==================//

function sendMessage ($chatId,$message_id, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);
}


?>
