<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="blog">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
            </header>

            <?php snippet('coverimage', $article) ?>

            <div class="text">
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>
            </div>

          </article>

          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>

  <?php snippet('footer') ?>