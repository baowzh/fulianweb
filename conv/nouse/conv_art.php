<?php
ini_set('max_execute_time' , 0);



function insert_article($id , $catid ,$title , $keyword , $content , $inputtime , $copyfrom )
{
	$conn = mysql_connect("localhost","root","");
	$sql = "use fuliancms";
	mysql_query($sql , $conn);
	$sql = "set names utf8";
	mysql_query($sql , $conn);

	$sql = "INSERT INTO `v9_news` (`id`, `catid`, `typeid`, `title`, `style`, `thumb`, `keywords`, `description`, `posids`, `url`, `listorder`, `status`, `sysadd`, `islink`, `username`, `inputtime`, `updatetime`) VALUES
($id, $catid, 0, '$title', '', '', '$keyword', '', 0, '', 0, 99, 1, 0, 'admin', '$inputtime', '$inputtime');";



	mysql_query($sql , $conn);
	//echo "$sql" , "<br>";
	echo ".";


	$sql = "INSERT INTO `v9_news_data` (`id`, `content`, `readpoint`, `groupids_view`, `paginationtype`, `maxcharperpage`, `template`, `paytype`, `relation`, `voteid`, `allow_comment`, `copyfrom`) VALUES ($id, '$content', 0, '', 0, 10000, '', 0, '', 0, 1, '$copyfrom');";

	mysql_query($sql , $conn);
	//echo "$sql" , "<br>";
	echo "+";

	mysql_close($conn);

		//echo mysql_error();
	//die;

}

include('adodb/adodb.inc.php'); 

$db = ADONewConnection('ado_access'); 
$access = realpath('./data.mdb'); 
$myDSN = 'PROVIDER=Microsoft.Jet.OLEDB.4.0;'.'DATA SOURCE='. $access . ';'."Jet OLEDB:Database Password=;"; 

$db->Connect($myDSN); 
$recordSet = $db->Execute('select * from HN_News'); 
if (!$recordSet) 
print $db->ErrorMsg(); 
else 
while (!$recordSet->EOF) { 
		//print $recordSet->fields[0].' '.$recordSet->fields[1].'<BR>'; 
		//$recordSet->MoveNext(); 
		//$id = $recordSet->fields[0];
		//$name  = $recordSet->fields[1];
		//$parentid = $recordSet->fields[2];
		//$name = iconv("GBK", "UTF-8", $name);
		//echo "inserting...";
		//insert_category($id , $parentid , $name);
		//echo $name , "<br>"

		//insert_article($id , $catid ,$title , $keyword , $content , $inputtime , $copyfrom)

		$id = $recordSet->fields[0];
		$catid = $recordSet->fields[10];
		$title = $recordSet->fields[1];
		$title = iconv("GBK", "UTF-8", $title);

		$keyword = $recordSet->fields[7];
		$keyword = iconv("GBK", "UTF-8", $keyword);

		$content = $recordSet->fields[5];
		$content = iconv("GBK", "UTF-8", $content);
		//preg_match_all("'<\s*a\s.*?href\s*=\s*([\"\'])?(?(1)(.*?)\\1|([^\s\>]+))[^>]*>?(.*?)</a>'isx",$document,$links); 
		$content = preg_replace("'<\s*a\s.*?href\s*=\s*([\"\'])?(?(1)(.*?)\\1|([^\s\>]+))[^>]*>?(.*?)</a>'isx", "", $content);
		
		$author = $recordSet->fields[7];
		$author = iconv("GBK", "UTF-8", $author);

		$copyfrom = $recordSet->fields[8];
		$copyfrom = iconv("GBK", "UTF-8", $copyfrom);

		$inputtime = $recordSet->fields[11];
		//$inputtime = strtotime($inputtime);
		//echo $inputtime;

		//$thumb = $recordSet->fields[16];
		

		//echo $title , $id , "<br> ";

		insert_article($id , $catid ,$title , $keyword , $content , $inputtime , $copyfrom );


		$recordSet->MoveNext();
		//die();
} 

$recordSet->Close(); # 选择性执行 
$db->Close(); # 选择性执行 



/*

truncate table v9_news;

truncate table v9_news_data;

*/

?>



