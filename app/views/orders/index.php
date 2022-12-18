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
                <th scope="col">User</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['orders'] as $order) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $order['username'] ?></td>
                    <td><?= $order['name'] ?></td>
                    <td><?= $order['quantity'] ?></td>
                    <td><?= $order['total'] ?></td>
                    <td>
                        <?php if ($order['status'] == 'pending') { ?>
                            <span class="badge bg-warning">Pending</span>
                        <?php } else if ($order['status'] == 'completed') { ?>
                            <span class="badge bg-success">Completed</span>
                        <?php } else if ($order['status'] == 'declined') { ?>
                            <span class="badge bg-danger">Declined</span>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="<?= BASE_URL ?>/orders/serve/<?= $order['order_id'] ?>" class="btn btn-success">
                            <i class="fas fa-check"></i>
                        </a>
                        <a href="<?= BASE_URL ?>/orders/decline/<?= $order['order_id'] ?>" class="btn btn-danger">
                            <i class="fas fa-times"></i>
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