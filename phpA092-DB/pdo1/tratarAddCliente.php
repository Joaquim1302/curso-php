<?php

require_once './config.php';

if(isset($_POST['nome'])){
    $nome = ucfirst( mb_strtolower($_POST['nome']));
    $sqlDB =  new PDO(
        "mysql:host=" . MYSQL_HOST . ";" .
        "dbname=" . MYSQL_DATABASE . ";charset=utf8",
        MYSQL_USER,
        MYSQL_PASS
    );
    
    // para evitar SQL Injection
    //$sqlCmd  = $sqlDB->prepare("INSERT INTO clientes VALUES(0, ?)"); //péssimo para tabela com vários campos VALUES(0, ?,?,?,...,?)
    //$sqlCmd->execute([$nome]);

    // melhor:
    $sqlCmd  = $sqlDB->prepare("INSERT INTO clientes VALUES(0, :nome)");
    $sqlCmd->execute(
        [
            ':nome' => $nome 
        ]
    );
       
} 

header('Location: index.php'); 

