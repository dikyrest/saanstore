<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Register</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= BASE_URL ?>/register/validate" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="repassword" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="repassword" name="repassword">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>