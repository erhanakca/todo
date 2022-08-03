<?php

session_start();

require_once 'database.php';

$tasks = $database->prepare("INSERT INTO tasks (user_id, name) VALUES (?,?)");

$donus = $tasks->execute([

    $_SESSION['id']=>'user_id',
    $_POST['name']=>'name'

]);

header('Location: todo.php');

die();

