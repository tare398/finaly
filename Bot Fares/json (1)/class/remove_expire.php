<?php

$paidData = file_get_contents('database/paid.txt');

$currentDate = date('Y-m-d');


$entries = explode("\n\n", $paidData);

$updatedPaidData = '';

// Iterate through each user entry
foreach ($entries as $entry) {
    
    preg_match("/User ID: (\d+)\nRank: (.+)\nExpiry Date: (\d{4}-\d{2}-\d{2})/", $entry, $matches);

    if (count($matches) === 4) {
        $userId = $matches[1];
        $rank = $matches[2];
        $expiryDate = $matches[3];

        
        if (strtotime($currentDate) > strtotime($expiryDate)) {
            
            continue;
        }

    
        $updatedPaidData .= "User ID: $userId\nRank: $rank\nExpiry Date: $expiryDate\n\n";
    }
}

file_put_contents('database/paid.txt', $updatedPaidData);