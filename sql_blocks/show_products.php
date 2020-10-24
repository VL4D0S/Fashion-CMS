<?php

if (isset($_POST['sort'])) {
    //$sorts = ["price", "name"]; //available values
    // $sortKey = array_search($_POST['sort'], $sorts);
    // $sortBy = $sorts[$sortKey];
    // if ($sortKey) {
    //     $_SESSION['sort'] = $_POST['sort'];
    //     $sort = $_SESSION['sort'];
    // } else {
    //     unset($_SESSION['sort']);
    //     $sort = "id";
    // }
    $_SESSION['sort'] = $_POST['sort'];
    $sort = $_SESSION['sort'];
} else {
    if (isset($_SESSION['sort'])) {
        $sort = $_SESSION['sort'];
    } else {
        $sort = "id";
    }
}

if (isset($_POST['order'])) {
    $_SESSION['order'] = $_POST['order'];
    $order = $_SESSION['order'];
} else {
    if (isset($_SESSION['order'])) {
        $order = $_SESSION['order'];
    } else {
        $order = "ASC";
    }
}

//mysql connect
require_once($_SERVER['DOCUMENT_ROOT'] . "/mysql_connect.php");

// $sorts = ["id", "name", "price"]; //available values
// $sortKey = array_search($sort, $sorts);
// $sortBy = $sorts[$sortKey];
// echo $sortBy;

if (!isset($_GET['cat1']) && !isset($_GET['cat2'])) {
    $sql = "SELECT * FROM `products` ORDER BY `".$sort."` ".$order." LIMIT 12";

    $query = mysqlConnect()->prepare($sql);
    $query->execute();
} elseif (isset($_GET['cat1']) && (($_GET['cat1'] == "new") || ($_GET['cat1'] == "sale"))) {
    if (isset($_GET['cat2']) && (($_GET['cat2'] == "girl") || ($_GET['cat2'] == "man") ||
        ($_GET['cat2'] == "child") || ($_GET['cat2'] == "acces"))) {
        $sql = "SELECT * FROM `products` WHERE `cat1` IN ('new_sale', ?) AND `cat2` = ? ORDER BY `".$sort."` ".$order." LIMIT 12";

        $query = mysqlConnect()->prepare($sql);
        $query->execute([$_GET['cat1'], $_GET['cat2']]);
    } else {
        $sql = "SELECT * FROM `products` WHERE `cat1` IN ('new_sale', ?) ORDER BY `".$sort."` ".$order." LIMIT 12";

        $query = mysqlConnect()->prepare($sql);
        $query->execute([$_GET['cat1']]);
    }
} elseif (isset($_GET['cat2']) && (($_GET['cat2'] == "girl") || ($_GET['cat2'] == "man") ||
          ($_GET['cat2'] == "child") || ($_GET['cat2'] == "acces"))) {
    $sql = "SELECT * FROM `products` WHERE `cat2` = ? ORDER BY `".$sort."` ".$order." LIMIT 12";

    $query = mysqlConnect()->prepare($sql);
    $query->execute([$_GET['cat2']]);
}

//products count
if (isset($query)) {
    $products = $query->fetchAll(PDO::FETCH_OBJ);

    $productsCount = count($products);
}
