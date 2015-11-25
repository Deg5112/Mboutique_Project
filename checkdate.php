<?php
$today = date("m.d");

$stylesheet = 'css/style.css';
switch($today){

    case '07.04':
        $stylesheet = 'css/july4th.css';
        break;
    case '12.25':
        $stylesheet = 'css/christmas.css';
        break;
    case '01.01':
        $stylesheet = 'css/newyears.css';
        break;
}

print("<link rel='stylesheet' href='{$stylesheet}'>");

?>

<!--<link rel='stylesheet' href='css/style.css'>-->
