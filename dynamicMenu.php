<?php
require_once('settings.php');

function makeNav($array){
    foreach($array as $k=>$v){
        $address = '?page='.$k;
        print("<li><a href= '$address' >" . $v['text']. "</a></li>");
    }
}
?>


