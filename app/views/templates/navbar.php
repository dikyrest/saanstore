<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?= BASE_URL ?>/public/images/saanstore wm.png" alt="..." height="36">
            Saan Store
        </a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="<?= BASE_URL ?>/#home">Home</a>
                <a class="nav-link" href="<?= BASE_URL ?>/#about">About</a>
                <a class="nav-link" href="<?= BASE_URL ?>/#product">Products</a>
                <a class="nav-link" href="<?= BASE_URL ?>/#contact">Contact</a>
            </div>
        </div>
        <?php if (isset($_SESSION['username'])) { ?>
            <?php if ($_SESSION['isAdmin']) { ?>
                <div class="d-flex">
                    <a href="<?= BASE_URL ?>/product" class="btn btn-outline-light me-2">Products</a>
                </div>
                <div class="d-flex">
                    <a href="<?= BASE_URL ?>/orders" class="btn btn-outline-light me-2">Orders</a>
                </div>
                <div class="d-flex">
                    <a href="<?= BASE_URL ?>/users" class="btn btn-outline-light me-2">Users</a>
                </div>
            <?php } else { ?>
                <div class="d-flex">
                    <a href="<?= BASE_URL ?>/cart" class="btn btn-outline-light me-2">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge bg-danger rounded-pill"><?= $data['cartnum'] ?></span>
                    </a>
                </div>
                <div class="d-flex">
                    <a href="<?= BASE_URL ?>/history" class="btn btn-outline-light me-2">Orders</a>
                </div>
            <?php } ?>
            <div class="d-flex">
                <a href="<?= BASE_URL ?>/logout" class="btn btn-outline-light">Logout</a>
            </div>
        <?php } else { ?>
            <div class="d-flex">
                <a href="<?= BASE_URL ?>/login" class="btn btn-outline-light">Login</a>
            </div>
        <?php } ?>
    </div>
</nav>