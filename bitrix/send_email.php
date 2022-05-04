<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

/**
 * MESSAGE_ID - ID шаблона, к которому привязано событие
 * C_FIELDS - не обязательно. если указать, то заменят значения из настроек сайта, шаблона, и события
 *
 * событие должно отразиться в таблице b_event:
 * - если оно там есть , но SUCCESS_EXEC = N, то сервер не отправляет письма, проверить php mail();
 */
\Bitrix\Main\Mail\Event::send([
    'EVENT_NAME' => 'SUBSCRIBE_ORDER_COPY',
    'MESSAGE_ID' => 123,
    'LID' => 's1',
//    'C_FIELDS' => [
//        'EMAIL' => 'v.balabanov@ddemo.ru',
//        'LINK' => '/nolink',
//        'DEFAULT_EMAIL_FROM' => 'test@test.ru',
//        'SITE_NAME' => 'test_name',
//        'SERVER_NAME' => 'test_server'
//    ]
]);
//mail('v.balabanov@ddemo.ru', 'frerfe', 'gfreg5e');
echo 'sent';