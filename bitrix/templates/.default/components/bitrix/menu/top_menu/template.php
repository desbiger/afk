<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>

<? if (!empty($arResult)): ?>
	<ul class = "menu_top">
		<?foreach ($arResult as $vol): ?>
			<li><a href = "<?=$vol['LINK']?>"><?=$vol['TEXT']?></a></li>
		<? endforeach?>

	</ul>
<? endif ?>