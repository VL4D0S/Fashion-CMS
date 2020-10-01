<?php

function showGetProducts(char $param) 
{
    //mysql connect
    require_once($_SERVER['DOCUMENT_ROOT'] . "/mysql_connect.php");

    $sql = 'SELECT * FROM `products` ORDER BY `id` LIMIT 9 WHERE ? = 1';
    $query = mysqlConnect()->prepare($sql);
    $query->execute([$param]);
}

