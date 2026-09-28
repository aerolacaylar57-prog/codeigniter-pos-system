<?= view('templates/header', ['title' => $title]) ?>

<h1>Edit Customer</h1>

<?php if (session('errors')): ?>
    <div style="color: #b00020; margin-bottom: 15px;">
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<form action="<?= site_url('customers/' . $customer['id'] . '/update') ?>" method="post">
    <?= csrf_field() ?>

    <p>
        <label for="full_name">Full name</label><br>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name', $customer['full_name']) ?>"
        >
    </p>

    <p>
        <label for="email">Email</label><br>
        <input
            type="email"
            id="email"
            name="email"
            value="<?= old('email', $customer['email']) ?>"
        >
    </p>

    <p>
        <label for="phone">Phone</label><br>
        <input
            type="text"
            id="phone"
            name="phone"
            value="<?= old('phone', $customer['phone'] ?? '') ?>"
        >
    </p>

    <button type="submit">Update Customer</button>
    <a href="<?= site_url('customers') ?>">Cancel</a>
</form>

<?= view('templates/footer') ?>