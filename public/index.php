<?php

if (PHP_MAJOR_VERSION < 8) {
    die('необходима версия PHP >= 8');
}

require_once dirname( __DIR__) . '/config/init.php';

echo 'test';