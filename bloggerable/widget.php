<?php extract($lot); ?>
<?php if (!empty($title) || !empty($content)): ?>
<div class="<?php echo implode(' ', array_reverse(Anemon::step('widget-' . ($id ?? 'default'), '-'))); ?>">
  <?php if (!empty($title)): ?>
  <h3 class="title"><?php echo $title; ?></h3>
  <?php endif; ?>
  <?php if (!empty($content)): ?>
  <div class="widget-content"><?php echo $content; ?></div>
  <?php endif; ?>
</div>
<?php endif; ?>