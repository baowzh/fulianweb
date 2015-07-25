<?php
/*
 * 客户端被动接收phpsso服务端通知
 * 服务端通知内容:同步登陆、退出，同步积分设置、对换比率，同步添加、删除用户、修改用户密码，测试通信状态
 * 
 */
defined('IN_PHPCMS') or exit('No permission resources.'); 
$session_storage = 'session_'.pc_base::load_config('system','session_storage');
pc_base::load_sys_class($session_storage);
$checkcode = pc_base::load_sys_class('checkcode');
if (isset($_GET['code_len']) && intval($_GET['code_len'])) $checkcode->code_len = intval($_GET['code_len']);
if ($checkcode->code_len > 8 || $checkcode->code_len < 2) {
	$checkcode->code_len = 4;
}
if (isset($_GET['font_size']) && intval($_GET['font_size'])) $checkcode->font_size = intval($_GET['font_size']);
if (isset($_GET['width']) && intval($_GET['width'])) $checkcode->width = intval($_GET['width']);
if ($checkcode->width <= 0) {
	$checkcode->width = 130;
}
if (isset($_GET['height']) && intval($_GET['height'])) $checkcode->height = intval($_GET['height']);
if ($checkcode->height <= 0) {
	$checkcode->height = 50;
}
if (isset($_GET['font_color']) && trim(urldecode($_GET['font_color'])) && preg_match('/(^#[a-z0-9]{6}$)/im', trim(urldecode($_GET['font_color'])))) $checkcode->font_color = trim(urldecode($_GET['font_color']));
if (isset($_GET['background']) && trim(urldecode($_GET['background'])) && preg_match('/(^#[a-z0-9]{6}$)/im', trim(urldecode($_GET['background'])))) $checkcode->background = trim(urldecode($_GET['background']));
if(!function_exists('ob_gzhandler')) ob_clean();
$filename=$checkcode->doimage();
$_SESSION['code']=$checkcode->get_code();
$returncode=array(patch=>SITE_PROTOCOL.SITE_URL.WEB_PATH.'validcode/'.$filename);
$json = json_encode($array);
return $json;
?>