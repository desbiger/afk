<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
	$sql = "
	SELECT *
	FROM
	  b_iblock_element as el
	  WHERE
	   el.IBLOCK_ID = 5
	   ORDER BY RAND()
	   LIMIT 5
	";
	global $DB;
	$res      = $DB->Query($sql);
	$t        = $res->GetNext();
	$arResult = $t;


	$this->IncludeComponentTemplate();

?>