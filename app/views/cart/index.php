<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container content-container py-5">
    <div class="row">
        <h1>Cart</h1>
    </div>
    <?php if (empty($data['cart'])) { ?>
        <div class="alert alert-danger" role="alert">
            Cart is empty
        </div>
    <?php } else { ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['cart'] as $product) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['quantity'] * $product['price'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/cart/checkout/<?= $product['product_id'] ?>" class="btn btn-success">
                            <i class="fas fa-check"></i>
                        </a>
                        <a href="<?= BASE_URL ?>/cart/delete/<?= $product['product_id'] ?>" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php } ?>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>