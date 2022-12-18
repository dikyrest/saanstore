<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container content-container py-5">
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error'] ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <h1>Register</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card form">
                <div class="card-body text-center">
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
                            <label for="repassword" class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control" id="repassword" name="repassword">
                        </div>
                        <button type="submit" class="btn btn-outline-dark submit-button">Submit</button>
                        <div class="mt-3">
                            <p>Already have an account? <a href="<?=BASE_URL?>/login">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>