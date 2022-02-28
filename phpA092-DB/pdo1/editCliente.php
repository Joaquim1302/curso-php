<?php
//pode ser EasyPDO\EasyPDO(MYSQL_1); sem a declaração use EasyPDO\EasyPDO; acima
if(!isset($_GET['id'])) {
    die('Id inválido');     
} else {
    $id = $_GET['id'];
}    

// le base de dados
require_once('../lib/EasyPDO.php');
require_once('./config.php');

// echo  "<pre>";
// print_r(MYSQL_1);

$db = new EasyPDO\EasyPDO(MYSQL_1);
$cliente = $db->select("SELECT * FROM clientes WHERE id_cliente=:id", [':id' => $id])[0];
// echo  "<pre>";
// print_r($cliente);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editClienteSubmit.php" method="post">
        <input type="hidden" name="id_contato">
        <p><input type="text" name="nome" maxlenght="50" value=<?= $cliente['nome'] ?>></p>
        <p><input type="submit" name="Salvar" value="Salvar"></p>  

    </form>
</body>
</html>