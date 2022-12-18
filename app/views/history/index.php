<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container content-container py-5">
    <div class="row">
        <h1>Orders</h1>
    </div>
    <?php if (empty($data['orders'])) { ?>
        <div class="alert alert-danger" role="alert">
            No orders
        </div>
    <?php } else { ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['orders'] as $product) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td><?= $product['total'] ?></td>
                    <td>
                        <?php if ($product['status'] == 'pending') { ?>
                            <span class="badge bg-warning">Pending</span>
                        <?php } else if ($product['status'] == 'completed') { ?>
                            <span class="badge bg-success">Completed</span>
                        <?php } else if ($product['status'] == 'declined') { ?>
                            <span class="badge bg-danger">Declined</span>
                        <?php } ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php } ?>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>