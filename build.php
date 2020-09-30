<?php

/**
 * =====================================
 * ======== 生成最终的 HTML 文件 =========
 * =====================================
 */

// 源文件目录相对于当前文件的路径
define('SRC_PATH', realpath('./'));

// 构建后的文件存放路径
define('BUILD_PATH', __DIR__ . '/build');

// 静态资源绝对路径，如果使用相对路径，留空即可
// 例如你希望把静态文件托管到 CDN，CDN 地址为http://cdn.mdui.org，只需把 static 目录下的文件全部放到 CDN 中，然后修改此地址为 CDN 地址。
define('STATIC_PATH', '');

// 广告
$adsense = array(
  '<script id="analysis-code"></script>' => '',
  '<div class="gas-h1-bottom"></div>' => '',
  '<div class="gas-intro-h1-bottom"></div>' => '',
  '<div class="gas-last-div-inner-bottom"></div>' => '',
);

// 公共翻译
$translate = array(
    'do' => '正确示例',
    'dont' => '错误示例'
);

// 文件夹目录
$file_folders = array(
    'components',
    'growth-communications',
    'layout',
    'material-design',
    'motion',
    'patterns',
    'platforms',
    'resources',
    'style',
    'usability'
);

/**
 * 抽屉栏导航的数据
 * Class Nav
 */
class Nav
{
    private $nav = array();
    private $original = array();

    public function __construct()
    {
        $this->original = include SRC_PATH . '/public/sidenav_data.php';

        $nav_tmp = $nav_tmp2 = array();

        // 首页
        $nav_tmp[] = array(
            'folder' => '',
            'category' => '',
            'theme_color' => '#00bcd4',
            'color_name' => 'cyan',
            'file' => 'index',
            'title' => ''
        );

        foreach ($this->original as $key => $val) {
            foreach ($val['children'] as $subkey => $subval) {
                $nav_tmp[] = array(
                    'folder' => $key,
                    'category' => $val['title'],
                    'theme_color' => $val['theme_color'],
                    'color_name' => $val['color_name'],
                    'file' => $subkey,
                    'title' => $subval
                );
            }
        }

        foreach ($nav_tmp as $key => $val) {
            $nav_tmp2[$key] = $nav_tmp[$key];
            $nav_tmp2[$key]['prev'] = $key > 0 ? $nav_tmp[$key - 1] : array();
            $nav_tmp2[$key]['next'] = $key < count($nav_tmp) - 1 ? $nav_tmp[$key + 1] : array();
        }

        foreach ($nav_tmp2 as $key => $val) {
            $this->nav[$val['folder'] . '/' . $val['file']] = $val;
        }

        unset($nav_tmp, $nav_tmp2);
    }

    public function getCurrent($file)
    {
        return $this->nav[$file['folder'] . '/' . $file['file']];
    }

    public function getPrev($file)
    {
        return $this->getCurrent($file)['prev'];
    }

    public function getNext($file)
    {
        return $this->getCurrent($file)['next'];
    }

    public function getOriginal()
    {
        return $this->original;
    }
}


/**
 * 把文件地址转为相对路径
 * @param $url
 * @return bool
 */
function get_url($url)
{
    // 如果是静态资源，且设置了绝对链接
    if (strpos($url, 'static/') > -1 && STATIC_PATH) {
        return STATIC_PATH . '/' . explode('static/', $url, 2)[1];
    }

    $backtrace = debug_backtrace();
    $last_backtrace = array_pop($backtrace);
    $path = dirname($last_backtrace['args'][0]);

    $relative = str_replace(SRC_PATH, '', $path);
    $folder = str_replace(DIRECTORY_SEPARATOR, '', $relative);

    // index.php
    if (!$folder) {
        return $url;
    } // components/cards.php => components/buttons.php
    else if (strpos($url, $folder . '/') === 0) {
        return str_replace($folder . '/', '', $url);
    } // components/cards.php => style/color.php
    else {
        return '../' . $url;
    }
}

/**
 * 输出相对路径
 * @param $url
 */
function url($url)
{
    return get_url($url);
}

/**
 * 输出静态资源路径
 * @param $assets
 */
function static_url($assets)
{
    if (STATIC_PATH) {
        $assets = STATIC_PATH . '/' . explode('static/', $assets, 2)[1];
    }

    return $assets;
}

/**
 * 删除文件夹
 * @param $folder
 * @return bool
 */
function delete_folder($folder)
{
    if (!file_exists($folder)) {
        return true;
    }

    // 先删除目录下的文件：
    $dh = opendir($folder);
    while (false !== ($file = readdir($dh))) {
        if ($file != '.' && $file != '..') {
            $path = $folder . '/' . $file;
            if (!is_dir($path)) {
                unlink($path);
            } else {
                delete_folder($path);
            }
        }
    }
    closedir($dh);

    //删除当前文件夹：
    if (rmdir($folder)) {
        return true;
    } else {
        return false;
    }
}

/**
 * 获取目录下的文件列表
 * @param $folder string 文件夹名
 * @return array
 */
function get_folder_files($folder)
{
    if (!file_exists($folder)) {
        return array();
    }
    $files = array();
    $handle = opendir($folder);
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            // 去除 .php 后缀
            $files[] = substr($file, 0, -4);
        }
    }
    closedir($handle);

    return $files;
}

/**
 * 获取所有文件列表
 * @return array
 */
function get_all_files()
{
    $files = array();
    // 合并所有文件到同一个数组
    foreach ($GLOBALS['file_folders'] as $folder) {
        $folder_path = SRC_PATH . '/' . $folder;
        $folder_files = get_folder_files($folder_path);

        foreach ($folder_files as $file) {
            $files[] = array(
                'folder' => $folder,
                'file' => $file
            );
        }
    }

    $files[] = array(
        'folder' => '',
        'file' => 'index'
    );

    return $files;
}

// 所有文件列表
$files = get_all_files();

$nav = new Nav();

// 删除旧文件
if (file_exists(BUILD_PATH . '/index.html')) {
    unlink(BUILD_PATH . '/index.html');
}
foreach ($file_folders as $folder) {
    delete_folder(BUILD_PATH . '/' . $folder);
}

// 生成文件
foreach ($files as $file) {
    // 生成文件夹
    $folder_path = BUILD_PATH . '/' . $file['folder'];
    if (!file_exists($folder_path)) {
        mkdir($folder_path);
    }

    $current = $nav->getCurrent($file);
    $prev = $nav->getPrev($file);
    $next = $nav->getNext($file);

    // 文件中的参数
    $vars = array(
        'title' => $current['title'],
        'category' => $current['category'],
        'theme_color' => $current['theme_color'],
        'color_name' => $current['color_name'],
        'prev_title' => $prev ? $prev['title'] : '',
        'prev_path' => $prev ? $prev['folder'] . '/' . $prev['file'] : '',
        'next_title' => $next ? $next['title'] : '',
        'next_path' => $next ? $next['folder'] . '/' . $next['file'] : ''
    );

    // 读取文件
    ob_start();
    include SRC_PATH . '/' . $file['folder'] . '/' . $file['file'] . '.php';
    $file_content = ob_get_contents();

    // 替换广告
    $file_content = str_replace(array_keys($adsense), array_values($adsense), $file_content);

    // 写入文件
    file_put_contents(BUILD_PATH . '/' . $file['folder'] . '/' . $file['file'] . '.html', $file_content);
    ob_end_clean();
}
