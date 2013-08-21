<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<h2>Список новостей</h2>
<? foreach ($arResult['ITEMS'] as $vol): ?>
	<? $img = CFile::ResizeImageGet($vol['DETAIL_PICTURE']['ID'], array(
		'width' => 53,
		'height' => 53
	)) ?>
	<?
	$monthes = array(
		'01' => 'января',
		'02' => 'февраля',
		'03' => 'марта',
		'04' => 'апреля',
		'05' => 'мая',
		'06' => 'июня',
		'07' => 'июля',
		'08' => 'августа',
		'09' => 'сентября',
		'10' => 'октября',
		'11' => 'ноября',
		'12' => 'декабря',
	);
	$date    = $vol['ACTIVE_FROM'];
	$month   = preg_replace("/(\d{2})\.(\d{2})\.(\d{4}).*/isU", "$2", $date);
	$month   = $monthes[$month];
	$date    = preg_replace("/(\d{2})\.(\d{2})\.(\d{4}).*/", "$1 $month $3", $date);
	?>
	<div class = "list">
		<div class = "img_conteyner">
			<img src = "<?= $img['src'] ?>" alt = "">
		</div>
		<div class="text_conteyner">
			<span><?=$date?></span>
			<a href = "<?= $vol['DETAIL_PAGE_URL'] ?>"><?=substr($vol['NAME'], 0, 150)?>...</a>
			<span class="font1 white_grey"><?=strip_tags($vol['~PREVIEW_TEXT'])?></span>
		</div>
	</div>
	<div class = "clear"></div>
	<hr>
<? endforeach ?>
