<?php

/**
 * =====================================
 * ======== 生成最终的 HTML 文件 =========
 * =====================================
 */

// 源文件目录相对于当前文件的路径
$src_path = realpath('./');

// 构建后的文件存放路径
$build_path = __DIR__. DIRECTORY_SEPARATOR .'build';

// 公共文件
$public_files = array(
  'header'  =>  $src_path.'/public/header.php',
  'sidenav' =>  $src_path.'/public/sideNav.php',
  'footer'  =>  $src_path.'/public/footer.php'
);

// 公共翻译
$translate = array(
  'do'           =>  '正确示例',
  'dont'         =>  '错误示例'
);

// 文件夹目录
$file_folders = array(
  'components', 'growth-communications', 'layout',
  'material-design', 'motion', 'patterns', 'platforms',
  'resources', 'style', 'usability'
);

// 所有文件路径数组
$files = array(
  array(
    'folder'  =>  '',
    'file'    =>  'index'
  )
);

/**
 * 把文件地址转为相对路径
 * @param $url
 * @return bool
 */
function get_url($url) {
  $backtrace = debug_backtrace();
  $last_backtrace = array_pop($backtrace);
  $path = dirname($last_backtrace['args'][0]);

  $relative = str_replace($GLOBALS['src_path'], '', $path);
  $folder = str_replace(DIRECTORY_SEPARATOR, '', $relative);

  // index.php
  if (!$folder) {
    return $url;
  }

  // components/cards.php => components/buttons.php
  else if (strpos($url, $folder.'/') === 0) {
    return str_replace($folder.'/', '', $url);
  }

  // components/cards.php => style/color.php
  else {
    return '../'.$url;
  }
}

/**
 * 输出相对路径
 * @param $url
 */
function url($url) {
  echo get_url($url);
}

/**
 * 输出 drawer 中分类的 HMTL
 * @param $category
 */
function category_html($category) {
  echo '<dt class="qp-ui" data-qp-ui="{ \'SideNavZippy\': ' . ($category == $GLOBALS['vars']['category'] ? 'true' : 'false') . ' }">' . $category . '</dt>';
}

/**
 * 输出 drawer 中标题的 HTML
 * @param $title
 * @param $url
 */
function title_html($title, $url) {
  echo '<a ' . ($GLOBALS['vars']['title'] == $title ? 'class="nav_selected"' : '') . ' href="' . get_url($url) . '">' . $title . '</a>';
}

/**
 * 删除文件夹
 * @param $folder
 * @return bool
 */
function delete_folder($folder) {
  if (!file_exists($folder)) {
    return true;
  }

  // 先删除目录下的文件：
  $dh = opendir($folder);
  while (false !== ($file = readdir($dh))) {
    if ($file != '.' && $file != '..') {
      $path = $folder . DIRECTORY_SEPARATOR . $file;
      if (!is_dir($path)) {
        unlink($path);
      } else {
        delete_folder($path);
      }
    }
  }
  closedir($dh);

  //删除当前文件夹：
  if(rmdir($folder)) {
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
function get_files($folder) {
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

// 合并所有文件到同一个数组
foreach($file_folders as $folder) {
  $folder_path = $src_path . DIRECTORY_SEPARATOR . $folder;
  $folder_files = get_files($folder_path);

  foreach($folder_files as $file) {
    $files[] = array(
      'folder'  =>  $folder,
      'file'    =>  $file
    );
  }
}

// 删除旧文件
$index_file = $build_path . DIRECTORY_SEPARATOR . 'index.html';
if (file_exists($index_file)) {
  unlink($index_file);
}
foreach($file_folders as $folder) {
  delete_folder($build_path . DIRECTORY_SEPARATOR . $folder);
}

// 生成文件
foreach($files as $file) {
  // 生成文件夹
  $folder_path = $build_path. DIRECTORY_SEPARATOR .$file['folder'];
  if(!file_exists($folder_path)) {
    mkdir($folder_path);
  }

  $src_file_path = $src_path. DIRECTORY_SEPARATOR .$file['folder']. DIRECTORY_SEPARATOR .$file['file'].'.php';
  $build_file_path = $build_path. DIRECTORY_SEPARATOR .$file['folder']. DIRECTORY_SEPARATOR .$file['file'].'.html';

  ob_start();

  include $src_file_path;
  $file_content = ob_get_contents();
  file_put_contents($build_file_path, $file_content);

  ob_end_clean();
}


