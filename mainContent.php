<?php
$mainContentUrl = 'welcome.php';
$mainContentArray = [
    'welcome'=> 'welcome.php' ,
    'Our Macarons'=> 'macarons.php' ,
    'Gifts & Parties'=> 'gifts.php' ,
    'Contact'=> 'contact.php' ,
];

$mainContentUrl = $mainContentArray['welcome'];

include($mainContentUrl);




?>