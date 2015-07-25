<?php
define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR );
include PHPCMS_PATH.'/phpcms/base.php';

$categorys = getcache('category_content_1','commons');



function get_keywords($data, $number = 3) {
	$data = trim(strip_tags($data));
    if(empty($data)) return '';
	$http = pc_base::load_sys_class('http');
	if(CHARSET != 'utf-8') $data = iconv('utf-8', CHARSET, $data);
	else $data = iconv('utf-8', 'gbk', $data);
	$http->post(API_URL_GET_KEYWORDS, array('siteurl'=>SITE_URL, 'charset'=>CHARSET, 'data'=>$data, 'number'=>$number));
	if($http->is_ok()) {
		if(CHARSET != 'utf-8') return $http->get_data();
		else return iconv('gbk', 'utf-8', $http->get_data());
	}
	return '';
}

function addart($catid , $title , $content )
{
		$info=array();
		$info['catid'] = $catid;
		$info['title'] = $title;
		$info['content'] = $content;
		$db_config = pc_base::load_config('database');
		pc_base::load_sys_class('mysql', '', 0);
		pc_base::load_sys_class('param', '', 0);
		$db = pc_base::load_model('content_model');

		$category = $categorys[3];
		$modelid = $category['modelid'];
		$db->set_model($modelid);

		$setting = string2array($category['setting']);
		$workflowid = $setting['workflowid'];
		$info['status'] = 99;

		$info['keywords'] = get_keywords($info['title'], 3);
		$info['description'] = str_cut(str_replace(array("\r\n","\t",'[page]','[/page]','&ldquo;','&rdquo;','&nbsp;'), '', strip_tags($info['content'])),200);
		$info['username'] = "admin";
		$info['inputtime'] = '';

		if($db->add_content($info)) return true;
		return false;
}