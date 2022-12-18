<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container content-container py-5">
    <div class="row">
        <h1>Products</h1>
    </div>
    <?php if (empty($data['products'])) { ?>
        <div class="alert alert-danger" role="alert">
            No products
        </div>
    <?php } else { ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['products'] as $product) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><img src="<?= BASE_URL ?>/<?= $product['image'] ?>" alt="" width="100"></td>
                    <td><?= $product['name'] ?></td>
                    <td>Rp<?= $product['price'] ?></td>
                    <td><?= $product['category'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/product/edit/<?= $product['product_id'] ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= BASE_URL ?>/product/delete/<?= $product['product_id'] ?>" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php } ?>
    <div class="row pt-3">
        <a href="<?= BASE_URL ?>/product/add" class="btn btn-primary">Add Product</a>
    </div>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>