<?php
$nomes1 = array("a","b","c","d");
$nomes2 = ["a","b","c","d"]; // php 5.4
$nomes3[] = "Joaquim";
$cliente = [
    'nome' => 'Carlos',
    'idade' => '35',
    'profissao' => 'Advogado',
];
$cliente2 = [
    'nome' => 'Edu',
];
print_r($nomes3);
print_r($cliente);
print_r($cliente2);

$nomes = ["Joaquim","Cecilia","Quim","Rose"];
echo count($nomes) . PHP_EOL;
if (is_array($nomes)){
    echo 'É array';
} else {
    echo 'Não é array';
}
$n = null;
echo  PHP_EOL . (int)empty($n) . PHP_EOL;

$nomes[] = 'Croco';
array_push($nomes, 'Fê');
array_unshift($nomes, 'Edu');
array_shift($nomes);
foreach($nomes as $n)
    echo $n . PHP_EOL;
shuffle($nomes);
print_r($nomes);
