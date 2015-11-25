<?php
function makeNav(){
    $arr = [
        'welcome' => ['text'=>'Welcome', 'url'=>'welcome.php'],
        'Our Macarons' => ['text'=> 'Our Macarons', 'url'=>'macarons.php'],
        'Gifts & Parties' => ['text'=>'Gifts & Parties', 'url' => 'gifts.php'],
        'Contact' => ['text' => 'contact.php', 'url' => 'contact.php'],
    ];
    foreach($arr as $value){
        print("<li><a href='{$value['url']}'>{$value['text']}</a></li>");
    }
}

?>


