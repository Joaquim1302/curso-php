<?php
require_once('../lib/EasyPDO.php');
require_once('./config.php');

// echo  "<pre>";
// print_r(MYSQL_1);

// echo  "<pre>";
// print_r($_POST);

if (($_SERVER['REQUEST_METHOD'] != 'POST') || // verifica se foi enviado por post OU
    (!isset($_POST['id_cliente']))){          // id_cliente foi setado
    die('Acesso inválido');
} else {
    $id_cliente =  aesDecript($_POST['id_cliente']); // decripta o valor de post
}

if ($id_cliente == -1 || $id_cliente == false){     // verifica se o comprimento é par e se foi decriptado corretamente
    die('Acesso inválido!');
}
// echo $id_cliente;
// die();

$novoNome = $_POST['nome']; 

// le base de dados

$db = new EasyPDO\EasyPDO(MYSQL_1); // abre a base de dados

$params = [  // seta os parametros necessários para a query                      
    ':id_cliente' => $id_cliente, 
    ':nome' => $novoNome,
];
// echo  "<pre>";
// print_r($params);

// executa a alteração
$db -> update("UPDATE clientes SET nome = :nome WHERE id_cliente = :id_cliente", $params);

header('Location: index.php'); // manda pra página incial