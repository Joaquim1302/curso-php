<?php
$local  = 'da sala';
$totalPessoas = 123;

echo sprintf("Exitem %s pessoas dentro %s", $totalPessoas, $local);
echo sprintf(PHP_EOL . "Capacidade:%'-10d pessoas dentro %s", $totalPessoas, $local);

$valor = 425.756;
echo sprintf(PHP_EOL . "O valor total da compra foi de R$ %01.2f", $valor);

$valores = [
    23.35,
    425.756,
    7.1,
    123,
];
foreach($valores as $valor){
    echo sprintf(PHP_EOL . "%' 30.2f", $valor);    
}
