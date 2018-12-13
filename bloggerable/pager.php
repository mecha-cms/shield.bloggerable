<nav class="pager">
  <?php if ($previous = $pager->previous): ?>
  <a class="pager-newer pager-link" href="<?php echo $previous; ?>" role="button">
    <?php echo $language->newer; ?>
  </a>
  <?php else: ?>
  <a class="pager-newer pager-link disabled" href="javascript:;" role="button">
    <?php echo $language->newer; ?>
  </a>
  <?php endif; ?>
  <?php if ($site->is('home')): ?>
  <a class="pager-home pager-link disabled" href="javascript:;" role="button">
    <?php echo $language->home; ?>
  </a>
  <?php else: ?>
  <a class="pager-home pager-link" href="<?php echo $url; ?>" role="button">
    <?php echo $language->home; ?>
  </a>
  <?php endif; ?>
  <?php if ($next = $pager->next): ?>
  <a class="pager-older pager-link" href="<?php echo $next; ?>" role="button">
    <?php echo $language->older; ?>
  </a>
  <?php else: ?>
  <a class="pager-older pager-link disabled" href="javascript:;" role="button">
    <?php echo $language->older; ?>
  </a>
  <?php endif; ?>
</nav>