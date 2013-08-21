<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<?
$res = CIBlockSection::GetByID($_REQUEST['SECTION_ID']);
$section = $res->Fetch();
$s = CIBlockSection::GetList(null, array('SECTION_ID' => $_REQUEST['SECTION_ID']));
$sections = array();
while ($t = $s->GetNext()) {
	$sections[] = $t;
}
?>
<div class = "cont_center">
	<h2><?=$section['NAME']?></h2>
	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
			"START_FROM" => "0",
			"PATH" => "",
			"SITE_ID" => "-"
		), false);?>
	<?if (count($sections) > 0): ?>
		<? foreach ($sections as $section): ?>
			<a href="<?=$section['SECTION_PAGE_URL']?>">
				<div class = "product_section">
					<img>
					<h5><?=$section['NAME']?></h5>
				</div>
			</a>
		<? endforeach ?>
	<? endif?>

	<?foreach ($arResult['ITEMS'] as $tovar): ?>
		<? $img = CFile::ResizeImageGet($tovar['DETAIL_PICTURE'], array(
			'width' => 141,
			'height' => 101
		)) ?>
		<div class = "tovar">
			<div class = "img_tovar">
				<a href = "<?= $tovar['DETAIL_PAGE_URL'] ?>">
					<img src = "<?= $img['src'] ?>" alt = "">
				</a>
			</div>
			<a href = "#" class = "link"><?=$tovar['NAME']?></a>

			<p>105 000 р.</p>
		</div>
	<? endforeach?>



	<?=$arResult['NAV_STRING']?>

</div>
