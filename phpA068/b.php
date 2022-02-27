<?php 
    if(!isset($_GET['a'])){
        header('Location: a.php');
    }
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
    <h3>Página B</h3>   
    <?php
    $nome = htmlspecialchars(isset($_GET['nome']) ? $_GET['nome'] : "");
    $sobreNome = htmlspecialchars(isset($_GET['sobreNome']) ? $_GET['sobreNome'] : "");
    ?>
    <p><?= $nome . ' ' . $sobreNome ?></p>
    <a href="a.php">Ir para página A</a>
</body>
</html>