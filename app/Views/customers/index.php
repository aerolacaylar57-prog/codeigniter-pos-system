<?= view('templates/header', ['title' => $title]) ?>

<h1>Customer Accounts</h1>

<p>Customer records retrieved from the MySQL database:</p>

<a href="<?= site_url('customers/new') ?>" class="button">
    Add New Customer
</a>

<?php if (session('success')): ?>
    <p style="margin-top: 20px; color: green; font-weight: bold;">
        <?= esc(session('success')) ?>
    </p>
<?php endif ?>

<?php if (empty($customers)): ?>

    <p>No customer records found.</p>

<?php else: ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['id']) ?></td>

                    <td>
                        <?= esc($customer['full_name']) ?>
                    </td>

                    <td>
                        <?= esc($customer['email']) ?>
                    </td>

                    <td>
                        <?= esc($customer['phone'] ?? '') ?>
                    </td>

                    <td>
                        <?= esc($customer['created_at'] ?? '') ?>
                    </td>

                    <td>
                        <a
                            href="<?= site_url(
                                'customers/' . $customer['id'] . '/edit'
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