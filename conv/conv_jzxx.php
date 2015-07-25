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
$access = realpath('./jzxx.mdb'); 
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





//conv(57,3);

conv(59,36);
conv(60,37);
conv(61,38);
conv(62,39);
conv(63,40);
conv(64,41); 