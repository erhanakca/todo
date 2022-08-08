<?php

require 'database.php';

$id = $_GET['id'];

$database->exec("DELETE FROM tasks WHERE id=" . $id);

header('Location: todo.php');

die();