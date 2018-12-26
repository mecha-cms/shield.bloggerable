<?php

call_user_func(function() {
    extract(Lot::get());
    $r = $widget->page['path'];
    $chunk = $widget->page['chunk'];
    $data = [];
    $content = "";
    $current = $page; // Catch original `$page` variable
    $slug = $current->slug;
    $pages = Get::pages(PAGE . DS . $r, 'page', [-1, 'time'], 'path');
    if ($pages->count) {
        $content .= '<ul>';
        foreach ($pages->chunk($chunk, 0) as $page) {
            $page = new Page($page);
            $content .= '<li' . ($page->slug === $slug ? ' class="current"' : "") . '>' . HTML::a($page->title, $page->url) . '</li>';
        }
        $content .= '</ul>';
    } else {
        $content = '<p>' . $language->message_info_void($language->articles) . '</p>';
    }
    $id = To::slug(Path::N(__FILE__));
    static::widget([
        'id' => 'page-recent',
        'title' => $language->widget_page->recent,
        'content' => $content
    ]);
});