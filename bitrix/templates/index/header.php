<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8"/>
	<title>AFK</title>
<?$APPLICATION->ShowHead()?>
	<link href = "/bitrix/templates/index/css/style.css" type = "text/css" rel = "stylesheet">
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery-1.7.min.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.orbit-1.2.3.min.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.jcarousel.min.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/scripts.js"></script>
</head>
<body>
<?$APPLICATION->ShowPanel()?>
<div id = "wrapper">

<div id = "header">
	<h1>
		<a href = "#">
			<img src = "/bitrix/templates/index/image/logo.png" alt = "">
		</a>
	</h1>

	<div class = "share">
		<h3>ПОДЕЛИТЬСЯ С ДРУЗЬЯМИ:</h3>
		<ul class = "share_but">
			<li><a href = "#" class = "twit"></a></li>
			<li><a href = "#" class = "face"></a></li>
			<li><a href = "#" class = "t"></a></li>
		</ul>
	</div>

	<div class = "phone">
		<h3>8 (906) 572-05-92</h3>

		<p>Москва, Новослободская
		   улица, 3, стр. 3 </p>
	</div>

	<div class = "clear"></div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top_menu",
	Array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => ""
	)
);?>
	<div class = "search">
		<form action = "#" method = "post">
			<input type = "text" name = "text" class = "text"/>
			<input type = "submit" name = "submit" value = "" class = "sub"/>
		</form>
	</div>
</div>

<div id = "slide">
	<div class = "slide_left">
		<div id = "featured">
			<img src = "/bitrix/templates/index/image/slide1.jpg" alt = ""/>
			<img src = "/bitrix/templates/index/image/slide1.jpg" alt = ""/>
			<img src = "/bitrix/templates/index/image/slide1.jpg" alt = ""/>
		</div>
	</div>

	<div class = "slide_right">
		<ul id = "mycarousel" class = "jcarousel jcarousel-skin-tango">
			<li><img src = "/bitrix/templates/index/image/slide2.jpg" alt = ""></li>
			<li><img src = "/bitrix/templates/index/image/slide3.jpg" alt = ""></li>
			<li><img src = "/bitrix/templates/index/image/slide2.jpg" alt = ""></li>
			<li><img src = "/bitrix/templates/index/image/slide3.jpg" alt = ""></li>
			<li><img src = "/bitrix/templates/index/image/slide2.jpg" alt = ""></li>
			<li><img src = "/bitrix/templates/index/image/slide3.jpg" alt = ""></li>
		</ul>
	</div>
</div>

<div id = "content">
	<div class = "sidebar_L">

		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"left_menu",
			Array(
				"IBLOCK_TYPE" => "products",
				"IBLOCK_ID" => "2",
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_CODE" => "",
				"SECTION_URL" => "",
				"COUNT_ELEMENTS" => "Y",
				"TOP_DEPTH" => "3",
				"SECTION_FIELDS" => "",
				"SECTION_USER_FIELDS" => "",
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y"
			)
		);?>
	</div>
	<div class = "sidebar_R">
