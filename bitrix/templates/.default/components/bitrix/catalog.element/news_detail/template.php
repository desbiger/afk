<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<h2><?=$arResult['NAME']?></h2>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "-"
	), false);?>
<?$img = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'],array('width'=>315 , 'height' => 315))?>
<div class = "pic_img">
	<div class = "center">
		<img src = "<?=$img['src']?>" alt = "">
	</div>
</div>

<div class = "clear"></div>

<h4>ОПИСАНИЕ</h4>
<p><?=preg_replace("#(\/.*\.[jpg,JPG])#","http://afc-project.ru$1",$arResult['~DETAIL_TEXT'])?></p>