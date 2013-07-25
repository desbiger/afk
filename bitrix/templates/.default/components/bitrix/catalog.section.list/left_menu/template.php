<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<?



function GetSubsections($id, $array)
{
	$result = array();
	$m      = $array;
	foreach ($array as $vol) {
		if ($vol['IBLOCK_SECTION_ID'] == $id) {
			$result[] = array(
				'NAME' => $vol['NAME'],
				'EDIT_LINK' => $vol['EDIT_LINK'],
				'IBLOCK_ID' => $vol['IBLOCK_ID'],
				'DELETE_LINK' => $vol['DELETE_LINK'],
				'ID' => $vol['ID'],
				'SUB' => GetSubsections($vol['ID'], $m),
			);
		}
	}
	return $result;
}

function PrintSubLevel($array, $class,$a = false)
{
	$str = '';
	if (count($array) > 0) {
		$str = "<ul class='" . $class . "'>";
		foreach ($array as $vol) {
			$str .= !$a ? "<li>" : "<a>";
			$str .= !$a ? "<span>" : "";
			$str .= $vol['NAME'];
			$str .= !$a ? "</span>" : "";
			if (count($vol['SUB']) > 0) {
				$str .= PrintSubLevel($vol['SUB'], 'spis_sub',true);
			}
			$str .= !$a ? "</li>" : "</a>";
		}
		$str .= "</ul>";
	}
	return $str;
}


foreach ($arResult['SECTIONS'] as $sections) {
	if ($sections['IBLOCK_SECTION_ID'] == '') {
		$tmp_result = array(
			'NAME' => $sections['NAME'],
			'EDIT_LINK' => $sections['EDIT_LINK'],
			'IBLOCK_ID' => $sections['IBLOCK_ID'],
			'DELETE_LINK' => $sections['DELETE_LINK'],
			'ID' => $sections['ID'],
			'SUB' => GetSubsections($sections['ID'], $arResult['SECTIONS'])
		);
		$result[]   = $tmp_result;
	}
}

?>
<!--<pre>--><?//print_r($result)?><!--</pre>-->
<h2>Каталог</h2>
<ul class = "menu_left">
	<?
	foreach ($result as $arSection):
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));?>

		<li>
			<span><?=$arSection['NAME']?></span>
			<?=PrintSubLevel($arSection['SUB'], "spisok_product")?>
		</li>
	<? endforeach?>

</ul>
