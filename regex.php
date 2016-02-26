<?php

$str = 'Atul !! You are great';
$pattern = "/[a-zA-Z ]*/";

if (preg_match($pattern, $str, $matches)) {
    var_dump($matches);
}
    
/* Difference with javascript:
var str = "The best things in life are free";
var patt = new RegExp("e");
var res = patt.exec(str);
*/