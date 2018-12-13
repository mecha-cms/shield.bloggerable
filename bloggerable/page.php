<?php Shield::get('header'); ?>
<div class="posts">
  <article class="post" id="post-<?php echo $page->id; ?>">
    <h1 class="post-title"><?php echo $page->title; ?></h1>
    <?php if ($site->has('parent')): ?>
      <?php Shield::get('page.author', ['page' => $page]); ?>
      <?php Shield::get('page.tags', ['page' => $page]); ?>
    <?php endif; ?>
    <div class="post-body post-body-typography">
      <?php echo $page->content; ?>
    </div>
  </article>
  <?php if ($site->has('parent')): ?>
    <?php Shield::get('comments'); ?>
  <?php endif; ?>
</div>
<?php if ($site->has('parent')): ?>
  <?php Shield::get('pager'); ?>
<?php endif; ?>
<?php Shield::get('footer'); ?>