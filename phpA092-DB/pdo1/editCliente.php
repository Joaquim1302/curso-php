<?php
require_once('../lib/EasyPDO.php');
require_once('./config.php');

// use EasyPDO\EasyPDO;
// pode ser EasyPDO\EasyPDO(MYSQL_1); sem a declaração use EasyPDO\EasyPDO; acima
$db = new EasyPDO\EasyPDO(MYSQL_1);
$db->select('SELECT *')
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
        
    <form action="tratarAddCliente.php" method="post">

        <p><input type="text" name="nome" maxlenght="50"></p>
        <p><input type="submit" name="Salvar" value="Salvar"></p>  

    </form>

</body>

</body>
</html>