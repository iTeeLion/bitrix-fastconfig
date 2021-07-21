<?php

/*
 *  Customize MAIN
 */
AddEventHandler("main", "OnProlog", "OnProlog_Handler");
function OnProlog_Handler()
{
    $assets_file = $_SERVER['DOCUMENT_ROOT'] . '/local/assets/assets.php';
    if(!\CSite::InDir('/bitrix/') && is_file($assets_file)){
    	include_once($assets_file);
    }
}

/*
 *  User
 */

// OnBeforeUserRegister
AddEventHandler('main', 'OnBeforeUserRegister', 'OnBeforeUserRegister_Handler');
function OnBeforeUserRegister_Handler(&$arFields)
{
}
// OnAfterUserRegister
AddEventHandler('main', 'OnAfterUserRegister', 'OnAfterUserRegister_Handler');
function OnAfterUserRegister_Handler($arFields)
{
}

/*
 *  Iblock
 */

//OnAfterIBlockElementAdd
AddEventHandler('iblock', 'OnAfterIBlockElementAdd', 'OnAfterIBlockElementAdd_Handler');
function OnAfterIBlockElementAdd_Handler($arFields)
{
}
// OnAfterIBlockElementUpdate
AddEventHandler('iblock', 'OnAfterIBlockElementUpdate', 'OnAfterIBlockElementUpdate_Handler');
function OnAfterIBlockElementUpdate_Handler($arFields)
{
}
// OnAfterIBlockElementSetPropertyValuesEx
AddEventHandler('iblock', 'OnAfterIBlockElementSetPropertyValuesEx', 'OnAfterIBlockElementSetPropertyValuesEx_Handler');
function OnAfterIBlockElementSetPropertyValuesEx_Handler($elementId, $iblockId, $propertyValues)
{
}

/*
 *  Sale
 */

// OnSaleOrderSaved (Сохранение заказа D7)
\Bitrix\Main\EventManager::getInstance()->addEventHandler('sale', 'OnSaleOrderSaved', 'OnSaleOrderSaved_Handler');
function OnSaleOrderSaved_Handler(\Bitrix\Main\Event $event)
{
$order = $event->getParameter("ENTITY");
}
//OnSaleComponentOrderOneStepPersonType (оформление заказа)
AddEventHandler("sale", "OnSaleComponentOrderOneStepPersonType", "OnSaleComponentOrderOneStepPersonType_Handler");
function OnSaleComponentOrderOneStepPersonType_Handler(&$arResult, &$arUserResult, $arParams)
{
}
//OnSaleComponentOrderOneStepFinal (после создания заказа)
AddEventHandler('sale', 'OnSaleComponentOrderOneStepFinal', 'OnSaleComponentOrderOneStepFinal_Handler');
function OnSaleComponentOrderOneStepFinal_Handler($id, $arOrder, $arParams)
{
}

/*
 *  CRM - Invoice
 */

// OnAfterCrmInvoiceAdd
AddEventHandler('crm', 'OnAfterCrmInvoiceAdd', 'OnAfterCrmInvoiceAdd_Handler');
function OnAfterCrmInvoiceAdd_Handler($arFields)
{
}
// OnAfterCrmInvoiceUpdate
AddEventHandler('crm', 'OnAfterCrmInvoiceUpdate', 'OnAfterCrmInvoiceUpdate_Handler');
function OnAfterCrmInvoiceUpdate_Handler($arFields)
{
}
// OnAfterCrmInvoiceSetStatus
AddEventHandler('crm', 'OnAfterCrmInvoiceSetStatus', 'OnAfterCrmInvoiceSetStatus_Handler');
function OnAfterCrmInvoiceSetStatus_Handler($arFields)
{
}

/*
 *  CRM - Deal
 */

// OnAfterCrmDealAdd
AddEventHandler("crm", "OnAfterCrmDealAdd", "OnAfterCrmDealAdd_Handler");
function OnAfterCrmDealAdd_Handler($arFields)
{
}
// OnAfterCrmDealUpdate
AddEventHandler("crm", "OnAfterCrmDealUpdate", "OnAfterCrmDealUpdate_Handler");
function OnAfterCrmDealUpdate_Handler($arFields)
{
}
// OnAfterCrmDealProductRowsSave
AddEventHandler("crm", "OnAfterCrmDealProductRowsSave", "OnAfterCrmDealProductRows_Handler");
function OnAfterCrmDealProductRows_Handler($id, $rows)
{
}

/*
 *  CRM - Companies
 */

// OnAfterCrmCompanyAdd
AddEventHandler('crm', 'OnAfterCrmCompanyAdd', 'OnAfterCrmCompanyAdd_Handler');
function OnAfterCrmCompanyAdd_Handler($arFields)
{
}
// OnAfterCrmCompanyUpdate
AddEventHandler('crm', 'OnAfterCrmCompanyUpdate', 'OnAfterCrmCompanyUpdate_Handler');
function OnAfterCrmCompanyUpdate_Handler($arFields)
{
}

/*
 *  CRM - Requisites
 */
// OnAfterRequisiteAdd
AddEventHandler("crm", "OnAfterRequisiteAdd", "OnAfterRequisiteAdd_Handler");
function OnAfterRequisiteAdd_Handler($arFields)
{
}
// OnAfterRequisiteUpdate
AddEventHandler("crm", "OnAfterRequisiteUpdate", "OnAfterRequisiteUpdate_Handler");
function OnAfterRequisiteUpdate_Handler($arFields)
{
}
