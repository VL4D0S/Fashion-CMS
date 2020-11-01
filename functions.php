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

    if (is_null($pdo)) {
        try {
            $pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $error) {
            echo 'Подключение не удалось: ' . $error->getMessage();
        }
    }

    return $pdo;
}

/**
 * Функция для действия (сортировки/установки порядка) над товарами
 * @return string значение сортировки/установки порядка над товарами
 * @param string $act действие, которое будет применяться к товарам
 * @param string $postVal значение массива $_POST для передаваемого действия
 * @param array $arrVals массив допустимых значений для передаваемого действия
 * @param string $defaultAct значение по умолчанию для передаваемого действия
 */
function actionOnProducts(string $act, string $postVal, array $arrVals, string $defaultAct): string
{
    if ($postVal !== "null") {
        $key = array_search($postVal, $arrVals);

        if (is_int($key)) {
            $_SESSION[$act] = $arrVals[$key];
            $actionVal = $_SESSION[$act];
        } else {
            unset($_SESSION[$act]);
            $actionVal = $defaultAct;
        }

        $_SESSION['uri'] = $_SERVER['REQUEST_URI'];

        return $actionVal;
    } else {
        if (isset($_SESSION[$act])) {
            if (isset($_SESSION['uri']) && $_SERVER['REQUEST_URI'] !== $_SESSION['uri']) {
                unset($_SESSION[$act]);
                $actionVal = $defaultAct;
            } else {
                $actionVal = $_SESSION[$act];
            }
        } else {
            $actionVal = $defaultAct;
        }
        return $actionVal;
    }
}