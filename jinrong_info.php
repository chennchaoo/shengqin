<?php

/**
 * ECSHOP 代理商
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liuhui $
 * $Id: article.php 17069 2010-03-26 05:28:01Z liuhui $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}
$cat_id = intval($_REQUEST['cat_id']);
$position = assign_ur_here('','胜亲金融');
$smarty->assign('page_title',       $position['title']);    // 页面标题
$smarty->assign('ur_here',          $position['ur_here']);  // 当前位置

assign_template();
$id = intval($_GET['id']);
$sql = "SELECT goods_name, goods_thumb, goods_img, goods_desc FROM " . $GLOBALS['ecs']->table('goods') .
           " WHERE goods_id =".intval($id);
$info = $GLOBALS['db']->GetRow($sql);
$smarty->assign('info',$info);
$smarty->assign('categories1'     ,    get_categories_(get_parent_($cat_id)));
$smarty->assign('helps',            get_shop_help()); // 网店帮助;
$smarty->display('jinrong_info.dwt');
/* 代码增加_start  By  www.68ecshop.com */
make_html();
/* 代码增加_end   By  www.68ecshop.com */
?>