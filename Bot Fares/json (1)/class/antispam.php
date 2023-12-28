<?php

$userId = $user_id;


$timestampFile = 'database/timestamps.json';

function isSpamming($userId) {
    global $timestampFile;

    $currentTime = time();

    $timestamps = [];
    if (file_exists($timestampFile)) {
        $timestamps = json_decode(file_get_contents($timestampFile), true);
    }

    if (isset($timestamps[$userId]) && ($currentTime - $timestamps[$userId] < getAntiSpamDuration($userId))) {
      
        $timeToWait = getAntiSpamDuration($userId) - ($currentTime - $timestamps[$userId]);

        return $timeToWait;
    }

    $timestamps[$userId] = $currentTime;


file_put_contents($timestampFile, json_encode($timestamps));

    return false;
}

function getAntiSpamDuration($userId) {

    if (in_array($userId, file('database/owner.txt', FILE_IGNORE_NEW_LINES))) {
        return 10; 
    }

    $paidData = file_get_contents('database/paid.txt');
    $pattern = "/User ID: $userId\nRank: (.+)\n/";
    if (preg_match($pattern, $paidData, $matches)) {   
      $userId = $matches[1];
      return 30; 
    }


    return 60;
}

// Example usage:
/*$userId = 123456; 
$spamResult = isSpamming($userId);
if ($spamResult !== false) {
    echo "Don't rush, wait $spamResult seconds before checking again.";
} else {
    // Process the message normally
    echo "Message accepted.";
}*/

