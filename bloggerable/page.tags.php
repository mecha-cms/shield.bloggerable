<?php

if (Extend::exist('tag')) {
    echo '<div class="post-label"><ul class="post-label-list">';
    call_user_func(function() {
        extract(Lot::get());
        $tags = $page->tags->map(function($tag) {
            return '<li class="post-label-item">' . HTML::a($tag->title, $tag->url, false, ['class[]' => ['post-label-link'], 'rel' => 'tag']) . '</li>';
        });
        echo $tags->count ? $tags("") : '<li class="post-label-item"><span class="post-label-link nolabel">Unlabelled</span></li>';
    });
    echo '</ul></div>';
}