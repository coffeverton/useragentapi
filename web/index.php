<?php

require('../vendor/autoload.php');
error_reporting(E_ERROR);
ini_set('display_errors', 'on');
$cacheDir = realpath(__DIR__.'/../cache/');

$fileCache = new \Doctrine\Common\Cache\FilesystemCache($cacheDir);
$cache = new \Roave\DoctrineSimpleCache\SimpleCacheAdapter($fileCache);

$logger = new \Monolog\Logger('name');

$bc = new \BrowscapPHP\Browscap($cache, $logger);
$ua = $_REQUEST["ua"];
$result = $bc->getBrowser($ua);
echo json_encode($result);
