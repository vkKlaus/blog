<?php
require $_SERVER['DOCUMENT_ROOT'] . '/module/connect.php';

    $res=getTable($pdo, 'themes', '`activ`=1');
    echo json_encode($res,JSON_UNESCAPED_UNICODE);