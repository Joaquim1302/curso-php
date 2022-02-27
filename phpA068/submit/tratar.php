<?php
// verificar se é um  post
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso negado.');
}

// verificar se existe usuário e senha
if(!isset($_POST['usuario']) || !isset($_POST['senha'])){
    header('Location: index.html');   
}

$usuario = mb_strtoupper($_POST['usuario']);
$senha = $_POST['senha'];

if($usuario != "JOAQUIM" || $senha != "SiopemA#2"){
    echo "Login inválido!";
    exit();
}

if(!isset($_POST['check_aceitar'])){ // se não for ativada nem aparece no post
    echo "Por favor ative a opção de aceitação das condições;";
    exit();
}

echo "Seja bem-vindo Sr. $usuario";
// no Firefox
// menu do mouse / Inspecionar (Q)
// Rede
// Refresh
// Clicar no POST - tratar.php / requisição

echo "<br><br>";
echo "<a href='../indexRadioButtons.html'>Escolha o seu filme favorito</a>";

echo "<br>";
echo "<a href='../indexCheckBoxes.html'>Escolha suas bebidas favoritas</a>";

echo "<br>";
echo "<a href='../indexCxDatas.html'>Form datas</a>";

