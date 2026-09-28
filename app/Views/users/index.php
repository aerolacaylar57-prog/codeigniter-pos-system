<?= view('templates/header', ['title' => $title]) ?>

<h1>User Accounts</h1>

<p>User records retrieved from the MySQL database:</p>

<a href="<?= site_url('users/new') ?>" class="button">
    Add New User
</a>

<?php if (session('success')): ?>
    <p style="margin-top: 20px; color: green; font-weight: bold;">
        <?= esc(session('success')) ?>
    </p>
<?php endif ?>

<?php if (empty($users)): ?>

    <p>No user records found.</p>

<?php else: ?>

    <table>
        <thead>
            <tr>
                <th>Avatar</th>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>

                <?php
                if (! empty($user['avatar'])) {
                    $avatarUrl = base_url(
                        'uploads/avatars/' . $user['avatar']
                    );
                } else {
                    $avatarUrl = base_url(
                        'images/avatar-placeholder.svg'
                    );
                }
                ?>

                <tr>
                    <td>
                        <img
                            src="<?= esc($avatarUrl) ?>"
                            alt="<?= esc($user['full_name']) ?>"
                            width="60"
                            height="60"
                            style="
                                object-fit: cover;
                                border-radius: 50%;
                            "
                        >
                    </td>

                    <td><?= esc($user['id']) ?></td>

                    <td>
                        <?= esc($user['username']) ?>
                    </td>

                    <td>
                        <?= esc($user['full_name']) ?>
                    </td>

                    <td>
                        <?= esc($user['created_at'] ?? '') ?>
                    </td>

                    <td>
                        <a
                            href="<?= site_url(
                                'users/' . $user['id'] . '/edit'
                            ) ?>"
                            class="button"
                        >
                            Edit
                        </a>
                    </td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>

<?php endif ?>

<?= view('templates/footer') ?>