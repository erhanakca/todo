<?php

require 'database.php';

session_start();

$user_id = (int)$_SESSION['id'];

$tasks = $database ->query("SELECT * FROM tasks WHERE user_id=".$user_id)->fetchAll(PDO::FETCH_ASSOC);

?>

<<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>to-do list</title>
</head>

<body class="arkaplanresim">


<?php if ($_SESSION['email'] || $_SESSION['password']): ?>
    <div class="container justify-content-end p-1 pb-5">
        <div class="row justify-content-end">
            <div class="col-3">
                <h3 style="text-align: center">Hoşgeldin <?php echo mb_convert_case($_SESSION['name'] . ' ' . $_SESSION['surname'], MB_CASE_TITLE, "UTF-8")?></h3>
                <h3 style="text-align: center"><a class="btn btn-sm btn-danger " href="logout.php">Çıkış yap</a></h3>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($_SESSION['email'] || $_SESSION['password']): ?>
<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 offset-lg-0 col-12 offset-0">
            <form method="POST" action="task_add.php">
                <div class="input-group">
                    <input type="text" name="name" class="form-control">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="container justify-content-center">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                <?php foreach ($tasks as $item): ?>
                    <div class="alert alert-info d-flex justify-content-between">
                        <div class="w-auto">
                            <div class="fs-4"><?=$item['name']?></div>
                        </div>
                        <div class="w-auto">
                            <a href="delete.php" class="btn btn-sm btn-danger">Delete</a>
                            <a href="edit.php" class="btn btn-sm btn-info">Edit</a>
                            <a href="completed.php" class="btn btn-sm btn-secondary">Completed</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-1">
            <a href="clearall.php"><button class="btn btn-danger mt-3" type="button">Clear All</button></a>
        </div>
    </div>
</div>

<?php else: ?>

<div class="container justify-content-end p-1 pb-5">
    <form class="form-inline giris" method="POST" action="login.php?id=<?=$_SESSION['id']?>">
        <div class="row justify-content-end">
            <div class="col-3">
                <input type="text" name="email" class="form-control" placeholder="E-Posta">
            </div>
            <div class="col-3">
                <input type="password" name="password" class="form-control" placeholder="Şifre">
            </div>
            <div class="col-2">
                <button class="btn btn-warning" type="submit">
                    Giriş Yap
                </button>
            </div>
        </div>
    </form>
</div>

<?php endif; ?>

<script src="https://kit.fontawesome.com/dcd8b6ca00.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</body>
</html>
