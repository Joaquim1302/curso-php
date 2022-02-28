<?php

// echo  "<pre>";
// print_r($_POST);
if (($_SERVER['REQUEST_METHOD'] != 'POST') || 
    (!isset($_POST['nome']))){
    die('Acesso inválido');
} else {
    $nome = $_POST['nome'];
}
