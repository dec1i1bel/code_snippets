<?php
// учебка
// $dbName = 'vbalabanov_study';
// $dbUser = 'study';
// $passwd = '2c06f4d';
// $host = '192.168.122.5';

// radioavionika
// $dbName = 'ravionika_artv';
// $dbUser = 'artv';
// $passwd = 'UKHFQD8yIElf';
// $host = '192.168.122.5';

// coldactflu
// $dbName = 'coldact_coldactflu';
// $dbUser = 'coldactflu';
// $passwd = 'jz4AyvgvgpI6';
// $host = '192.168.122.5';

// локальный пустой битрикс
// $dbName = 'bitrix_sandbox';
// $dbUser = 'root';
// $passwd = '';
// $host = '127.0.0.1';

if (
    isset($dbName) &&
    isset($dbUser) &&
    isset($passwd)
) {
    $q = new mysqli($host,$dbUser,$passwd,$dbName);
    
    $qu = 'SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = "BASE TABLE" AND TABLE_SCHEMA="'.$dbName.'"';
    
    $res = $q->query($qu);
    
    $tables_names = [];
    
    while ($row = $res->fetch_assoc()) {
        $tables_names[] = $row['TABLE_NAME'];
    }
    foreach ($tables_names as $tn) {
        echo 'список таблиц:<br>';
        echo $tn.'<br>';
        echo '--------------<br>';
        // if ((substr($tn,0,2) == 'b_') || $tn == 'test_hl') {
        echo 'удаление таблицы '.$tn.'.......<br>';
        $qu1 = 'drop table '.$tn;
        $q->query($qu1);
        echo 'таблица '.$tn.' удалена<br>';
        // }
    }
} else {
    echo 'не установлены данные базы';
}