<?php

// echo  "<pre>";
// print_r($_POST);
if (($_SERVER['REQUEST_METHOD'] != 'POST') || 
    (!isset($_POST['id_cliente']))){
    die('Acesso inválido');
} else {
    $id_cliente = $_POST['id_cliente'];
}
$novoNome = $_POST['nome'];

// le base de dados
require_once('../lib/EasyPDO.php');
require_once('./config.php');

// echo  "<pre>";
// print_r(MYSQL_1);

$db = new EasyPDO\EasyPDO(MYSQL_1);

$params = [
    ':id_cliente' => $id_cliente,
    ':nome' => $novoNome,
];
echo  "<pre>";
print_r($params);

$db -> update("UPDATE clientes SET nome = :nome WHERE id_cliente = :id_cliente", $params);

header('Location: index.php'); 