<?php
    $nome = "Joaquim";
    $sobrenome = "Marques";
    $valores = [ 
        10 => 1,
        20 => 2,
        30 => 3
    ];
    $valores[] = 4;
    array_push($valores, 500);
    $dados = [
        'nome' => 'Joaquim',
        'e-mail' => 'Joaquim@engeweb.com.BR',
    ];
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Meu nome é:</h2>   
    <h1><?= "$nome $sobrenome" ?></h1><br>
    <p><?=  $nome . " " . $sobrenome . ", tem: " . mb_strlen("$nome $sobrenome") . " caractéres"?></p>
    <p><?= "Meu nome é " . strtoupper($nome) . " e meu sobrenome é " . strtoupper($sobrenome) . "."?></p>
    <p><?= "valores[10]= " . $valores[10]?></p>
    <p><?= "valores[31]= " . $valores[31]?></p>
    <p><?= "valores[32]= " . $valores[32]?></p>
    <p><?= "Meu nome é " . strtoupper($dados['nome']) . " e meu e-mail é " . strtolower($dados['e-mail']) . "."?></p>
    <br>
    <p>Operaror ternário</p>
    <?php
        $numero = 5; 
    ?>
    <h2 style="color:  <?= $numero >= 0 ? 'blue' : 'red'?>" >Número: <?= $numero ?> </h2>
    <p>Repetição</p>
    <?php
        for($i = 1, $j = 10; $i < 10; $i++, $j--) {
            echo '[' . $i . ', ' . $j . ']' . '<br>';
        };
        $nomes = ['Quim','Cecilia','Rose','Joaquim','Fê'];
        for($i = 0; $i < sizeof($nomes); $i++) {
            echo $nomes[$i] . ' - ';
        };
        $capitais = [
            'Portugal' => 'Lisboa',
            'Brasil' => 'Brasília',
            'Espanha' => 'Madri',
            'Itália' => 'Roma',
            'Perú' => 'Lima'
        ];
        echo '<br>';
        foreach($capitais as $key => $value){
            echo "A capital de $key é $value <br>";
        };
    ?>
</body>
</html>

