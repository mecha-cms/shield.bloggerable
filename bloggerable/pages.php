<?php Shield::get('header'); ?>
<?php if ($pages->count): ?>
  <?php foreach ($pages as $page): ?>
  <article class="post" id="post-<?php echo $page->id; ?>">
    <h2 class="post-title">
      <a href="<?php echo $page->link ?: $page->url; ?>"><?php echo $page->title; ?></a>
    </h2>
    <div class="post-snippet post-body-typography"><?php echo $page->excerpt ?: $page->description; ?></div>
    <?php Shield::get('page.tags', ['page' => $page]); ?>
    <?php Shield::get('page.author', ['page' => $page]); ?>
  </article>
  <?php endforeach; ?>
<?php else: ?>
  <p><?php echo $language->message_info_void($language->articles); ?></p>
<?php endif; ?>
<?php Shield::get('footer'); ?>