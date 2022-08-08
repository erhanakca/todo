<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto text-justify mt-2"">
        <div class="mb-3">
            <form method="POST" action="user_add.php">
                <div class="mb-4 pt-3">
                    <input type="text" name="name" class="form-control" placeholder="isim">
                </div>
                <div class="mb-4">
                    <input type="text" name="surname" class="form-control" placeholder="soyisim">
                </div>
                <div class="mb-4">
                    <input type="text" name="email" class="form-control" placeholder="e-posta">
                </div>
                <div class="mb-4">
                    <input type="text" name="password" class="form-control" placeholder="şifre gir">
                </div>
                <div class="mb-4">
                    <input type="text" name="password_confirmation" class="form-control" placeholder="şifre tekrarı">
                </div>
                <button type="submit" class="btn btn-warning col-md-5 mx-auto text-justify mt-2 ">Kaydol</button>
            </form>
        </div>
    </div>
</div>
</div>


<?php include 'footer.php'?>
