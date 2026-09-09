<?= view('templates/header', ['title' => 'User Accounts']) ?>

<h1>User Accounts</h1>

<p>List of users who can access the POS system:</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['id']) ?></td>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['name']) ?></td>
                <td><?= esc($user['role']) ?></td>
                <td><?= esc($user['status']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>