<?php

defined('APPLICATION_PATH')
||define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/'));

set_include_path(implode(PATH_SEPARATOR, array(
					       realpath(APPLICATION_PATH. '/'),
					       get_include_path()
					       )));
require_once 'Zend/Loader/Autoloader.php';
$loader = Zend_Loader_Autoloader::getInstance();
$loader->registerNamespace("Zend");


class dynaform {

	protected $param;


	public function __construct()
	{
		$this->param = array(
			'host' => 'localhost',
			'username' => 'root',
			'password' => '99034203',
			'dbname' => 'fuliancms'
		);
	}

	public function formatPost($p)
	{
		$ret = array();
		$ret['name'] = $p['name'];
		$ret['telphone'] = $p['telphone'];
		$ret['email'] = $p['email'];
		$ret['mailaddress'] = $p['mailaddress'];
		$ret['address'] = $p['address'];
		$ret['subject'] = $p['subject'];
		$ret['content'] = $p['content'];
		return $ret;
	}

	public function add_ldxx($data){
		$db = Zend_Db::factory('Mysqli' , $this->param);		
		$data = $this->formatPost($data);
		$data['itype'] = 'ldxx';
		$db->query("set names utf8");
		$db->insert('v9_dynaform1' , $data);
		echo "<script>alert('数据提交成功！');location.href='http://www.imwalk.org/tmt_temp/index.html';</script>";
		return true;
	}

	public function add_tzh($data)
	{
		$db = Zend_Db::factory('Mysqli' , $this->param);		
		$data = $this->formatPost($data);
		$data['itype'] = 'tzh';
		$db->query("set names utf8");
		$db->insert('v9_dynaform1' , $data);
		echo "<script>alert('数据提交成功！');location.href='http://www.imwalk.org/tmt_temp/index.html';</script>";
		return true;
	}

	public function add_jyxc($data)
	{
		$db = Zend_Db::factory('Mysqli' , $this->param);		
		$data = $this->formatPost($data);
		$data['itype'] = 'jyxc';
		$db->query("set names utf8");
		$db->insert('v9_dynaform1' , $data);
		echo "<script>alert('数据提交成功！');location.href='http://www.imwalk.org/tmt_temp/index.html';</script>";
		return true;
	}

	public function add_zmjt($data)
	{
		$db = Zend_Db::factory('Mysqli' , $this->param);		
		$data = $this->formatPost($data);
		$data['itype'] = 'zmjt';
		$db->query("set names utf8");
		$db->insert('v9_dynaform1' , $data);
		echo "<script>alert('数据提交成功！');location.href='/index.php?m=content&c=index&a=lists&catid=128';</script>";
		return true;
	}	
}

$c = new dynaform();
switch ($_GET['fid']){
	case 'ldxx':
		$c->add_ldxx($_POST);
		break;
	case 'tzh':
		$c->add_tzh($_POST);
		break;
	case 'jyxc':
		$c->add_jyxc($_POST);
		break;
	case 'zmjt':
		$c->add_zmjt($_POST);
		break;
	default:
	 	break;
}

