<?php extract($lot); ?>
<ul class="post-meta">
<li class="post-meta-item">
<?php

if (Extend::exist('user') && $page->author instanceof User) {
    $author = HTML::a($page->author . "", $page->author->link ?: $page->author->url, false, ['class[]' => ['post-meta-link']]);
} else {
    $author = HTML::span($page->author . "");
}

echo 'Posted by ' . $author;

?>
</li>
<li class="post-meta-item">on <time datetime="<?php echo $page->time->W3C; ?>" title="<?php echo $page->time->W3C; ?>"><?php echo substr($page->time->month(""), 0, 3) . ' ' . $page->time->day . ', ' . $page->time->year; ?></time>
</li>
<li class="post-meta-item">
<a class="post-meta-link" href="<?php echo $page->url; ?>#comments" title="<?php echo To::text($language->comments); ?>">No comments</a>
</li>
<li class="post-meta-item">
<?php Shield::get('-share', ['page' => $page]); ?>
</li>
</ul>