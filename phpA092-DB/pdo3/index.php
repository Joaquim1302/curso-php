 <?php

require_once('../lib/EasyPDO.php');
require_once('./config.php');

use EasyPDO\EasyPDO;
// pode ser EasyPDO\EasyPDO(MYSQL_1); sem a declaração use EasyPDO\EasyPDO; acima
$dbLoja = new EasyPDO(MYSQL_1);
$dbTeste = new EasyPDO(MYSQL_2);
$bd = new EasyPDO(MYSQL_1); 

// addionar um cliente

$nome_cliente = 'Fê';
$parametros = [
    ':nome' => $nome_cliente
];
echo '<pre>';

$dbLoja->insert("INSERT INTO clientes VALUES(0, :nome)", $parametros);
echo '<pre>';
$clientesLoja = $bd->select('SELECT * FROM clientes');
$clientesTeste = $dbTeste->select('SELECT * FROM clientes');

echo '<pre>';
print_r($clientesLoja);
echo '<hr>';
echo '<pre>';
print_r($clientesTeste);
