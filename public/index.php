<?php
/**
 * 项目入口文件
 */
// header("Content-Type:text/html;charset=utf-8");// 设置系统的输出字符为utf-8

// define('DS', DIRECTORY_SEPARATOR);// windows路径分隔符是\ linux路径分隔符是/
define('DS', '/');// 统一为/
define('EXT', '.php');// 文件扩展名
define('DOC_ROOT', str_replace('\\', '/', realpath(dirname(__DIR__))));// 项目文档根目录
define('WOO', DOC_ROOT . DS . 'woo');// 框架目录
define('PUB', DOC_ROOT . DS . 'public');// 公共文件目录

require WOO . DS . 'woo' . EXT;// 框架入口文件
