<?php static::header(); ?>
<article class="post" id="post-<?php echo $page->id; ?>">
  <h1 class="post-title"><?php echo $page->title; ?></h1>
  <?php if ($site->has('parent')): ?>
    <?php static::get('page.author', ['page' => $page]); ?>
    <?php static::get('page.tags', ['page' => $page]); ?>
  <?php endif; ?>
  <div class="post-body post-body-typography">
    <?php echo $page->content; ?>
  </div>
</article>
<?php if ($site->has('parent')): ?>
  <?php static::comments(); ?>
<?php endif; ?>
<?php static::footer(); ?>