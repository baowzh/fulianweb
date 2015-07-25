<?php
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');
$parentid = $menu_db->insert(array('name'=>'mail', 'parentid'=>10, 'm'=>'mail', 'c'=>'mail', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);
$menu_db->insert(array('name'=>'edit_mail', 'parentid'=>$parentid, 'm'=>'mail', 'c'=>'mail', 'a'=>'edit', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
$menu_db->insert(array('name'=>'delete_mail', 'parentid'=>$parentid, 'm'=>'mail', 'c'=>'mail', 'a'=>'delete', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
$menu_db->insert(array('name'=>'mail_setting', 'parentid'=>$parentid, 'm'=>'mail', 'c'=>'mail', 'a'=>'setting', 'data'=>'', 'listorder'=>0, 'display'=>'1'));
$menu_db->insert(array('name'=>'add_type', 'parentid'=>$parentid, 'm'=>'mail', 'c'=>'mail', 'a'=>'add_type', 'data'=>'', 'listorder'=>0, 'display'=>'1'));
$menu_db->insert(array('name'=>'list_type', 'parentid'=>$parentid, 'm'=>'mail', 'c'=>'mail', 'a'=>'list_type', 'data'=>'', 'listorder'=>0, 'display'=>'1'));

$language = array('mail'=>'互动-领导信箱', 'edit_mail'=>'回复信息', 'delete_mail'=>'删除信息', 'mail_setting'=>'模块配置', 'add_type'=>'添加分类', 'list_type'=>'分类管理');
?>