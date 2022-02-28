<?php
if(!isset($_GET['id'])) { // verufica se valor de id foi enviado
    die('Id inválido');     
} else {
    $id = $_GET['id']; 
}  

require_once('../lib/EasyPDO.php');
require_once('./config.php');
// echo  "<pre>";
// print_r(MYSQL_1);

$id = aesDecript($id);
if ($id == -1 || $id == false){
    die('Acesso inválido!');
}

// le base de dados
//pode ser EasyPDO\EasyPDO(MYSQL_1); sem a declaração use EasyPDO\EasyPDO
$db = new EasyPDO\EasyPDO(MYSQL_1);
$cliente = $db->select("SELECT * FROM clientes WHERE id_cliente=:id", [':id' => $id])[0];
// sem o [0] do final
// Array
// (
//     [0] => Array
//         (
//             [id_cliente] => 4
//             [nome] => Rosemari
//         )

// )
// com o [0] no final, um vez sempre irá retornar um único registro, o índice sempre será = 0
// Array
// (
//     [id_cliente] => 4
//     [nome] => Rosemari
// )

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
        <!-- hidden para enviar código do cliente -->
        <input type="hidden" name="id_cliente" value="<?= aesEncript($cliente['id_cliente']) ?>">
        <p><input type="text" name="nome" maxlenght="50" value=<?= $cliente['nome'] ?>></p>
        <p><input type="submit" name="Salvar" value="Salvar"></p>  

    </form>
</body>
</html>