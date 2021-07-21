<?php
if(!CSite::InDir('/bitrix/')){

	global $APPLICATION;
    $APPLICATION->AddHeadScript('/local/assets/js/script.js', true);
    $APPLICATION->SetAdditionalCSS('/local/assets/css/style.css');

}
?>