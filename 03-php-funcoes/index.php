<?php
function adicao($a, $b)
{
    echo "<br>a =" . $a . ', b = ' . $b;
    echo "<br>a + b = " . ($a + $b);
    echo "<br>";
}
adicao(10, 11);
adicao(10, 8);

$nomes = ['Quim', 'Cecilia', 'Rose', 'Joaquim', 'Fê'];
foreach ($nomes as $nome) {
    saudacao($nome);
}

function saudacao($nome)
{
    echo "Bom dia, " . $nome . '<br>';
}

function multiplic($a = 2, $b = 2)
{ // sempre listar todos os obrigatórios primeiro
    echo "<br>a =" . $a . ', b = ' . $b;
    echo "<br>a . b =" . $a * $b . '<br>';
}
multiplic();
multiplic(10);
multiplic(10, 20);

// com retorno de valores
function adicao2($a, $b)
{
    return ($a + $b);
}
echo "<br>";
echo "<br>a + b = " . adicao2(15, 20);

// função anônima (variável função)
$andar = function($metros)
{
    return "<br>Andei $metros metros.";
}; //indispensável o [;]

echo $andar(100);

// função anônima closure
echo '<hr>';
$x = 20;
$y = 30;
$myClosure = function($z) use($x,$y)
{
    echo "$z - $x - $y";
    $y += 1000; // faz mas não sai do escopo
    echo "<p>$y</p>";
};

$myClosure(10);

echo "<p>$y</p>";

// função anônima arrow
echo '<hr>';
$x = 30;
$y = 40;
$myArrow = fn($z) => "$z - $x - $y";

echo $myArrow(50);

// função geradora
echo '<hr>';
function buscarNomes(){
    yield 'João';
    yield 'Maria';
    yield from ['Carlos','Ana','José','Mário'];
    yield 'Fernando';
}

foreach(buscarNomes() as $nome){
    echo "$nome<br>";
}