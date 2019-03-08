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

/* 获得当前页码 */
$page   = !empty($_REQUEST['page'])  && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;

/* 获得页面的缓存ID */
$cache_id = sprintf('%X', crc32($page . '-' . $_CFG['lang']));

if (!$smarty->is_cached('agent.dwt', $cache_id))
{
    assign_template();

    $position = assign_ur_here('','代理商');
    $smarty->assign('page_title',       $position['title']);    // 页面标题
    $smarty->assign('ur_here',          $position['ur_here']);  // 当前位置
    
    $size   = 20;
    $keywords = '';
    $goon_keywords = ''; //继续传递的搜索关键词
    $param = array();
    if (isset($_REQUEST['keywords']) && !empty($_REQUEST['keywords'])) {
        $keywords = addslashes(htmlspecialchars(urldecode(trim($_REQUEST['keywords']))));

        $smarty->assign('search_value',    stripslashes(stripslashes($keywords)));
        $count  = get_agent_count($keywords);
        
        $goon_keywords = urlencode($_REQUEST['keywords']);
        $param = array('keywords'=>$goon_keywords);
    }else {
        $count  = get_agent_count();
    }
    
    $pages  = ($count > 0) ? ceil($count / $size) : 1;
    if ($page > $pages) {
        $page = $pages;
    }
    
    $smarty->assign('agent_list', get_agent_list($page, $size ,$keywords));
    /* 分页 */
    $smarty->assign('pager',get_pager('agent.php', $param, $count, $page, $size));
    
    $smarty->assign('helps',            get_shop_help()); // 网店帮助
}
$smarty->display('agent.dwt');

/**
 * 获得代理商列表
 *
 * @access  public
 * @param   integer $name
 * @return  array
 */
function get_agent_list($page = 1, $size = 20 ,$name='')
{
    //增加搜索条件，如果有搜索内容就进行搜索    
    if ($name != '')
    {
        $sql = 'SELECT *  FROM ' .$GLOBALS['ecs']->table('agent') . ' WHERE name like \'%' . $name . '%\' ORDER BY id DESC';
    }
    else 
    {
        $sql = 'SELECT *  FROM ' .$GLOBALS['ecs']->table('agent') . ' ORDER BY id DESC';
    }

    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page-1) * $size);

    $arr = array();
    if ($res)
    {
        while ($row = $GLOBALS['db']->fetchRow($res))
        {
            $id = $row['id'];
            $province = array();
            if($row['province_id']){
                $province = get_city($row['province_id']);
                $arr[$id]['province'] = $province['region_name'];
            }

            $city = array();
            if($row['city_id']){
                $city = get_city($row['city_id']);
                $arr[$id]['city'] = $city['region_name'];
            }

            $region = array();
            if($row['region_id']){
                $region = get_city($row['region_id']);
                $arr[$id]['region'] = $region['region_name'];
            }
            
            $arr[$id]['id']         = $id;
            $arr[$id]['name']       = $row['name'];
            $arr[$id]['company_name'] = $row['company_name'];
            $arr[$id]['contract_start_time'] = $row['contract_start_time'];
            $arr[$id]['contract_end_time'] = $row['contract_end_time'];
            $arr[$id]['address'] = $row['address'];
            $arr[$id]['gender']  = $row['gender'];
            $arr[$id]['tel']      = $row['tel'];
            $arr[$id]['birthday']      = $row['birthday'];
            $arr[$id]['join_time']      = $row['join_time'];
            $arr[$id]['agent_time']      = $row['agent_time'];
            $arr[$id]['agent_products']      = $row['agent_products'];
            //$arr[$id]['region_id']      = $row['region_id'];
            $arr[$id]['url']         = build_uri('agent', array('id'=>$id), $row['name']);
        }
    }

    return $arr;
}

/**
 * 获得指定分类下的文章总数
 *
 * @param   integer     $cat_id
 *
 * @return  integer
 */
function get_agent_count($name='')
{
    global $db, $ecs;
    if ($name != '')
    {
        $count = $db->getOne('SELECT COUNT(*) FROM ' . $ecs->table('agent') . ' WHERE name like \'%' . $name . '%\'');
    }
    else
    {
        $count = $db->getOne("SELECT COUNT(*) FROM " . $ecs->table('agent'));
    }
    return $count;
}

/* 代码增加_start  By  www.68ecshop.com */
make_html();
/* 代码增加_end   By  www.68ecshop.com */
?>