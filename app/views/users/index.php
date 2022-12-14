<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>

<div class="container content-container py-5">
    <div class="row">
        <h1>Users</h1>
    </div>
    <?php if (empty($data['users'])) { ?>
        <div class="alert alert-danger" role="alert">
            Cart is empty
        </div>
    <?php } else { ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($data['users'])) { ?>
                <tr>
                    <td colspan="5" class="text-center">Data tidak ditemukan</td>
                </tr>
            <?php } else { ?>
            <?php $i = 1; ?>
            <?php foreach ($data['users'] as $user) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['telephone'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/users/delete/<?= $user['user_id'] ?>" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>