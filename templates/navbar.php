<?php require_once 'config/config.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Saanstore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (isset($_SESSION['username'])) { ?>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
          <a class="nav-link" href="<?= BASE_URL ?>home.php">Home</a>
          <a class="nav-link" href="<?= BASE_URL ?>about.php">About</a>
          <a class="nav-link" href="<?= BASE_URL ?>products.php">Products</a>
          <a class="nav-link" href="<?= BASE_URL ?>contact.php">Contact</a>
        </div>
    </div>
    <?php if ($_SESSION['isAdmin']) { ?>
    <div class="d-flex">
      <a href="<?= BASE_URL ?>product_admin.php" class="btn btn-outline-light me-2">Add Product</a>
    </div>
    <?php } else { ?>
    <div class="d-flex">
      <a href="<?= BASE_URL ?>cart.php" class="btn btn-outline-light me-2">
        <i class="fas fa-shopping-cart"></i>
        <span class="badge bg-danger rounded-pill">0</span>
      </a>
    </div>
    <?php } ?>
    <div class="d-flex">
      <a href="<?= BASE_URL ?>logout.php" class="btn btn-outline-light">Logout</a>
    </div>
    <?php } else { ?>
    <div class="d-flex">
      <a href="<?= BASE_URL ?>login.php" class="btn btn-outline-light">Login</a>
    </div>
    <?php } ?>
  </div>
</nav>