<?php extract($lot); ?>








<div class="post-share">
<span class="post-share-toggle" tabindex="0">
Share
</span>
<ul class="post-share-menu">
<?php

$shares = [
    'Twitter' => '',
    'Facebook' => '',
    'Google+' => '',
    'Pinterest' => ''
];

foreach ($shares as $k => $v) {
    echo '<li class="post-share-menu-item">';
    echo '<a class="post-share-menu-link" href="' . $v . '" target="_blank">' . $k . '</a>';
    echo '</li>';
}

?>
</ul>
</div>