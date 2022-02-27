<?php
$vals = ['0','1','2','3','4','5','6','7','8','9','10',];
$res = array_filter($vals,'impares');
print_r($res);

$res = array_filter($vals,'pares');
print_r($res);

$res = array_filter($vals,'multiplo_cinco');
print_r($res);

function impares($val){
    return $val % 2 != 0;
}

function pares($val){
    return $val % 2 == 0;
}

function multiplo_cinco($val){
    return $val % 5 == 0;
}

print_r(array_map('aoQuadrado', $vals));

function aoQuadrado($val){
    return $val * $val;
}