 <?php

require_once('../lib/EasyPDO.php');
require_once('./config.php');

use EasyPDO\EasyPDO;

$dbLoja = new EasyPDO(MYSQL_1);
$dbTeste = new EasyPDO(MYSQL_2);
$clientesLoja = $dbLoja->select('SELECT * FROM clientes;');
$clientesTeste = $dbTeste->select('SELECT * FROM clientes;');

echo '<pre>';
print_r($clientesLoja);
echo '<hr>';
echo '<pre>';
print_r($clientesTeste);