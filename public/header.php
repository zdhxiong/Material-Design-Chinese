<!DOCTYPE html>
<html class="qp-ui" data-qp-ui="{'Futurizr': {'hasTouch': 'touch'}}">
<head>
  <meta charset="utf-8">
  <link href="<?php url('static/default/css/main.min.css'); ?>" rel="stylesheet">
  <link href="<?php url('static/default/css/fonts.css'); ?>" rel="stylesheet">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <title><?php echo $vars['title'] ? $vars['title'].' - ' : ''; ?><?php echo $vars['category'] ? $vars['category'].' - ' : ''; ?>Material design 中文文档，指南，翻译</title>
  <meta itemprop="name" content="<?php echo $vars['title']; ?> - <?php echo $vars['category']; ?> - Material design 指南">
  <meta itemprop="image" content="<?php url('static/media/public/share.png') ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php echo $vars['title']; ?> - <?php echo $vars['category']; ?> - Material design 指南">
  <meta itemprop="image" content="<?php url('static/media/public/share.png') ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:title" content="<?php echo $vars['title']; ?><?php echo $vars['category']; ?>">
  <meta property="og:site_name" content="Material design 指南">
  <meta property="og:image" content="<?php url('static/media/public/share.png') ?>">
  <meta property="article:section" content="<?php echo $vars['title']; ?> - <?php echo $vars['category']; ?>">
  <meta name="theme-color" content="<?php echo $vars['theme_color'] ?>">
  <link rel="icon" sizes="192x192" href="<?php url('static/media/public/guidelines-icon-192x192.png') ?>">
  <link rel="shortcut icon" href="<?php url('static/media/public/guidelines-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" href="<?php url('static/media/public/guidelines-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php url('static/media/public/guidelines-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php url('static/media/public/guidelines-icon-144x144.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php url('static/media/public/guidelines-icon-180x180.png') ?>">
  <meta name="msapplication-TileImage" content="<?php url('static/media/public/guidelines-icon-144x144.png') ?>">
  <meta name="msapplication-tap-highlight" content="no">
  <script id="analysis-code"></script>
</head>

<body class="site-material_ext_publish section-material-design first-chapter color-<?php echo $vars['color_name']; ?> qp-ui" data-qp-ui="{ 'Mask': {} }">

<header class="qp-ui" data-qp-ui="{'Peekaboo': {'mobile': 72,'desktop-sm': 72,'default': 192}}">
  <div class="header-wrapper qp-ui" data-qp-ui="{'Peekaboo': {'mobile': 28,'desktop-sm': 28,'default': 82}}">
    <div class="header-title">
      <span class="section-title"><?php echo $vars['category'] ? $vars['category'] : 'Material Design 指南中文版'; ?></span>
      <span class="chapter-title"><?php echo $vars['title'] ? '<span class="title-separator">–</span> '.$vars['title'] : ''; ?></span>
    </div>
  </div>
</header>

<nav>
  <button class="hamburger-button qp-ui" data-qp-ui="{ 'SideNavToggle': {} }" role="tab">
    <i class="material-icons material-spec-icon" title="Show navigation">menu</i>
  </button>
</nav>

<form id="search-form" action="https://material.io/guidelines/search.html" method="GET">
  <div class="search-widget qp-ui" data-qp-ui="{ 'SearchInput': {} }">
    <button class="search-button"><i class="material-icons">search</i></button>
    <button class="search-close-button"><i class="material-icons">close</i></button>
    <input name="q" type="text" id="search-input" autocomplete="off">
    <label for="search-input">Search</label>
  </div>
</form>

<?php
include SRC_PATH.'/public/sidenav.php';
?>