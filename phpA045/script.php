<?php

$datas = [
    '21-10-1998',
    '12-09-1996',
    '01-07-2001',
    '08-12-2005',
    '22-11-1987',
];

foreach($datas as $data){
    $d = DateTime::createFromFormat('d-m-Y', $data);
    $d->add(new DateInterval('P1Y'));
    echo $d->format('d-m-Y') . PHP_EOL;
}

$dataCompra = new DateTime('13-03-2019'); // d-m-Y
$agora = new DateTime();

$intervalo = $dataCompra->diff($agora);
print_r($intervalo);

$brasil = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
$portugal = new DateTime('now', new DateTimeZone('Europe/Lisbon'));
echo $brasil->format('d-m-Y H:i:s') . PHP_EOL;
echo $portugal->format('d-m-Y H:i:s') . PHP_EOL;

echo $brasil->format('d-m-Y H:i:s') . PHP_EOL;
$brasil->modify('+1 minute');
// $brasil->modify('-15 minutes');
// $brasil->modify('+48 hours');
// $brasil->modify('+1 day');
// $brasil->modify('+7 days');
// $brasil->modify('+3 months');
// $brasil->modify('+12 years');
// $brasil->modify('+1 year +6 months');
// $brasil->modify('+1 hour +15 minutes');
// $brasil->modify('-1 hour -15 minutes');

echo $brasil->format('d-m-Y H:i:s') . PHP_EOL;


mostrarIdade('19-03-1964 08:45:00');

function mostrarIdade($nascimento){
    $agora = new DateTime();
    $dataNascimento = new DateTime($nascimento);
    $idade = $dataNascimento->diff($agora);
    echo 'Idade:' . PHP_EOL . $idade->y . ' anos ' . PHP_EOL;
    echo  $idade->m . ' meses ' . PHP_EOL;
    echo  $idade->d . ' dias ' . PHP_EOL;
    echo  $idade->h . ' horas ' . PHP_EOL;
    echo  $idade->i . ' minutos ' . PHP_EOL;
    echo  $idade->s . ' segundos ' . PHP_EOL;
}


