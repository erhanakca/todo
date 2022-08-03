<?php

require 'database.php';

session_start();

$users = $database ->query("SELECT * FROM users ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $item){
    if ($_POST['email'] == $item['email'] && $_POST['password'] == $item['password']){
        $_SESSION['email'] = $item['email'];
        $_SESSION['password'] = $item['password'];
        $_SESSION['name'] = $item['name'];
        $_SESSION['surname'] = $item['surname'];
        $_SESSION['id'] = $item['id'];
        break;
    }

}

header("Location: todo.php");

die();


