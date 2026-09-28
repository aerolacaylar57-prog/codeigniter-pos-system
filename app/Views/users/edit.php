<?= view('templates/header', ['title' => $title]) ?>

<h1>Edit User</h1>

<?php if (session('errors')): ?>
    <div style="color: #b00020; margin-bottom: 15px;">
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if (! empty($user['avatar'])): ?>
    <p>
        <img
            src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
            alt="<?= esc($user['full_name']) ?>"
            width="120"
            height="120"
            style="object-fit: cover; border-radius: 50%;"
        >
    </p>
<?php endif ?>

<form
    action="<?= site_url('users/' . $user['id'] . '/update') ?>"
    method="post"
    enctype="multipart/form-data"
>
    <?= csrf_field() ?>

    <p>
        <label for="username">Username</label><br>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= old('username', $user['username']) ?>"
        >
    </p>

    <p>
        <label for="full_name">Full name</label><br>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name', $user['full_name']) ?>"
        >
    </p>

    <p>
        <label for="avatar">Profile picture</label><br>
        <input
            type="file"
            id="avatar"
            name="avatar"
            accept=".jpg,.jpeg,.png,image/jpeg,image/png"
        ><br>
        <small>JPG or PNG only. Maximum size: 2MB.</small>
    </p>

    <button type="submit">Update User</button>
    <a href="<?= site_url('users') ?>">Cancel</a>
</form>

<?= view('templates/footer') ?>