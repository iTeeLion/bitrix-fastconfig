<?php
use Bitrix\Main;

define('arFilter', []);
define('arOrder', ['ID' => 'ASC']);
define('arGroupBy', false);
define('arNav', false);
define('arSelect', ['*']);

if(is_file(__DIR__ . '/../vendor/autoload.php')){
    require_once __DIR__ . '/../vendor/autoload.php';
}

if(is_file(__DIR__ . '/settings.php')){
    include_once (__DIR__ . '/settings.php');
}

if(class_exists('\App\Settings')){
    global $BXS;
    $BXS = new \App\Settings();
}

if(class_exists('\App\Utils')){
    global $BXU;
    $BXU = new \App\Utils();

    function vardmp($v)
    {
        global $BXU;
        $BXU->vardmp($v);
    }

    function d2f($v, $f = '!DEBUG')
    {
        global $BXU;
        $BXU->d2f($v, $f);
    }
}

if(is_file(__DIR__ . '/bx-events.php')){
    include_once(__DIR__ . '/bx-events.php');
}
?>
