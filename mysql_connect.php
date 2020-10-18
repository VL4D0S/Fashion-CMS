<?php

/**
 * Функция для подключения к базе данных. Если подключение не удалось, выводит ошибку
 * @return object объект PDO подключения
 */
function mysqlConnect(): object
{
    $user = 'root';
    $password = '';
    $db = 'fashion';
    $host = 'localhost';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $db;

    static $pdo = null;

    if (!isset($pdo)) {
        try {
            $pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $error) {
            echo 'Подключение не удалось: ' . $error->getMessage();
        }
    }

    return $pdo;
}
