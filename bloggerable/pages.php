<?php Shield::get('header'); ?>
<div class="posts">
  <?php if ($pages): ?>
    <?php foreach ($pages as $page): ?>
    <article class="post" id="post-<?php echo $page->id; ?>">
      <h2 class="post-title">
        <a href="<?php echo $page->link ?: $page->url; ?>"><?php echo $page->title; ?></a>
      </h2>
      <div class="post-snippet">
        <?php echo $page->description; ?>
      </div>
      <?php Shield::get('page.tags', ['page' => $page]); ?>
      <?php Shield::get('page.author', ['page' => $page]); ?>
    </article>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No pages yet.</p>
  <?php endif; ?>
</div>
<?php Shield::get('pager'); ?>
<?php Shield::get('footer'); ?>