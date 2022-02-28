<?php
define('MYSQL_HOST',        'localhost');
define('MYSQL_DATABASE',    'loja');
define('MYSQL_USER',        'joaquimGitHUB');
define('MYSQL_PASS',        'joaquim1234');

define('MYSQL_1', [
    'db_host' => MYSQL_HOST,
    'db_name' => MYSQL_DATABASE,
    'db_user' => MYSQL_USER,
    'db_pass' => MYSQL_PASS,
]);

// encriptação
define("AES_KEY","lLHVsMNPdB2OfSfcKwe7PABATcsoAIpQ");
define("AES_IV","VbWsM9SXLhnuAdGG");

function aesEncript($valor)
{

    return bin2hex(openssl_encrypt($valor, 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV));

}
 
114 11:50