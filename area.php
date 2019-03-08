<?php

/**
 * ECSHOP 证书反查文件
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: wangleisvn $
 * $Id: index.php 16075 2009-05-22 02:19:40Z wangleisvn $
*/
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
if($_REQUEST['act'] == 'index'){
    $data = getRegions(2);
    $arr = array();
    foreach ($data as $key=>$val) {
        $a = getFirstCharter($val['region_name']);//以这个首字母作为key
        $arr[$a][$key]['region_id'] =  $val['region_id'];
        $arr[$a][$key]['region_name'] =  $val['region_name'];
        $arr[$a][$key]['url'] = urlencode($val['region_name']);
    }
    $smarty->assign('arr',   $arr);
    $smarty->display('area.dwt');
}elseif ($_REQUEST['act']=='changecity') {
    $region_id = $_GET['region_id'];
    $region_name = $_GET['city_name'];
    setcookie("city", $region_id);
    setcookie("city_name",$region_name);
    ecs_header("Location: index.php\n");
    exit;
}
?>