<?php
require_once('../lib/EasyPDO.php');
require_once('./config.php');

use EasyPDO\EasyPDO;
// pode ser EasyPDO\EasyPDO(MYSQL_1); sem a declaração use EasyPDO\EasyPDO; acima
$dbLoja = new EasyPDO(MYSQL_1);

