<?php

session_start();

require 'database.php';

$tasks = $database->prepare("INSERT INTO tasks (user_id, name, status) VALUES (?,?,?)");

$donus = $tasks->execute([

    $_SESSION['id'],
    $_POST['name'],
    true


]);

header('Location: todo.php');

die();

