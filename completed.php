<?php

require 'database.php';

$task_id = (int)$_GET['id'];



$getir = $database->query("SELECT * FROM tasks WHERE " . $task_id)->fetch(PDO::FETCH_ASSOC);

if ($getir['status'] == true){

    $sorgu = $database->query("UPDATE tasks SET status = false WHERE id= " . $task_id);

}

else{

    $sorgu = $database->query("UPDATE tasks SET status = true WHERE id= " . $task_id);

}
header('Location: todo.php');

die();

