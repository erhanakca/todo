<?php
require_once 'database.php';

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])
    && isset($_POST['password'])) {
    $donus = $database->prepare("INSERT INTO users (name, surname, email, password)
    VALUES (?,?,?,?)");
        $uygula = $donus->execute([
            $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']
        ]);
}

header('Location: login.php');
die();

