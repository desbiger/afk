<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<pre><?print_r($arResult)?></pre>
<?
$res = CIBlockSection::GetByID($_REQUEST['SECTION_ID']);
$section = $res->Fetch();
?>
<div class = "cont_center">
	<h2><?=$section['NAME']?></h2>
	<?foreach ($arResult as $tovar): ?>
		<div class = "tovar">
			<div class = "img_tovar">
				<a href = "<?= $tovar['DETAIL_PAGE_URL'] ?>">
					<img src = "<?= $tovar['DETAIL_PICTURE']['SRC'] ?>" alt = "">
				</a>
			</div>
			<a href = "#" class = "link"><?=$tovar['NAME']?></a>

			<p>105 000 р.</p>
		</div>
	<? endforeach?>



	<ul class = "nav">
		<li><a href = "#">Предыдущий</a></li>
		<li><a href = "#">1</a></li>
		<li><a href = "#">2</a></li>
		<li><a href = "#">3</a></li>
		<li><a href = "#">4</a></li>
		<li><a href = "#">5</a></li>
		<li><a href = "#">6</a></li>
		<li><a href = "#">7</a></li>
		<li><a href = "#">8</a></li>
		<li><a href = "#">9</a></li>
		<li><a href = "#">10</a></li>
		<li><a href = "#">Следующий</a></li>
	</ul>

</div>
