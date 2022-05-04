<?php

/**
 * в local есть папки cli и cron, если будешь делать такие скрипты, лучше их туда добавляй. Да и вообще, если будешь на каком-то другом проекте делать, то в local создавай папку cli и туда все такие скрипты закидывай, чтобы более структурированно все было
 */

// шапка файла ,чтобы  норм выполнялся скрипт CLI, запускаемый не через веб-gui:

$sapi_type = php_sapi_name();

if (substr($sapi_type, 0, 3) != 'cli') {
    echo 'access denied';
    die();
}

$_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__)."/../../..");
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS",true);
define('BX_NO_ACCELERATOR_RESET', true);
define('CHK_EVENT', true);
define('BX_WITH_ON_AFTER_EPILOG', true);

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

// code...

// эпилог не обязателен