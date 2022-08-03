<?php

require 'database.php';

session_start();

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
        <div class="col-6">
            <form method="POST" action="task_add.php">
                <div class="input-group">
                    <input type="text" name="name" class="form-control">
                    <button class="btn btn-primary" type="submit">Ekle</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="input-group">

                <button class="btn btn-danger" type="button">Delete</button>
                <button class="btn btn-success" type="button">Düzenle</button>
                <button class="btn btn-info" type="button">Yapıldı</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-1">
            <button class="btn btn-danger mt-5" type="button">Hepsini Temizle</button>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</body>
</html>
