<?php

require 'database.php';

$database->exec("DELETE FROM tasks WHERE user_id");

header('Location: todo.php');

die();

