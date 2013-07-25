<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<h2>Объекты</h2>
<div class = "main_img">
	<img src = "<?= CFile::GetPath($arResult[0]['DETAIL_PICTURE']) ?>" alt = "">

	<div class = "about">
		<h3><?=$arResult[0]['NAME']?></h3>

		<a href = "/objects/<?= $arResult[0]['ID'] ?>/">Подробнее о проекте </a>
	</div>
</div>
<ul class = "restaurant">
	<?foreach ($arResult as $key => $vol): ?>
		<li>
			<img src = "/bitrix/templates/index/image/pic1.jpg" alt = "">
			<a href = "#">Viet Cafe, ресторан</a>
		</li>
	<? endforeach?>

</ul>