<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_IBLOCK_DESC_LIST"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LIST_DESC"),
	"ICON" => "/images/news_list.gif",
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "mcart",
		"CHILD" => array(
			"ID" => "Agent",
			"NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
			"SORT" => 3,
			
		),
	),
);
