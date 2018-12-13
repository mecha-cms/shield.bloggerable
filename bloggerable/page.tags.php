<?php

if (Extend::exist('tag')) {
    echo '<ul class="post-label">';
    call_user_func(function() {
        extract(Lot::get());
        $tags = $page->tags->map(function($tag) {
            return '<li class="post-label-item">' . HTML::a($tag->title, $tag->url, false, ['class[]' => ['post-label-link'], 'rel' => 'tag']) . '</li>';
        });
        echo $tags->count ? $tags("") : '<li class="post-label-item"><span class="post-label-link nolabel">' . $language->_tag . '</span></li>';
    });
    echo '</ul>';
}