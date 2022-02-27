<?php
// criar um cookie
if(isset($_COOKIE['visitou_o_site'])){ // super global $_COOKIE

    echo 'Você já visitou meu site na última hora.';

} else {

    setcookie('visitou_o_site', true, time() + 3600); //uma hora de duração. para 1 ano time() + 356*24*3600
    echo 'Primeira visita ao site. Bem-vindo!';
}

echo '<p>cookie criado</p>';

// // remover um cookie
// if(isset($_COOKIE['visitou_o_site'])){ // super global $_COOKIE

//     setcookie('visitou_o_site', null, -1);
//     echo 'cookie eliminado';
// }
// echo '<p></p>';