<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Add Product</h1>
        </div>
    </div>
    <div>
        <form action="<?= BASE_URL ?>/product/add" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>