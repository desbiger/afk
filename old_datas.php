<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<?
CModule::IncludeModule('iblock');
require_once("old/news.php");
$el = new CIBlockElement();
?>
<?foreach($news as &$art):?>
	<?
	$art['date'] = date('d.m.Y 00:00',$art['date']);
	preg_match("#(\/.*\.jpg)#iU",$art['txt'],$match);
	?>
<!--		<pre>--><?//print_r($match)?><!--</pre>-->
		<?
 $img = $match[1]? "http://afc-project.ru".$match[1]:"";

	$datas = array(
		'IBLOCK_ID' => 1,
		'ACTIVE_FROM' => $art['date'],
		'NAME' => $art['title'],
		'DETAIL_TEXT' => $art['txt'],
		'XML_ID' => $art['id'],
		'SORT' => $art['position'],
	);
	if($img_array = CFile::MakeFileArray($img)){
		$datas['DETAIL_PICTURE'] = $img_array;
	}
	if($el->add($datas)){

	}else{
		echo $el->LAST_ERROR;
	};
	?>
<?endforeach?>
<!--<pre>--><?//print_r($news)?><!--</pre>-->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php"); ?>
