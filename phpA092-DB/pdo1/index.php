<?php

require_once './config.php';

// definição da ligação
$gestor =  new PDO(
    "mysql:host=" . MYSQL_HOST . ";" .
    "dbname=" . MYSQL_DATABASE . ";charset=utf8",
    MYSQL_USER,
    MYSQL_PASS
);

$dados = $gestor->query("SELECT * FROM clientes");
$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);
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
    <h3>CLIENTES</h3>
    <hr>
    <table border="1">
        <thead>
            <th>id_cliente</th>
            <th>nome</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente) : ?>

                <tr>
                    <td><?= $cliente['id_cliente'] ?></td>
                    <td><?= $cliente['nome'] ?></td>
                    <td><a href="editCliente.php?id=<?= $cliente['id_cliente']?>">Editar cliente</a></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
    <p>Total de clientes: <strong><?= count($clientes) ?></strong></p>

    <a href="addCliente.html">Adicionar novo cliente</a>  

</body>

</html>