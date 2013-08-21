<?
$arUrlRewrite = array(
	array(
		"CONDITION"	=>	"#^/products/(.*)/(.*)/(.*)#",
		"RULE"	=>	"ELEMENT_ID=$2",
		"ID"	=>	"",
		"PATH"	=>	"/products/detail_page.php",
	),
	array(
		"CONDITION"	=>	"#^/products/(.*)/(.*)#",
		"RULE"	=>	"SECTION_ID=$1",
		"ID"	=>	"",
		"PATH"	=>	"/products/index.php",
	),
	array(
		"CONDITION"	=>	"#^/news/(.*)/(.*)#",
		"RULE"	=>	"ELEMENT_ID=$1",
		"ID"	=>	"",
		"PATH"	=>	"/news/news_detail.php",
	),
	array(
		"CONDITION"	=>	"#^/services/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:catalog",
		"PATH"	=>	"/services/index.php",
	),
);

?>