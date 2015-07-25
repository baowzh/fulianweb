<?php
ini_set('max_execute_time' , 0);
ini_set('time_zone' , 'Asia/ShangHai');

$sid = $_GET['sid'];

$oldid = $_GET['o'];
$newid = $_GET['n'];





function insert_article($id , $catid ,$title , $keyword , $content , $inputtime , $copyfrom , $thumb = null)
{
	$conn = mysql_connect("localhost","root","99034203" , false);
	$sql = "use fuliancms";
	mysql_query($sql , $conn);
	$sql = "set names utf8";
	mysql_query($sql , $conn);

	$iid =  $id;

	$sql = "INSERT INTO `v9_news` (`id`, `catid`, `typeid`, `title`, `style`, `thumb`, `keywords`, `description`, `posids`, `url`, `listorder`, `status`, `sysadd`, `islink`, `username`, `inputtime`, `updatetime`) VALUES
(null, $catid, 0, '$title', '', '$thumb', '$keyword', '', 0, '', 0, 99, 1, 0, 'admin', '$inputtime', '$inputtime');";



	mysql_query($sql , $conn);
	//echo "$sql" , "<br>";
	echo ".";
	
	$aid = mysql_insert_id();


	$sql = "INSERT INTO `v9_news_data` (`id`, `content`, `readpoint`, `groupids_view`, `paginationtype`, `maxcharperpage`, `template`, `paytype`, `relation`, `voteid`, `allow_comment`, `copyfrom`) VALUES ($aid, '$content', 0, '', 0, 10000, '', 0, '', 0, 1, '$copyfrom');";

	mysql_query($sql , $conn);
	//echo "$sql" , "<br>";
	echo "+";

	mysql_close($conn);

		//echo mysql_error();
	//die;

}

function conv($oid , $nid )
{
include('adodb/adodb.inc.php'); 

$db = ADONewConnection('ado_access'); 
$access = realpath('./data.mdb'); 
$myDSN = 'PROVIDER=Microsoft.Jet.OLEDB.4.0;'.'DATA SOURCE='. $access . ';'."Jet OLEDB:Database Password=;"; 

$db->Connect($myDSN); 
$recordSet = $db->Execute("select * from HN_News where class = $oid"); 
if (!$recordSet) 
print $db->ErrorMsg(); 
else 
while (!$recordSet->EOF) { 

		$id = $recordSet->fields[0];
		$catid = $recordSet->fields[10];
		$title = $recordSet->fields[1];
		$title = iconv("GBK", "UTF-8", $title);

		$keyword = $recordSet->fields[7];
		$keyword = iconv("GBK", "UTF-8", $keyword);

		$content = $recordSet->fields[5];
		$content = iconv("GBK", "UTF-8", $content);
		//preg_match_all("'<\s*a\s.*?href\s*=\s*([\"\'])?(?(1)(.*?)\\1|([^\s\>]+))[^>]*>?(.*?)</a>'isx",$document,$links); 
		//$content = preg_replace("'<\s*a\s.*?href\s*=\s*([\"\'])?(?(1)(.*?)\\1|([^\s\>]+))[^>]*>?(.*?)</a>'isx", "", $content);
		
		$author = $recordSet->fields[7];
		$author = iconv("GBK", "UTF-8", $author);

		$copyfrom = $recordSet->fields[8];
		$copyfrom = iconv("GBK", "UTF-8", $copyfrom);

		$inputtime = $recordSet->fields[11];
		$inputtime = strtotime($inputtime);

		$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/";  
		preg_match_all($pattern,$content,$match);  
		//print_r($match); 
		if (isset($match[1][0])) {
			//echo $match[1][0] , "\r\n";
			$thumb = $match[1][0];
			$ret = strpos($thumb , 'www.nmwomen.org.cn');
			if ($ret === false)
			{
				$thumb = "http://www.nmwomen.org.cn".$thumb;
			}
			insert_article($id , $nid ,$title , $keyword , $content , $inputtime , $copyfrom  , $thumb);
		}
		else
		{
			insert_article($id , $nid ,$title , $keyword , $content , $inputtime , $copyfrom  , null);
		}
	
		//die;


		


		$recordSet->MoveNext();		
} 

$recordSet->Close(); 
$db->Close(); 

}





conv(57,3);


/*
conv(5,16);
conv(6,18);
conv(7,19);
conv(29,34);
conv(30,34);
conv(28,34);
conv(45,30);
conv(45,31);
conv(46,50);
conv(41,52);
conv(42,51);

conv(48,57);
conv(47,54);
conv(10,20);
conv(43,4);
conv(13,70);
conv(14,55);
conv(35,20);
conv(38,22);
conv(39,22);
conv(56,3);


*/

