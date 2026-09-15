<?= view('templates/header', ['title' => 'User Accounts']) ?>

<h1>User Accounts</h1>

<p>User records retrieved from the MySQL database:</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
        </tr>
    </thead>

    <tbody>
        <?php if (! empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No user records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>