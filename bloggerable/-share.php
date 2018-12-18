<?php extract($lot); ?>
<div class="post-share">
  <span class="post-share-toggle" tabindex="0"><?php echo $language->do_share; ?></span>
  <ul class="post-share-menu">
  <?php

  $page_url = $page->url;
  $page_title = $page->title;
  $page_image = $page->image ?: $url . '/favicon.ico';
  $shares = [
      'Twitter' => 'https://twitter.com/intent/tweet?text=' . urlencode($page_title) . '&amp;url=' . urlencode($page_url),
      'Facebook' => 'https://www.facebook.com/sharer.php?u=' . urlencode($page->url),
      'Pinterest' => 'https://pinterest.com/pin/create/button/?url=' . urlencode($page_url) . '&amp;media=' . urlencode($page_image)
  ];

  foreach ($shares as $k => $v) {
      echo '<li class="post-share-menu-item">';
      echo '<a class="post-share-menu-link" href="' . $v . '" target="_blank">' . $k . '</a>';
      echo '</li>';
  }

  ?>
  </ul>
</div>