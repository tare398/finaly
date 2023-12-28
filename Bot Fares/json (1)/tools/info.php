<?php

$ownerData = file_get_contents('database/owner.txt');
if (strpos($ownerData, "$userId") !== false) {
    $expiryDate = "UNTIL DEAD"; 
} else {
    $paidData = file_get_contents('database/paid.txt');
    $pattern = "/User ID: $userId\nRank: (.+)\nExpiry Date: (.+)/"; // Corrected pattern
    if (preg_match($pattern, $paidData, $matches)) {
        $expiryDate = $matches[2]; // Use index 2 for the expiry date
    } else {
        $expiryDate = "N/A";
    }
}







if (
    (strpos($message, '/info') === 0) ||
    (strpos($message, '.info') === 0) ||
    ((strpos($message, '$info') === 0) || (strpos($message, '!info') === 0)) ||
    ((strpos($message, '?info') === 0) || (strpos($message, '%info') === 0)) ||
    (strpos($message, '+info') === 0)
) {
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "<b>
[🧧]PROFILE AREA
━━━━━━━━━━━━━━
[↯]NAME: <code>@$username</code>
[↯]ID: <code>$userId</code>
[↯]RANK: <code>$rank</code>
[↯]EXPIRY: <code>$expiryDate</code>
━━━━━━━━━━━━━━
        </b>",
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'html'
    ]);
}
?>
