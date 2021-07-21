<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

include_once('init.php');
use \Bitrix\Main\Page\Asset;

// Styles
//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/custom.css', true);
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/custom.css', true);

// Scripts
//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/custom.js', true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/custom.js', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <style>
        <? include_once (SITE_TEMPLATE_PATH.'/css/critical.css'); ?>
    </style>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="header">
        Header here...
    </div>
    <div class="content">
