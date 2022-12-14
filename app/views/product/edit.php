<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container content-container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Product</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5">
            <img src="<?= BASE_URL ?>/<?= $data['product']['image'] ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card form">
                <div class="card-body text-center">
                    <form action="<?= BASE_URL ?>/product/update/<?= $data['product']['product_id'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $data['product']['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="<?= $data['product']['price'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category">
                                <option value="lip" <?= $data['product']['category'] == 'lip' ? 'selected' : '' ?>>Lip</option>
                                <option value="facewash" <?= $data['product']['category'] == 'face' ? 'selected' : '' ?>>Face</option>
                                <option value="moisturizer" <?= $data['product']['category'] == 'moixturizer' ? 'selected' : '' ?>>Moisturizer</option>
                                <option value="sunscreen" <?= $data['product']['category'] == 'sunscreen' ? 'selected' : '' ?>>Sunscreen</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?= $data['product']['name'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
                        </div>
                        <button type="submit" class="btn btn-outline-dark submit-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>