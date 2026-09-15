<?= view('templates/header', ['title' => 'Customer Accounts']) ?>

<h1>Customer Accounts</h1>

<p>Customer records retrieved from the MySQL database:</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Created At</th>
        </tr>
    </thead>

    <tbody>
        <?php if (! empty($customers)): ?>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['id']) ?></td>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                    <td><?= esc($customer['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No customer records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>