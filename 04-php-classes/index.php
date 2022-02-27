<?php
class Humano
{
    private $nome;
    private $sobrenome;

    function __construct($n, $s)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    public function nomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }
}
$homem = new Humano('João', 'Ribeiro');
$mulher = new Humano('Ana', 'Martins');

echo $homem->nomeCompleto();
echo '<br>';
echo $mulher->nomeCompleto();

echo '<hr> overriding  e overriding parent';
class Retangulo
{
    public $largura, $altura;

    function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }
    function calcArea()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo
{
    function __construct($l)
    {
        $this->largura = $l;
        $this->altura = $l;
    }
}

class Quadrado2 extends Retangulo
{
    function __construct($l)
    {
        parent::__construct($l, $l);
    }
}

$ret = new Retangulo(10, 20);
$qua = new Quadrado(10);
$qua2 = new Quadrado2(20);

echo "<br> A ret: " . $ret->calcArea();
echo "<br> A qua: " .  $qua->calcArea();
echo "<br> A qua2: " .  $qua2->calcArea();

echo '<hr> object access';
class Humano2
{
    private $nome = 'x';

    function setPrivate($objeto, $valor)
    {
        $objeto->nome = $valor;
    }

    function apresentar()
    {
        echo $this->nome;
    }
}
$a = new Humano2();
$b = new Humano2();
$a->setPrivate($b, 'Joaquim');
echo '<br>';
$a->apresentar();
echo '<br>';
$b->apresentar();

echo '<hr> access level';
class Tempo
{
    private $seg;

    function setSeg($s)
    {
        if (!is_numeric($s) || $s < 0) {
            $this->seg = 0;
        } else {
            $this->seg = $s;
        }
    }

    function getMin()
    {
        return $this->seg / 60;
    }

    function setMin($m)
    {
        if (!is_numeric($m) || $m < 0) {
            $this->seg = 0;
        } else {
            $this->seg = $m * 60;
        }
    }
}

$t = new Tempo;
$t->setSeg(3600);
echo '<br>';
echo $t->getMin() . ' min';

$t->setMin(5);
echo '<br>';
echo $t->getMin() . ' min';

echo '<hr> constantes';
class Circulo
{
    const PI = 3.14;
}
$c = new Circulo();
echo '<br>' . $c::PI;
define('APP_NAME', 'Minha aplicação');
echo '<br>' . APP_NAME;
define('NAMES', ['João', 'Ribeiro', 'Ana', 'Martins',]);
for ($i = 0; $i < 4; $i++) {
    echo '<br>' . NAMES[$i];
}
echo '<hr> constantes mágicas';
echo '<br>line: ' . __LINE__;
echo '<br>file: ' . __FILE__;
function teste()
{
    echo '<br>function Name:' . __FUNCTION__;
}
teste();
class MyClass
{
    function teste2()
    {
        echo '<br>Method: ' . __METHOD__;
        echo '<br>Class: ' . __CLASS__;
    }
}
$a = new MyClass;
$a->teste2();
echo '<br>Name space' . __NAMESPACE__;

echo '<hr> verificação de variáveis';
$a = 1;
if (isset($a)) {
    echo '<br>A variável existe';
} else {
    echo '<br>A variável NÃO existe';
}
echo '<br>';
$b = null;
echo  isset($b) ? 'SIM' : 'NÃO';
unset($b);
