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
		<? if ($key > 0): ?>
				<?$img = CFile::ResizeImageGet($vol['DETAIL_PICTURE'],array('width' => 233,'height' => 154))?>
			<li>
				<img src = "<?=$img['src']?>" alt = "">
				<a href = "/objects/<?=$vol['ID']?>/"><?=$vol['NAME']?></a>
			</li>
		<? endif ?>
	<? endforeach?>

</ul>