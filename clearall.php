<?php

require 'database.php';

$database->exec("DELETE FROM tasks WHERE id");

header('Location: todo.php');

die();

