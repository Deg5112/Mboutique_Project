<?php
function makeNav(){
    $arr = [
        'welcome' => ['text'=>'Welcome', 'url'=>'welcome.php'],
        'Our Macarons' => ['text'=> 'Our Macarons', 'url'=>'macarons.php'],
        'Gifts & Parties' => ['text'=>'Gifts & Parties', 'url' => 'gifts.php'],
        'Contact' => ['text' => 'Contact', 'url' => 'contact.php'],
    ];
    foreach($arr as $k=>$v){
        $address = '?url='.$v['url'];
        print("<li><a href=$address>".$v['text']."</a></li>");
    }
}


?>


