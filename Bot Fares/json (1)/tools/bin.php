<?php

$ownerData = file_get_contents('database/owner.txt');
if (strpos($ownerData, "$userId") !== false) {
    $rank = "OWNER"; 
} else {
    $paidData = file_get_contents('database/paid.txt');
    $pattern = "/User ID: $userId\nRank: (.+)\n/";
    if (preg_match($pattern, $paidData, $matches)) {
        $rank = $matches[1];
    } else {
        $rank = "FREE";
    }
}




if((strpos($message, '/bin') === 0) or (strpos($message, '.bin') === 0) or ((strpos($message, '/bin') === 0) or (strpos($message, '!bin') === 0)) or ((strpos($message, '/bin') === 0) or (strpos($message, '#bin') === 0)) or (strpos($message, '?bin') === 0)){
$bin = substr($message, 5, 6);


if (empty($bin)) {
$error = "Wrong format ❌\n
<code>/bin 123456</code>";
  
sendMessage2($chatId,$error,$message_id);
exit();
}


  $fim = json_decode(file_get_contents('https://bins.antipublic.cc/bins/'.$bin), true);
$bin1 = $fim["bin"] ?? null;

    if ($bin1 !== null) {
        $brand = $fim["brand"];
        $country = $fim["country"];
        $country_name = $fim["country_name"];
        $country_flag = $fim["country_flag"];
        $country_currencies = $fim["country_currencies"];
        $bank = $fim["bank"];
        $level = $fim["level"];
        $type = $fim["type"];

if (empty($bin1)){
$response = "<b>● BIN: $bin ❌
● Msg: (Invalid bin length) ⚠️
● Took:<code> {$mytime($starttime)}s</code>
━━━━━━━━━━━━━━━
↳ Checked by: $username $Rank</b> ️";
sendMessage($chatId, $response, $message_id);
exit();
}

if(empty($level)){
    $level = "<code>------</code>";
    $brand = "<code>------</code>";
    $type = "<code>------</code>";
    $bank = "<code>------</code>";
}
sendMessage2($chatId,"
<b>• Bin Lookup
- - - - - - - - - - - - - - - - 
• <i>Bin:</i> <code>$bin</code>
• <i>Type:</i>  $type
• <i>Brand:</i> $brand
• <i>Level:</i> $level
• <i>Bank:</i> $bank
• <i>Country:</i> $country - $currency [$country_flag]
- - - - - - - - - - - - - - -
• Checked by : @$username <b>[$rank]</b>
• Developer : <code>@SWCDL</code></b>",$message_id);
} else {
    // No se encontró información del BIN
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "<b>Invalid bin ❌\nNo information found for Bin:</b> <code>$bin</code>",
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'html'
    ]);
}
}