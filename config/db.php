<?php

 //Инициализация подключения к БД
 

function db() {
    
    $dblocation = "127.0.0.1";
    $dbname = 'shop';
    $dbuser = 'root';
    $dbpasswd = '';

//соединяемся с БД
    $db =  new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    if (!$db) {
        echo "Ошибка доступа к MySql";
        exit();
    }

// Устанавливаем кодировку по умолчанию для текущего соединения.
    $db->set_charset( 'utf8');
    if ($db->connect_errno) {
        echo "Ошибка джоступа к базе данных: {$dbname}";
        exit();
    }
    return $db;
}