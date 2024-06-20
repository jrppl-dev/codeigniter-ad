<?= $this->extend('Template\layouts\default'); ?>

<?= $this->section('title'); ?><?= $article->title ?><?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<header>
    <h1>Articles</h1>
</header>
<nav>
    <a href="/home">Home</a>
</nav>
<main>
    <article>
        <h2><?= esc($article->title) ?></h2>
        <p><?= esc($article->content) ?></p>
    </article>
</main>
<?= $this->endSection(); ?>

