<?php
$vezes = 10;
$min = 0;
$max = 100;

//verifica argumentos
if ($argc == 2){
    $vezes = $argv[1];
} elseif ($argc == 4){
    $vezes = $argv[1];
    $min = $argv[2];    
    $max = $argv[3];
}
$fName = time() . '.txt';
$file = fopen($fName,'w');
for($i = 0; $i < $vezes; $i++){
    fwrite($file, rand($min, $max) . PHP_EOL);
}
fclose($file);

$file = fopen($fName,"r");
while(feof($file) == false){
    echo fgets($file);
}
fclose($file);
