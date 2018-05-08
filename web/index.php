<?php
//默认时区配置
date_default_timezone_set('Asia/Shanghai');
// 开启debug调试模式（会输出异常）
defined('SYS_DEBUG') or define('SYS_DEBUG', true);
// 开启Logger页面调试
defined('SYS_CONSOLE') or define('SYS_CONSOLE', true);
// dev pre pub 当前环境
defined('SYS_ENV') or define('SYS_ENV', 'dev');
// 系统维护中。。。
defined('isMaintenance') or define('isMaintenance', false);
if (SYS_DEBUG){
    ini_set('display_errors','On');
}
error_reporting(E_ALL ^ E_NOTICE);

include __DIR__.'/../lib/TXApp.php';

TXApp::registry(__DIR__. '/../app');
TXApp::run();