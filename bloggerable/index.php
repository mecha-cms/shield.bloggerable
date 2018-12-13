<?php

// Widget state
Lot::set('widget', new State(require __DIR__ . DS . 'state' . DS . 'widget.php'));

// Automatic paragraph tag(s) for description data
Hook::set('page.description', function($description) {
    if ($description && strpos($description, '</p>') === false) {
        return '<p>' . str_replace(["\n\n", "\n"], ['</p><p>', '<br>'], trim(n($description))) . '</p>';
    }
    return $description;
});

// Load asset(s)
Asset::set('css/$.min.css', 20);
Asset::set('css/bloggerable.min.css', 20.1);
Asset::set('css/tweak.min.css', 20.2);

Asset::set('js/$.min.js', 20);