<?php



function insert_category($id , $parentid , $big , $small)
{
	$settings = "array (
  \'workflowid\' => \'\',
  \'ishtml\' => \'0\',
  \'content_ishtml\' => \'0\',
  \'create_to_html_root\' => \'0\',
  \'template_list\' => \'default\',
  \'category_template\' => \'category\',
  \'list_template\' => \'list\',
  \'show_template\' => \'show\',
  \'meta_title\' => \'\',
  \'meta_keywords\' => \'\',
  \'meta_description\' => \'\',
  \'presentpoint\' => \'\',
  \'defaultchargepoint\' => \'\',
  \'paytype\' => \'0\',
  \'repeatchargedays\' => \'1\',
  \'category_ruleid\' => \'6\',
  \'show_ruleid\' => \'16\',
)";
	$conn = mysql_connect("localhost","root","");
	$sql = "use fuliancms";
	mysql_query($sql , $conn);
	$sql = "set names utf8";
	mysql_query($sql , $conn);


	if (trim($big) != ''){
		$catname = $big;
	}else{
		$catname = $small;
	}
	//die($catname);
	$sql = "INSERT INTO `fuliancms`.`v9_category` (`catid`, `siteid`, `module`, `type`, `modelid`, `parentid`, `arrparentid`, `child`, `arrchildid`, `catname`, `style`, `image`, `description`, `parentdir`, `catdir`, `url`, `items`, `hits`, `setting`, `listorder`, `ismenu`, `sethtml`, `letter`, `usable_type`) VALUES ($id, '1', 'content', '0', '1', '$parentid', '', '0', '', '$catname', '', '', '', '', '$id', '', '0', '0', '$settings', '0', '1', '0', '', '');";
	mysql_query($sql , $conn);




	mysql_close($conn);
}


include('adodb/adodb.inc.php'); 
$db = ADONewConnection('ado_access'); 
$access = realpath('./data.mdb'); 
$myDSN = 'PROVIDER=Microsoft.Jet.OLEDB.4.0;'.'DATA SOURCE='. $access . ';'."Jet OLEDB:Database Password=;"; 


$db->Connect($myDSN); 
$recordSet = $db->Execute('select * from HN_newscla'); 
if (!$recordSet) 
print $db->ErrorMsg(); 
else 
while (!$recordSet->EOF) { 
		$rs = $recordSet->fields;
		$id = $rs[0];
		var_dump($id);		
		$big  = $recordSet->fields[1];
		$small  = $recordSet->fields[2];
		$parentid = (int)$recordSet->fields[3];
		$big = iconv("GBK", "UTF-8", $big);
		$small = iconv("GBK", "UTF-8", $small);
		echo "inserting...";
		insert_category($id , $parentid , $big , $small);
		//echo $name , "<br>";
		$recordSet->MoveNext();
} 

$recordSet->Close(); 
$db->Close(); 
?>