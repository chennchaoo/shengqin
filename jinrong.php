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

/* 获得请求的分类 ID */
if (isset($_REQUEST['id']))
{
    $cat_id = intval($_REQUEST['id']);
}
elseif (isset($_REQUEST['category']))
{
    $cat_id = intval($_REQUEST['category']);
}
else
{
    /* 如果分类ID为0，则返回首页 */
    ecs_header("Location: ./\n");

    exit;
}

//$cat_id = 10;


/* 初始化分页信息 */
$page = isset($_REQUEST['page'])   && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;
/* 获得页面的缓存ID */
$cache_id = sprintf('%X', crc32($cat_id. '-' . $page . '-' . $_CFG['lang']));
if (!$smarty->is_cached('jinrong_list.dwt', $cache_id))
{
    assign_template();

    $position = assign_ur_here('','胜亲金融');
    $smarty->assign('page_title',       $position['title']);    // 页面标题
    $smarty->assign('ur_here',          $position['ur_here']);  // 当前位置
    
    $size = 12;
    $children = get_children($cat_id);
    
    $count  = jinrong_count($children);
    $pages  = ($count > 0) ? ceil($count / $size) : 1;
    if ($page > $pages) {
        $page = $pages;
    }
    $param = array('id'=>$cat_id);
    $goodslist = jinrong_list($children, $cat_id, $size, $page);
    $smarty->assign('goodslist', $goodslist);
    $smarty->assign('categories1'     ,    get_categories_(get_parent_($cat_id)));
    $smarty->assign('helps',            get_shop_help()); // 网店帮助;
    $smarty->assign('pager',get_pager('jinrong.php', $param, $count, $page, $size));
}
$smarty->display('jinrong_list.dwt');

function jinrong_count($children){
    $where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND  $children ";
    $sql = "SELECT  COUNT(*) FROM " . $GLOBALS['ecs']->table('goods') ." as g ".
           " WHERE $where ORDER BY g.goods_id desc";
    return $GLOBALS['db']->getOne($sql);
}

function jinrong_list($children, $cat_id, $size, $page){ 
    $where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND  $children ";
    $sql = "SELECT g.goods_id, g.goods_name, g.goods_thumb, g.goods_img FROM " . $GLOBALS['ecs']->table('goods') ." as g ".
           " WHERE $where ORDER BY g.goods_id desc";

    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);
    $arr = array();
    $i= 1;
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $arr[$row['goods_id']]['goods_id']    = $row['goods_id'];
        $arr[$row['goods_id']]['name']        = mb_substr($row['goods_name'],0,34,'utf-8');
        $arr[$row['goods_id']]['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['url']         = 'jinrong_info.php?id='.$row['goods_id'].'&cat_id='.$cat_id;
        $arr[$row['goods_id']]['i']           =$i;
        $i++;
    }
    //echo '<pre>';print_r($arr);
    return $arr;
}
/* 代码增加_start  By  www.68ecshop.com */
make_html();
/* 代码增加_end   By  www.68ecshop.com */
?>