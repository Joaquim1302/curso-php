<?php

$dataNascimento = $_POST['dataNascimento'];

$valores = explode(" ", $dataNascimento);

echo "Nascimento: $valores[0]<br> Hora: $valores[1]<br>";