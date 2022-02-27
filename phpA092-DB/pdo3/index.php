 <?php
 
 require_once('../lib/EasyPDO.php');

/// namespace\class

use EasyPDO\EasyPDO;

$gestor = new EasyPDO();

$clientes = $gestor->select('SELECT * FROM clientes;');

echo '<pre>';
print_r($clientes);