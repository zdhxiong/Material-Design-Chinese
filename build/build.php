<?php

/**
 * =====================================
 * ======== 生成 HTML 文件 =========
 * =====================================
 */

use Grinderspro\DirectoryManipulator\DirectoryManipulator;
use Komalbarun\DirPy;

require './vendor/autoload.php';

define('SRC_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src'); // 源文件存放目录
define('DIST_PATH', __DIR__ . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . 'dist'); // 生成的 HTML 文件存放目录

if(realpath(DIST_PATH) === false) {
    mkdir(DIST_PATH, 0644, true);
}

// 需要全局替换的变量，模板中用 {} 包裹
$global_params = [
    'do'             => '',
    'dont'           => '',
    'caution'        => '',
    'assets_path'    => 'https://mdui-aliyun.cdn.w3cbus.com/design/assets',
];

function isHrefActive($file, $href) {
    $href = substr($href, 2);
    $href = substr($href, 0, -5);

    $file = str_replace(SRC_PATH, '', $file);
    $file = substr($file, 0, -3);
    $file = str_replace(DIRECTORY_SEPARATOR, '/', $file);

    return $href == $file;
};

function buildDrawer($file) {
    static $drawer_data;

    if (is_null($drawer_data)) {
        $drawer_data = include './drawer.php';
    }

    $html = '';

    foreach ($drawer_data as $item) {
        if ($item['type'] == 'subheader') {
            $html .= "<div class=\"mdui-subheader\">{$item['title']}</div>";
        } elseif ($item['type'] == 'link') {
            $active_class = isHrefActive($file, $item['href']) ? 'mdui-list-item-active' : '';
            $html .= "<a href=\"{$item['href']}\" class=\"mdui-list-item {$active_class} mdui-ripple\">{$item['title']}</a>";
        } elseif ($item['type'] == 'collapse') {
            $collapse_class = '';
            $collapse_html = '';
            foreach ($item['children'] as $subitem) {
                $active_class = isHrefActive($file, $subitem['href']) ? 'mdui-list-item-active' : '';
                $collapse_html .= "<a href=\"{$subitem['href']}\" class=\"mdui-list-item {$active_class} mdui-ripple\">{$subitem['title']}</a>";

                if ($active_class) {
                    $collapse_class = 'mdui-collapse-item-open';
                }
            }

            $html .=
'<div class="mdui-collapse-item ' . $collapse_class . '">
  <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
  <div class="mdui-list-item-content">' . $item['title'] . '</div>
  <i class="mdui-collapse-item-arrow mdui-icon material-icons mdui-text-color-black-icon">arrow_drop_down</i>
</div>
<div class="mdui-collapse-item-body mdui-list">' . $collapse_html;

            $html .= '</div></div>';
        }
    }

    return $html;
}

$src = (new DirPy())->list_dir(SRC_PATH);
$dist = (new DirPy())->list_dir(DIST_PATH);
$template = file_get_contents('./index.html');

// 删除 dist 目录
foreach ($dist->dirs as $dir) {
    (new DirectoryManipulator($dir))->delete();
}

foreach ($src->files as $file) {
    $text = file_get_contents($file);

    // 变量替换
    foreach ($global_params as $key => $value) {
        $text = str_replace('{' . $key . '}', $value, $text);
    }

    // 解析 markdown
    $html = Parsedown::instance()->setBreaksEnabled(true)->text($text);
    $html = str_replace('<table>', '<table class="mdui-table mdui-table-hoverable">', $html);
    $html = str_replace('{body}', $html, $template);

    // drawer 替换
    $drawer = buildDrawer($file);
    $html = str_replace('{drawer}', $drawer, $html);

    // 标题替换
    preg_match("/<h1>(.*?)<\/h1>/", $html, $matched);
    $html = str_replace('<title></title>', '<title>' . $matched[1] . ' - Material Design 中文文档，指南，翻译</title>', $html);

    $filename = str_replace(SRC_PATH, DIST_PATH, $file);
    $filename = substr($filename, 0, -3) . '.html';

    (new DirectoryManipulator(dirname($filename)))->create();
    file_put_contents($filename, $html);
}
