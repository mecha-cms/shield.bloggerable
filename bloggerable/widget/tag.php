<?php

if (Extend::exist('tag')) {
    call_user_func(function() {
        extract(Lot::get());
        $r = $widget->page['path'];
        $path = Extend::state('tag', 'path');
        $data = [];
        $content = "";
        if ($kinds = glob(PAGE . DS . $r . DS . '*' . DS . 'kind.data', GLOB_NOSORT)) {
            foreach ($kinds as $kind) {
                $kind = e(file_get_contents($kind));
                $data = concat($data, (array) $kind);
            }
            if ($data) {
                $content .= '<div class="label-list">';
                $tags = [];
                foreach (array_count_values($data) as $k => $v) {
                    if (($slug = To::tag($k)) === false) {
                        continue;
                    }
                    $tag = new Tag(TAG . DS . $slug . '.page');
                    $u = $url . '/' . To::URL($r) . '/' . $path;
                    $tags[$tag->title] = '<a class="label-list-link' . ($site->is('tags') && $page->slug === $slug ? ' active' : "") . '" href="' . $u . '/' . $tag->slug . '">' . $tag->title . ' <span class="label-list-count">' . $v . '</span></a>';
                }
                ksort($tags); // Sort by `title`
                $content .= implode("", $tags) . '</div>';
            }
        }
        $content = $content ?: '<p>' . $language->message_info_void($language->tags) . '</p>';
        static::widget([
            'id' => 'tag',
            'title' => $language->widget_tag->{'$'},
            'content' => $content
        ]);
    });
}