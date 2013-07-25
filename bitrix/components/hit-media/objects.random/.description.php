<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => "Random objects",
	"DESCRIPTION" => "Добавляет объявление в определенный раздел",
	"ICON" => "/images/icon.gif",
	"SORT" => 10,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "hit-media", // for example "my_project"
		"CHILD" => array(
			"ID" => "saleboard_add", // for example "my_project:services"
			"NAME" => "Objects",  // for example "Services"
		),
	),
	"COMPLEX" => "N",
);


?>