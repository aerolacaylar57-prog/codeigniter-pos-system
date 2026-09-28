<?= view('templates/header', ['title' => $title]) ?>

<h1>New User</h1>

<?php if (session('errors')): ?>
    <div style="color: #b00020; margin-bottom: 15px;">
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<form action="<?= site_url('users/create') ?>" method="post">
    <?= csrf_field() ?>

    <p>
        <label for="username">Username</label><br>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= old('username') ?>"
        >
    </p>

    <p>
        <label for="full_name">Full name</label><br>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name') ?>"
        >
    </p>

    <button type="submit">Save User</button>
    <a href="<?= site_url('users') ?>">Cancel</a>
</form>

<?= view('templates/footer') ?>