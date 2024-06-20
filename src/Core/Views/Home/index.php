<?= $this->extend('Template\layouts\default'); ?>

<?= $this->section('title'); ?>Home<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<header>
    <h1>Hello World 2</h1>
</header>
<nav>
    <?php if(auth()->loggedIn()): ?>
        <a href="<?= url_to('set-password') ?>">Reset Password</a>
        <a href="<?= url_to('logout') ?>">Logout</a>
    <?php else: ?>
        <a href="<?= url_to('login') ?>">Login</a>
    <?php endif ?>
</nav>
<main>
    <p>Hello <?= esc(auth()->user()->name) ?></p>
    <p>This is a simple HTML5 page.</p>
</main>
<?= $this->endSection(); ?>
