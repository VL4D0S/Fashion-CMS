<?php
if (isset($_POST['sort'])) {
    $sorts = ["price", "name"]; //available values
    $sortKey = array_search($_POST['sort'], $sorts);

    if (is_int($sortKey)) {
        $_SESSION['sort'] = $sorts[$sortKey];
        $sort = $_SESSION['sort'];
    } else {
        unset($_SESSION['sort']);
        $sort = "id";
    }
    
    $_SESSION['uri'] = $_SERVER['REQUEST_URI'];
} else {
    if (isset($_SESSION['sort'])) {
        if (isset($_SESSION['uri']) && $_SERVER['REQUEST_URI'] !== $_SESSION['uri']) {
            unset($_SESSION['sort']);
            $sort = "id";
        } else {
            $sort = $_SESSION['sort'];
        }
    } else {
        $sort = "id";
    }
}

if (isset($_POST['order'])) {
    $orders = ["ASC", "DESC"]; //available values
    $orderKey = array_search($_POST['order'], $orders);

    if (is_int($orderKey)) {
        $_SESSION['order'] = $orders[$orderKey];
        $order = $_SESSION['order'];
    } else {
        unset($_SESSION['order']);
        $order = "ASC";
    }

    $_SESSION['uri'] = $_SERVER['REQUEST_URI'];
} else {
    if (isset($_SESSION['order'])) {
        if (isset($_SESSION['uri']) && $_SERVER['REQUEST_URI'] !== $_SESSION['uri']) {
            unset($_SESSION['order']);
            $order = "ASC";
        } else {
            $order = $_SESSION['order'];
        }
    } else {
        $order = "ASC";
    }
}

// function sortingProducts(string $postVal, array $arr, )