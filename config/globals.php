<?php
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '',
        'username' => '',
        'password' => '',
        'db' => ''
    ),
    'remember' => array(
        'cookie_name' => '',
        'cookie_expiry' => ''
    ),
    'session' => array(
        'session_name' => '',
        'token_name' => ''
    ),
    'lang' => 'es',
    'base_url' => ''
);

$GLOBALS['directories'] = array(
    'root' => dirname(__DIR__),
    'layouts' => dirname(__DIR__) . '/layouts',
    'views' => dirname(__DIR__) . '/views',
    'libs' => dirname(__DIR__) . '/libs',
    'services' => dirname(__DIR__) . '/services',
    'controllers' => dirname(__DIR__) . '/controllers',
);

$GLOBALS['resources'] = array(
    'lang' => dirname(__DIR__) . '/resources/lang/' . $GLOBALS['config']['lang'] . '.php',
    'js' => '/resources/js',
    'css' => '/resources/css',
    'imgs' => '/resources/imgs',
);
