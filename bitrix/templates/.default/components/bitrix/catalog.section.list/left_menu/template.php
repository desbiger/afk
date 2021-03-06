<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<?



function GetSubsections($id, $array)
{
	$result = array();
	$m      = $array;
	foreach ($array as $vol) {
		if ($vol['IBLOCK_SECTION_ID'] == $id) {
			$result[] = array(
				'NAME' => $vol['NAME'],
				'SECTION_PAGE_URL' => $vol['SECTION_PAGE_URL'],
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

function PrintSubLevel($array, $class, $a = false, $display = false)
{
	$str  = '';
	$show = $display ? "style='display:block!important'" : "";
	if (count($array) > 0) {
		$str = "<ul class='" . $class . "' " . $show . ">";
		foreach ($array as $vol) {
			$selected = $_REQUEST['SECTION_ID'] == $vol['ID'] ? "style='font-weight:bold!important;'" : "";
			$str .= !$a ? "<li>" : "<a {$selected} href='" . $vol['SECTION_PAGE_URL'] . "'>";
			$str .= !$a ? "<a {$selected} href='" . $vol['SECTION_PAGE_URL'] . "'>" : "";
			$str .= $vol['NAME'];
			$str .= !$a ? "</a>" : "";
			if (count($vol['SUB']) > 0) {
				$str .= PrintSubLevel($vol['SUB'], 'spis_sub', true);
			}
			$str .= !$a ? "</li>" : "</a>";
		}
		$str .= "</ul>";
	}
	return $str;
}

function CheckOnOpen($array, $variable)
{
	$result = false;
	foreach ($array as $vol) {
		if ($_REQUEST[$variable] == $vol['ID'] && !$result) {
			$result = true;
		}
	}
	return $result;
}


foreach ($arResult['SECTIONS'] as $sections) {
	if ($sections['IBLOCK_SECTION_ID'] == '') {
		$tmp_result = array(
			'NAME' => $sections['NAME'],
			'SECTION_PAGE_URL' => $sections['SECTION_PAGE_URL'],
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
			<?=PrintSubLevel($arSection['SUB'], "spisok_product", false, CheckOnOpen($arSection['SUB'], 'SECTION_ID'))?>
		</li>
	<? endforeach?>

</ul>
