<?php
// Load modules
\Bitrix\Main\Loader::includeModule('iblock');

// Configs
CJSCore::Init([]);
global $APPLICATION, $USER;
global $BXU;

// Get settings
$arFilter = ['IBLOCK_ID' => 2, 'ID' => 3];
$arSelect = ['ID', 'IBLOCK_ID', 'PROPERTY_*'];
$dbRes = \CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
while ($ob = $dbRes->GetNextElement()) {
    $arPropsDB = $ob->GetProperties();
    $arProps = [];
    foreach($arPropsDB as $k => $v){
        if(is_array($v['VALUE'])){
            foreach($v['VALUE'] as $val){
                $arProps[$k] = trim($val);
            }
        }else{
            $arProps[$k] = trim($v['VALUE']);
        }
    }
    define("SETTINGS", $arProps);
}