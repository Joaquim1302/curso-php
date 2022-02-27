<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $dados = [
        ["Nome", "Sexo", "País",],
        ["Joaquim", "M", "Brasil",],
        ["João", "M", "Portugal",],
        ["Cecilia", "F", "Brasil",],
        ["Ana", "F", "Portugal",],
    ];
    ?>

    <table>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                $str = $dados[$i][$j];
                echo (($i == 0) ? "<th>" : "<td>") . $dados[$i][$j] . (($i == 0) ? "</th>" : "</td>");
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>