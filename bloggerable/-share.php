<?php extract($lot); ?>
<div class="post-share">
  <span class="post-share-toggle" tabindex="0"><?php echo $language->do_share; ?></span>
  <ul class="post-share-menu">
  <?php

  $shares = [
      'Twitter' => 'https://twitter.com/intent/tweet?text=' . urlencode($page->title) . '&amp;url=' . urlencode($page->url),
      'Facebook' => 'https://www.facebook.com/sharer.php?u=' . urlencode($page->url),
      'Pinterest' => 'https://pinterest.com/pin/create/button/?url=' . urlencode($page->url) . '&amp;media=' . urlencode($page->image ?: $url . '/favicon.ico')
  ];

  foreach ($shares as $k => $v) {
      echo '<li class="post-share-menu-item">';
      echo '<a class="post-share-menu-link" href="' . $v . '" target="_blank">' . $k . '</a>';
      echo '</li>';
  }

  ?>
  </ul>
</div>