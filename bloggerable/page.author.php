<?php extract($lot); ?>
<ul class="post-meta">
  <li class="post-meta-item">
    <?php

    if (Extend::exist('user') && $page->author instanceof User) {
        $author = HTML::a($page->author . "", $page->author->link ?: $page->author->url, false, ['class[]' => ['post-meta-link']]);
    } else {
        $author = HTML::span($page->author . "");
    }

    echo $language->posted_by__([$author, '<time datetime="' . $page->time->W3C . '" title="' . $page->time->W3C . '">' . substr($page->time->month(""), 0, 3) . ' ' . $page->time->day . ', ' . $page->time->year . '</time>'], true);

    ?>
  </li>
  <?php if (Extend::exist('comment')): ?>
  <li class="post-meta-item">
    <?php $anchor = Extend::state('comment', 'anchor')[2] ?? ""; ?>
    <a class="post-meta-link" href="<?php echo $page->url . ($anchor ? '#' . $anchor : ""); ?>"><?php echo $page->comments->text; ?></a>
  </li>
  <?php endif; ?>
  <li class="post-meta-item">
    <?php static::_share(['page' => $page]); ?>
  </li>
</ul>