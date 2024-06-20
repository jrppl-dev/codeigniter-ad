<?= $this->extend('Template\layouts\default'); ?>

<?= $this->section('title'); ?>Articles<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<header>
    <h1>Articles</h1>
</header>
<nav>
    <a href="<?= url_to(\Core\Controllers\HomeController::class . '::index') ?>">Home</a>
</nav>

<?php if (session()->has('errors')): ?>

<ul>
    <?php foreach (session('errors') as $error) : ?>
      <li><?= $error ?></li>
    <?php endforeach; ?>
</ul>

<?php endif; ?>

<?= form_open('articles/create') ?>

<label>
    Title
    <input type="text" name="title" value="<?= old('title') ?>" />
</label>

<label>
    Content
    <textarea name="content" cols="30" rows="10"><?= old('content') ?></textarea>
</label>

<input type="submit" value="Submit" />
<?= form_close() ?>
<main>
    <?php foreach ($articles as $article) : ?>
        <article>
            <h2><a href="<?= site_url('/articles/' . $article->id) ?>"><?= esc($article->title) ?></a></h2>
            <p><?= esc($article->content) ?></p>
        </article>
    <?php endforeach; ?>
</main>
<?= $this->endSection(); ?>

