<?php

$content  = '<form action="' . ($site->is('pages') ? Path::D($url->clean) : $url->clean) . '" class="search-form">';
$content .= '<div class="search-form-row" role="search">';
$content .= '<div class="search-form-col">';
$content .= '<input aria-label="Search this blog" autocomplete="off" class="search-form-input" name="' . $site->q . '" placeholder="Search this blog" type="search">';
$content .= '</div>';
$content .= '<div class="search-form-col-auto">';
$content .= '<button class="search-form-submit" type="submit">' . $language->search . '</button>';
$content .= '</div>';
$content .= '</div>';
$content .= '</form>';

Shield::get('widget', [
    'id' => 'form-search',
    'title' => 'Search This Blog',
    'content' => $content
]);