<!DOCTYPE html>
<html dir="<?php echo $site->direction; ?>" class>
  <head>
    <meta charset="<?php echo $site->charset; ?>">
    <meta name="viewport" content="width=device-width">
    <?php if ($s = To::text($page->description($site->description))): ?>
    <meta name="description" content="<?php echo $s; ?>">
    <?php endif; ?>
    <?php if ($page->state === 'archive'): ?>
    <!-- Prevent search engines from indexing a page with `archive` state -->
    <meta name="robots" content="noindex">
    <?php endif; ?>
    <meta name="author" content="<?php echo $page->author; ?>">
    <title><?php echo To::text($site->trace); ?></title>
    <link href="<?php echo $url; ?>/favicon.ico" rel="shortcut icon">
  </head>
  <body>
    <header class="header" id="header">
      <div class="container">
        <div class="header-inner">
          <h1 class="header-title" title="<?php echo To::text($site->description); ?>">
            <?php if ($site->is('home')): ?>
            <span class="header-title-link active"><?php echo $site->title; ?></span>
            <?php else: ?>
            <a class="header-title-link" href="<?php echo $url; ?>"><?php echo $site->title; ?></a>
            <?php endif; ?>
          </h1>
          <nav><?php Shield::get('nav'); ?></nav>
        </div>
      </div>
    </header>
    <div class="main-content" id="main-content">
      <div class="container">
        <div class="main-content-inner">
          <div class="main-content-row">
            <main class="main-col" id="main-col" role="main">
              <div class="main" id="main">
                <?php Shield::get('path'); ?>
                <?php echo $message; ?>
                <div class="posts">