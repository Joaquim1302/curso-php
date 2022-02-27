<?php

$dados = [
    ["Nome", "Sexo", "País",],
    ["Joaquim", "M", "Brasil",],
    ["João", "M", "Portugal",],
    ["Cecilia", "F", "Brasil",],
    ["Ana", "F", "Portugal",],
];

$f = fopen('dados.csv','w');
foreach($dados as $linha){
    fputcsv($f, $linha, ";");
}
fclose($f);