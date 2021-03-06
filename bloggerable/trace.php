<?php

$format = ['<li class="breadcrumb-item active">%{0}%</li>', '<li class="breadcrumb-item"><a class="breadcrumb-link" href="%{1}%">%{0}%</a></li>'];

$a = explode('/', $url->path);
$b = candy($format[$site->is('home') ? 0 : 1], [$language->home, $url]);
$c = "";

array_pop($a); // remove the last path

while ($d = array_shift($a)) {
    $c .= '/' . $d;
    $f = PAGE . DS . $c;
    if (!$f = File::exist([
        $f . '.page',
        $f . '.archive'
    ])) {
        continue;
    }
    $d = Page::open($f)->get('title', To::title($d));
    $b .= candy($format[1], [$d, $url . $c]);
}

$b .= candy($format[0], [$page->title ?: $language->error]);

echo $b ? '<ol class="breadcrumb">' . $b . '</ol>' : "";