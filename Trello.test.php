<?php

require('Trello.class.php');

class TrelloTest extends Trello {


}

$strOrg = 'test';
$strNew = '';
$hash = $hashValue = Trello::hash($strOrg);
Trello::deHash($hash, $strNew);

echo "\nString to hash: " . $strOrg;
echo "\nHash value: " . $hashValue;
echo "\nDeHashed value: " . $strNew;
echo "\n";

// ------

$str = '';
$hash = 25180466553932;
Trello::deHash($hash, $str);
echo "\nThe secret answer is: " . $str;
echo "\n\n";
