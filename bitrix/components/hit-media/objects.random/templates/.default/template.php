<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<h2>Объекты</h2>
<div class = "main_img">
	<img src = "<?=CFile::GetPath($arResult['DETAIL_PICTURE'])?>" alt = "">

	<div class = "about">
		<h3><?=$arResult['NAME']?></h3>

		<a href = "/objects/<?=$arResult['ID']?>/">Подробнее о проекте </a>
	</div>
</div>