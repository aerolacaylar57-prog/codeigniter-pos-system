<?= view('templates/header', ['title' => 'Customer Accounts']) ?>

<h1>Customer Accounts</h1>

<p>List of registered customer records:</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Address</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['id']) ?></td>
                <td><?= esc($customer['name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
                <td><?= esc($customer['address']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>