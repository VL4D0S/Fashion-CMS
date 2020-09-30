<?php

/**
 * Функция возвращает объект PDO подключения
 * @return object объект PDO подключения
 */
function mysqlConnect()
{
    $user = 'root';
    $password = '';
    $db = 'fashion';
    $host = 'localhost';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $db;

    static $pdo = null;

    if (!$pdo) {
        try {
            $pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $error) {
            echo 'Подключение не удалось: ' . $error->getMessage();
        }
    }

    return $pdo;
}
