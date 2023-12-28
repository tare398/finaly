<?php


$botToken = '6970943600:AAEwEyhGU_Rz6kYjTnlgI9KssYFhKAKEMw0';
$website = "https://api.telegram.org/bot" . $botToken;
$update = file_get_contents('php://input');
$update = json_decode($update, true);

$My_ID           = "6297075167";
$chatname        = $update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$username3       = ('@'.$username);
// $username3       = '@'.$username2;
 $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>@SWCDL</code>';
$cofuid = '1212';
$cofuid2 = '1212';
$cofuid3 = '1212';


$update = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;

$userId = $update->message->from->id;

$userIdd = $update->message->reply_to_message->from->id;

$firstnamee = $update->message->reply_to_message->from->first_name;

$firstname = $update->message->from->first_name;

$lastname = $update->message->from->last_name;

$username = $update->message->from->username;

$chattype = $update->message->chat->type;

$replytomessageis = $update->message->reply_to_message->text;

$replytomessagei = $update->message->reply_to_message->from->id;

$replytomessageiss = $update->message->reply_to_message;

$data = $update->callback_query->data;

$callbackfname = $update->callback_query->from->first_name;

$callbacklname = $update->callback_query->from->last_name;

$callbackusername = $update->callback_query->from->username;

$callbackchatid = $update->callback_query->message->chat->id;

$callbackuserid = $update->callback_query->message->reply_to_message->from->id;

$callbackmessageid = $update->callback_query->message->message_id;

$callbackfrom = $update->callback_query->from->id;

$callbackmessage = $update->callback_query->message->text;

$callbackid = $update->callback_query->id;

$text = $update->message->text;
 


$userData = file_get_contents('database/users.txt');
//===========START============//
if (strpos($text, "/start") === 0 || strpos($text, "!start") === 0 || strpos($text, ".start") === 0) {

 
if (strpos($userData, "$userId") === false) {

bot('sendMessage', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "<b>
- - - - - - - - - - - - - - - - - - - - - -
[↯]ACCESS DENIED! ❌
- - - - - - - - - - - - - - - - - - - - - -
[↯]Status: <code>Unregistered User! ⚠️</code>
[↯]Message: <code>You have to register first to use me</code>
- - - - - - - - - - - - - - - - - - - - - -
</b>",
    'reply_to_message_id' => $message_id,
    'parse_mode' => 'html'
]);
return;
}   

  
$videoUrl = "https://i.top4top.io/m_2812wqjte0.mp4";
        $welcomeMessage = "<b>Hello @$username\n\nThis bot made for checking ccs and have many Tools.Type /cmds to see commands menu.\nIf you encounter any type of error, please inform the Owner</b>";

        bot('sendVideo', [
            'chat_id' => $chat_id,
            'video' => $videoUrl,
            'caption' => $welcomeMessage,
            'parse_mode' => 'html',
            'reply_to_message_id' => $message_id,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
          [['text' => "Buy", 'url' => "t.me/feb2_0"], ['text' => "Finalize", 'callback_data' => "end"]],
                ],
            ]),
        ]);
    }   

//=========CMDS============//
if (strpos($text, "/cmds") === 0 || strpos($text, "!cmds") === 0 || strpos($text, ".cmds") === 0) {

if (strpos($userData, "$userId") === false) {

bot('sendMessage', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "<b>
- - - - - - - - - - - - - - - - - - - - - -
[↯]ACCESS DENIED! ❌
- - - - - - - - - - - - - - - - - - - - - -
[↯]Status: <code>Unregistered User! ⚠️</code>
[↯]Message: <code>You have to register first to use me</code>
- - - - - - - - - - - - - - - - - - - - - -
</b>",
    'reply_to_message_id' => $message_id,
    'parse_mode' => 'html'
]);
return;
}


  $videoUrl = "https://i.top4top.io/m_2812wqjte0.mp4";
    $welcomeMessage = "<b>Welcome to my command center\nHere are my commands -
</b>";

    bot('sendVideo', [
        'chat_id' => $chat_id,
        'video' => $videoUrl,
        'caption' => $welcomeMessage,
        'parse_mode' => 'html',
        'reply_to_message_id' => $message_id,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "Gateways", 'callback_data' => "gates"], ['text' => "Tools", 'callback_data' => "tools"], ['text' => "Channel", 'callback_data' => "channel"]],
                [['text' => "Finalize", 'callback_data' => "end"]],
            ],
        ]),
    ]);
}

//============TOOLS==============//
if($data == 'tools') {
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  bot('editMessageCaption', [
      'chat_id' => $callbackchatid,
      'video'=>"https://t.me/WasDark/28",

'caption' => "<b>
	Page Number: 1
	- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 SK CHECK
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/sk sk_live_</code>
- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 CC GENERATE
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/gen [bin]</code>
- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 BIN LOOKUP
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/bin binxxx</code>
- - - - - - - - - - - - - - - - - - - - -

</b>",
      'message_id'=>$callbackmessageid,
      'parse_mode' => 'html',
      'reply_markup'=>json_encode(['inline_keyboard'=>[
      [['text'=>'Gates', 'callback_data'=>"gates"],['text' => "Next »", 'callback_data' => "toolsn"]],
    [['text'=>'« Return', 'callback_data'=>"back2"]],
      ],'resize_keyboard' => true
     ]) ]);
    }
}


if($cdata2 == 'toolsn'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  bot('editMessageCaption', [
      'chat_id' => $callbackchatid,
      'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
      'caption' => "<b>
Page Number: 2

- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 INFO USER
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/info</code>
- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 CARD EXTRAP
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/ex $cc|$mm|$yy|$cvv</code>
- - - - - - - - - - - - - - - - - - - - -

</b>",
      
      'message_id'=>$callbackmessageid,
      'parse_mode' => 'html',
      'reply_markup'=>json_encode(['inline_keyboard'=>[
      [['text'=>'« Return', 'callback_data'=>"tools"],['text' => "Next »", 'callback_data' => "toolsnn"]],
    [['text'=>'Finalize', 'callback_data'=>"end"]],
      ],'resize_keyboard' => true
     ]) ]);
    }
}

if($cdata2 == 'toolsnn'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  bot('editMessageCaption', [
      'chat_id' => $callbackchatid,
      'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
      'caption' => "<b>
Page Number: 3
	- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 RANDOM ADDRESS
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/rand US(Ccode)</code>
- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 IP ADDRESS CHECK
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/ip 1.1.1.1[ip]</code>
- - - - - - - - - - - - - - - - - - - - -
Tool 🔥 IBAN CHECK
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/iban ibanxxxxxxx</code>
- - - - - - - - - - - - - - - - - - - - -
</b>",
      
      'message_id'=>$callbackmessageid,
      'parse_mode' => 'html',
      'reply_markup'=>json_encode(['inline_keyboard'=>[
      [['text'=>'« Return', 'callback_data'=>"toolsn"],['text' => "Gates", 'callback_data' => "gates"]],
    [['text'=>'Finalize', 'callback_data'=>"end"]],
      ],'resize_keyboard' => true
     ]) ]);
    }
}


//=============GATES===============//
if($data == 'gates'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  bot('editMessageCaption', [
    'chat_id' => $callbackchatid,
    'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
    'caption' => "<b>AVAILABLE GATES\n\nϟ TOTAL GATES ↠ 6\nϟ AUTH GATES ↠ 3\nϟ CHARGE GATES ↠ 3</b>",

    'message_id'=>$callbackmessageid,
    'parse_mode' => 'html',
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'Auth', 'callback_data'=>"auth"],['text' => "Charge", 'callback_data' => "charge"]],
    [['text'=>'« Return', 'callback_data'=>"back2"]],
    ],'resize_keyboard' => true
   ]) ]);
  }
}

//==============BACK=============//
if ($data == 'back') {
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  bot('editMessageCaption', [
    'chat_id' => $callbackchatid,
    'video' => "https://i.top4top.io/m_2812wqjte0.mp4",
    'caption' => "<b>AVAILABLE GATES\n\nϟ TOTAL GATES ↠ 6\nϟ AUTH GATES ↠ 3\nϟ CHARGE GATES ↠ 3</b>",
    'message_id' => $callbackmessageid,
    'parse_mode' => 'html',
    'reply_markup' => json_encode([
      'inline_keyboard' => [
                [['text' => "Gateways", 'callback_data' => "gates"], ['text' => "Tools", 'callback_data' => "tools"], ['text' => "Channel", 'callback_data' => "channel"]],
                [['text' => "Finalize", 'callback_data' => "end"]],
            ],
        ]),
    ]);
  }
}

//=============ME==============//
if ($data == 'me') {
  if ($callbackfrom != $callbackuserid) {
      bot('answerCallbackQuery', [
          'callback_query_id' => $callbackid,
          'text' => "Not Allowed,Open your own Menu ❌",
          "show_alert" => true
      ]);
  } else {
      // Enviar el mensaje del perfil
      $keyboard = [
          [
              ['text' => '« Return', 'callback_data' => 'back2'],
              ['text' => 'Finalize', 'callback_data' => 'end']
          ]
      ];

      bot('editMessageCaption', [
          'chat_id' => $callbackchatid,
          'reply_to_message_id' => $message_id,
          'caption' => "<b>
[🧧]PROFILE AREA
━━━━━━━━━━━━━━
[↯]User[NAME]: @$callbackusername
[↯]User[ID]: <code>$callbackuserid</code>
[↯]User[RANK]: $rank
[↯]User[EXPIRY]: $expiryDate
━━━━━━━━━━━━━━
</b>",

'message_id' => $callbackmessageid,
          'parse_mode' => 'html',
          'reply_markup' => json_encode([
              'inline_keyboard' => $keyboard,
              'resize_keyboard' => true
          ])
      ]);
  }
}
//==========BACK 2===========//
if ($data == 'back2') {
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  bot('editMessageCaption', [
    'chat_id' => $callbackchatid,
    'video' => "https://i.top4top.io/m_2812wqjte0.mp4",
    'caption' => "<b>Welcome to my command center\nHere are my commands -
</b>",
    'message_id' => $callbackmessageid,
    'parse_mode' => 'html',
    'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "Gateways", 'callback_data' => "gates"], ['text' => "Tools", 'callback_data' => "tools"], ['text' => "Channel", 'callback_data' => "channel"]],
                [['text' => "Finalize", 'callback_data' => "end"]],
            ],
        ]),
    ]);
  }
}

//=============FINALIZE============//
if($data == 'end'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$cchatid2&message_id=$cmessage_id2");
 }
}
//=============CHARGE===============//
if($data == 'charge'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
bot('editMessageCaption', [
  'chat_id' => $callbackchatid,
  'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
  'caption' => "<b>
Page Number: 1  	
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Stripe [ 1$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/chk cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Braintree [ 50$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/btr cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Paypal [ 0.1$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ OFFLINE ❌ ]
Format: <code>/ppa cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -

</b>",
'message_id'=>$callbackmessageid,
  'parse_mode' => 'html',
  'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'« Return', 'callback_data'=>"gates"],
  ['text' => "Next »", 'callback_data' => "chargen"]],
  [['text'=>'Finalize', 'callback_data'=>"end"]],
  ],'resize_keyboard' => true
 ]) ]);
}
}


if($data == 'chargen'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
bot('editMessageCaption', [
  'chat_id' => $callbackchatid,
  'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
  'caption' => "<b>
Page Number: 2  	
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Diamond [ 50$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/dia cc|mon|year|cvv</code>
Comment: No comment added
Update Since: 23-08-2023 18:40:31 PM
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 L [ 0.01$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/la cc|mon|year|cvv</code>
Comment: No comment added
Update Since: 27-06-2023 10:36:07 AM
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Mars [ 1$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/ma cc|mon|year|cvv</code>
Comment: No comment added
Update Since: 20-05-2023 10:18:05 AM
- - - - - - - - - - - - - - - - - - - - -
</b>",

  'message_id'=>$callbackmessageid,
  'parse_mode' => 'html',
  'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'« Return', 'callback_data'=>"charge"],
  ['text' => "Next »", 'callback_data' => "chargenn"]],
  [['text'=>'Finalize', 'callback_data'=>"end"]],
  ],'resize_keyboard' => true
 ]) ]);
}
}


if($data == 'chargenn'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
bot('editMessageCaption', [
  'chat_id' => $callbackchatid,
  'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
  'caption' => "<b>
Page Number: 3	
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Authnet [ 25$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ OFFLINE ❌ ]
Format: <code>/atn cc|mon|year|cvv</code>
Comment: Captcha
Update Since: 27-08-2023 14:54:54 PM
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Blaze [ 32$ ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/bl cc|mon|year|cvv</code>
Comment: No comment added
Update Since: 24-08-2023 17:27:52 PM
- - - - - - - - - - - - - - - - - - - - -

</b>",

  'message_id'=>$callbackmessageid,
  'parse_mode' => 'html',
  'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'« Return', 'callback_data'=>"chargen"],
  ['text' => "Gates", 'callback_data' => "gates"]],
  [['text'=>'Finalize', 'callback_data'=>"end"]],
  ],'resize_keyboard' => true
 ]) ]);
}
}


//=============CHANNEL=============//

if($data == 'channel'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
  bot('editMessageCaption', [
    'chat_id' => $callbackchatid,
    'video' => "https://i.top4top.io/m_2812wqjte0.mp4",
    'caption' => "<b>Join our official channels</b>",
    'message_id' => $callbackmessageid,
    'parse_mode' => 'html',
  'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'Group', 'url' => "https://t.me/CRKSOO_CC7"],
  ['text' => "Channel", 'url' => "https://t.me/CRKSOO_CC"]],
[['text'=>'« Return', 'callback_data'=>"back2"]],
],'resize_keyboard' => true
 ]) ]);
}
}
      
//=============AUTH================//
if($data == 'auth'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
bot('editMessageCaption', [
  'chat_id' => $callbackchatid,
  'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
  'caption' => "<b>
Page Number: 1  	
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 payflow [ Avs ]
- - - um- - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/flw cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Adyen [ Auth ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/any cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 B3 [ payment ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/vr cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -

</b>",

  'message_id'=>$callbackmessageid,
  'parse_mode' => 'html',
  'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'« Return', 'callback_data'=>"gates"],
  ['text' => "Next »", 'callback_data' => "authn"]],
  [['text'=>'Finalize', 'callback_data'=>"end"]],
  ],'resize_keyboard' => true
 ]) ]);
}
}


if($data == 'authn'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
bot('editMessageCaption', [
  'chat_id' => $callbackchatid,
  'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
  'caption' => "<b>
  	
Page Number: 2  	
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Ruby [Mage 48$]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/ru cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥  [ Stripe+Woocomm ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/str cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -
  	
</b>",

  'message_id'=>$callbackmessageid,
  'parse_mode' => 'html',
  'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'« Return', 'callback_data'=>"auth"],
  ['text' => "Next »", 'callback_data' => "authnn"]],
  [['text'=>'', 'callback_data'=>"end"]],
  ],'resize_keyboard' => true
 ]) ]);
}
}

if($data == 'authnn'){
  if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed,Open your own Menu ❌",
      "show_alert" => true
    ]);

  } else {
bot('editMessageCaption', [
  'chat_id' => $callbackchatid,
  'video'=>"https://i.top4top.io/m_2812wqjte0.mp4",
  'caption' => "<b>
  	
Page Number: 3	
- - - - - - - - - - - - - - - - - - - - -
Gateway 🔥 Adyen [ Auth ]
- - - - - - - - - - - - - - - - - - - - -
STATUS [ ONLINE ✅ ]
Format: <code>/any cc|mon|year|cvv</code>
- - - - - - - - - - - - - - - - - - - - -  	
</b>",

  'message_id'=>$callbackmessageid,
  'parse_mode' => 'html',
  'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'« Return', 'callback_data'=>"authn"],
  ['text' => "Gates", 'callback_data' => "gates"]],
  [['text'=>'Finalize', 'callback_data'=>"end"]],
  ],'resize_keyboard' => true
 ]) ]);
}
}




//=============FUNCTIONS==============//
function clean($string) {
  $text = preg_replace("/\r|\n/", " ", $string);
     $str1 = preg_replace('/\s+/', ' ', $text);
$str = preg_replace("/[^0-9]/", " ", $str1);
$string = trim($str, " ");
$lista = preg_replace('/\s+/', ' ', $string);
   return $lista; 
}


function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
}


function SetAdmin($data)
{
        $file = fopen("admins.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
$link = mysqli_connect("localhost", "u330734560_azuna", "Sifat@2000", "u330734560_azuna");
$sql = "INSERT INTO PERSONS (userid, role, username, credits) VALUES( '$data', '[ADMIN]', '$username', '99999999') ";
$result = mysqli_query($link, $sql);
mysqli_close($link);
        
    }    

function SetPremium($data)
{
        $file = fopen("premiums.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }    
    
    function SetPremiuma($data)
{
        $file = fopen("premiumsa.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }    
function sendMessage1($message) {
       $message = urlencode($message);
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chat_id."&text=".$message."&parse_mode=HTML";
        file_get_contents($url);
        
}
function SetSeller($data)
{
        $file = fopen("sellers.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }  

function AddGroup($data)
{
        $file = fopen("groups.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }


function gibarray($message){
    // $cuted = substr($message, 6);
    return explode("\n", $message);
}

function time1($val)
{
    $endtime = microtime(true);
    $time = $endtime - $val;
    $time = substr($time, 0, 4);
    return $time;
    }



function replyMessage($chat_id, $text, $reply_to_message_id, $reply_markup = null) {
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}




//HORAS COMPLETAS
ini_set('date.timezone', 'America/Bogota');
$horac = date("h:i:s A");
$hora = date("hA");
$horario = '';

//Buenos D铆as
if ($hora == '06AM') {
    $horario = 'Good morning馃彊';
}if ($hora == '07AM') {
    $horario = 'Good morning馃彊';
}if ($hora == '08AM') {
    $horario = 'Good morning馃彊';
}if ($hora == '09AM') {
    $horario = 'Good morning馃彊';
}if ($hora == '10AM') {
    $horario = 'Good mornings馃彊';
}if ($hora == '11AM') {
    $horario = 'Good morning馃彊';
}if ($hora == '11:59:59 AM') {
    $horario = 'Good morning馃彊';
}

//Buenas Tardes
if ($hora == '12PM') {
    $horario = 'Good afternoon馃寗';
}if ($hora == '01PM') {
    $horario = 'Good afternoon馃寗';
}if ($hora == '02PM') {
    $horario = 'Good afternoon馃寗';
}if ($hora == '03PM') {
    $horario = 'Good afternoon馃寗';
}if ($hora == '04PM') {
    $horario = 'Good afternoon馃寗';
}if ($hora == '05PM') {
    $horario = 'Good afternoon馃寗';
}if ($horac == '05:59:59 PM') {
    $horario = 'Good afternoon馃寗';
}

//Buenas Noches
if ($hora == '06PM') {
    $horario = 'good evening馃寖';
}if ($hora == '07PM') {
    $horario = 'good evening馃寖';
}if ($hora == '08PM') {
    $horario = 'Good evening馃寖';
}if ($hora == '09PM') {
    $horario = 'Good evening馃寖';
}if ($hora == '10PM') {
    $horario = 'Good evening馃寖';
}if ($hora == '11PM') {
    $horario = 'Good evening馃寖';
}if ($horac == '11:59:59 PM') {
    $horario = 'Good evening馃寖';
}

//Vez a mimir, ya es tarde, naa es broma.
if($hora == '12AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '01AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '02AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '03AM') {
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '04AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '05AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($horac == '05:59:59 AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}



ignore_user_abort(true);
set_time_limit(0);
function bot($method, $datas = [])
{
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($datas),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        // Manejar el error de cURL
        return false;
    } else {
        // Decodificar la respuesta
        $result = json_decode($response, true);

        if ($result['ok']) {
            // La solicitud fue exitosa
            return $result['result'];
        } else {
            // Manejar el error de la API de Telegram
            return false;
        }
    }
}


function capture($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}


function logsummary($summary){
    global $config;
    bot('sendmessage',[
        'chat_id'=>$config['logsID'],
        'text'=>$summary,
        'parse_mode'=>'html'
        
    ]);
}
function sendMessage2($chatId, $message, $message_id)
{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org:443/bot'.$GLOBALS['botToken'].'/sendMessage');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'HTTP/1.1 200 OK'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"chat_id":"'.$chatId.'","text":"'.$message.'","reply_to_message_id":"'.$message_id.'","parse_mode":"HTML"}');
        $result = curl_exec($ch);
    }

function add_days($timestamp,$days){
    $future = $timestamp + (60*60*24*str_replace('d','',$days));
    return $future;
}

function add_minutes($timestamp,$minutes){
    $future = $timestamp + (60*str_replace('m','',$minutes));
    return $future;
}



function array_in_string($str, array $arr) {
    foreach($arr as $arr_value) { 
        if (stripos($str,$arr_value) !== false) return true; 
    }
    return false;
}
function editMessage($chat_id,$message_id,$text,$reply_markup){
	bot('editMessageText',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'text'=>$text,
	'reply_markup'=>$reply_markup]);
}

function forwardMessage($chatid,$from_chat_id,$message_id){
	bot('forwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat_id,
	'message_id'=>$message_id]);
}

function copyMessage($chatid,$from_chat_id,$message_id){
	bot('copyMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat_id,
	'message_id'=>$message_id]);
}

function sendPhoto($chat_id,$photo,$keyboard){
	bot('sendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'reply_markup'=>$keyboard]);
}



function send_reply($chatId, $message_id, $keyboard, $message) {
    global $website;
    $url = $website . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message) . "&reply_to_message_id=" . $message_id . "&parse_mode=HTML&reply_markup=" . $keyboard;
    $response = file_get_contents($url);
    
    if ($response === FALSE) {
        error_log("Failed to send message: " . $url);
    }
    
    return json_decode($response, TRUE)['result']['message_id'];
}


function edit_sent_message($chatId, $message_id, $message) {
    global $website;
    $url = $website . "/editMessageText?chat_id=" . $chatId . "&message_id=" . $message_id . "&text=" . urlencode($message) . "&parse_mode=HTML";
    $response = file_get_contents($url);

    if ($response === FALSE) {
        error_log("Failed to edit message: " . $url);
    }
    return $response;
}


function sendVideox($chatId, $videoURL, $caption, $keyboard) {
    global $botToken;
    $url = "https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoURL&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard";
    file_get_contents($url);
}



function reply_tox($chatId,$message_id,$keyboard,$message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function deleteM($chatId,$message_id){
    global $website;
    $url = $website."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
    file_get_contents($url);
}


function edit_message($chatId,$message,$message_id_1) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML&disable_web_page_preview=True";
	file_get_contents($url);
}



//============FOR EACH==============//
foreach (glob("functions/*.php") as $filename) {
    require_once $filename;
}

foreach (glob("tools/*.php") as $filename) {
    require_once $filename;
}

foreach (glob("gates/*.php") as $filename) {
    require_once $filename;
}

foreach (glob("class/*.php") as $filename) {
    require_once $filename;
}

foreach (glob("database/*.txt") as $filename) {
    require_once $filename;
}

foreach (glob("admin/*.php") as $filename) {
    require_once $filename;
}

foreach (glob("bincache/*.txt") as $filename) {
    require_once $filename;
}



