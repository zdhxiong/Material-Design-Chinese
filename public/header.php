<!DOCTYPE html>
<html class="qp-ui" data-qp-ui="{'Futurizr': {'hasTouch': 'touch'}}">
<head>
  <meta charset="utf-8">
  <link href="<?= url('static/default/css/main.min.css'); ?>" rel="stylesheet">
  <link href="<?= url('static/default/css/fonts.css'); ?>" rel="stylesheet">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <title><?= $vars['title'] ? $vars['title'].' - ' : ''; ?><?= $vars['category'] ? $vars['category'].' - ' : ''; ?>Material design 中文文档，指南，翻译</title>
  <meta itemprop="name" content="<?= $vars['title']; ?> - <?= $vars['category']; ?> - Material design 指南">
  <meta itemprop="image" content="<?= url('static/media/public/share.png') ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?= $vars['title']; ?> - <?= $vars['category']; ?> - Material design 指南">
  <meta itemprop="image" content="<?= url('static/media/public/share.png') ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:title" content="<?= $vars['title']; ?><?= $vars['category']; ?>">
  <meta property="og:site_name" content="Material design 指南">
  <meta property="og:image" content="<?= url('static/media/public/share.png') ?>">
  <meta property="article:section" content="<?= $vars['title']; ?> - <?= $vars['category']; ?>">
  <meta name="theme-color" content="<?= $vars['theme_color'] ?>">
  <?php // 如果是以 https://、http://、// 开头，则取出其中的域名部分，预连接 ?>
  <?php if (strpos(STATIC_PATH, 'http') === 0 || strpos(STATIC_PATH, '//') === 0): ?>
    <link rel="preconnect" href="<?= implode('/', array_slice(explode('/', STATIC_PATH), 0, 3)) ?>">
  <?php endif; ?>
  <link rel="icon" sizes="192x192" href="<?= url('static/media/public/guidelines-icon-192x192.png') ?>">
  <link rel="shortcut icon" href="<?= url('static/media/public/guidelines-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" href="<?= url('static/media/public/guidelines-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= url('static/media/public/guidelines-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= url('static/media/public/guidelines-icon-144x144.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= url('static/media/public/guidelines-icon-180x180.png') ?>">
  <meta name="msapplication-TileImage" content="<?= url('static/media/public/guidelines-icon-144x144.png') ?>">
  <meta name="msapplication-tap-highlight" content="no">
  <script id="analysis-code"></script>
</head>

<body class="site-material_ext_publish section-material-design first-chapter color-<?= $vars['color_name']; ?> qp-ui" data-qp-ui="{ 'Mask': {} }">

<header class="qp-ui" data-qp-ui="{'Peekaboo': {'mobile': 72,'desktop-sm': 72,'default': 192}}">
  <div class="header-wrapper qp-ui" data-qp-ui="{'Peekaboo': {'mobile': 28,'desktop-sm': 28,'default': 82}}">
    <div class="header-title">
      <span class="section-title"><?= $vars['category'] ? $vars['category'] : 'Material Design 指南中文版'; ?></span>
      <span class="chapter-title"><?= $vars['title'] ? '<span class="title-separator">–</span> '.$vars['title'] : ''; ?></span>
    </div>
  </div>
</header>

<nav>
  <button class="hamburger-button qp-ui" data-qp-ui="{ 'SideNavToggle': {} }" role="tab">
    <i class="material-icons material-spec-icon" title="Show navigation">menu</i>
  </button>
</nav>

<form id="search-form" action="https://cn.bing.com/search" method="GET">
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
