<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Login</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= BASE_URL ?>/login/validate" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Belum punya akun? <a href="<?=BASE_URL?>/register">Daftar</a></p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>