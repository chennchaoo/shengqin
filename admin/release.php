<?php

/**
 * ECSHOP 广告位置管理程序
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: ad_position.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/lib_release.php');
//require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/ads.php');

/* act操作项的初始化 */
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'list';
}
else
{
    $_REQUEST['act'] = trim($_REQUEST['act']);
}

$smarty->assign('lang', $_LANG);
$exc = new exchange($ecs->table("release_information"), $db, 'id', 'title');

/*------------------------------------------------------ */
//-- 发布信息列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $smarty->assign('ur_here',    '发布信息管理');
    //$smarty->assign('action_link', array('text' => $_LANG['position_add'], 'href' => 'ad_position.php?act=add'));
    $smarty->assign('full_page',   1);

    $position_list = release_list();
    //echo '<pre>';print_r($position_list['list']);exit;

    $smarty->assign('list',            $position_list['list']);
    $smarty->assign('filter',          $position_list['filter']);
    $smarty->assign('record_count',    $position_list['record_count']);
    $smarty->assign('page_count',      $position_list['page_count']);

    assign_query_info();
    $smarty->display('release_list.htm');
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $list = release_list();

    $smarty->assign('list',   $list['list']);
    $smarty->assign('filter',          $list['filter']);
    $smarty->assign('record_count',    $list['record_count']);
    $smarty->assign('page_count',      $list['page_count']);

    make_json_result($smarty->fetch('release_list.htm'), '',
        array('filter' => $list['filter'], 'page_count' => $list['page_count']));
}

/*------------------------------------------------------ */
//-- 删除发布信息
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    $id = intval($_GET['id']);
    $exc->drop($id);
    //admin_log('', 'remove', 'ads_position');
    
    $url = 'release.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}
elseif($_REQUEST['act']=='view'){
    $id = intval($_GET['id']);
    $type_id = intval($_GET['type_id']);
    $sql = "SELECT r.*,u.user_name FROM " . $GLOBALS['ecs']->table('release_information') ." as r left join ".$GLOBALS['ecs']->table('users') ." as u on r.user_id=u.user_id where r.id=".$id;
    $info = $db->getRow($sql);
    
    if(isset($info['region_id'])&& !empty($info['region_id'])){
        $area = get_city($info['region_id']);
        if($area){
            $city = get_city($area['parent_id']);
            if($city){
                $province = get_city($city['parent_id']);
            }
        }
        $info['region_id'] = $province['region_name'].'&nbsp;&nbsp;&nbsp;'.$city['region_name'].'&nbsp;&nbsp;&nbsp;'.$area['region_name'];
    }
    
    $info['add_time'] = date('Y-m-d H:i:s',$info['add_time']);
    $info['refresh_time'] = date('Y-m-d H:i:s',$info['refresh_time']);
    $info['into_time'] = date('Y-m-d',$info['into_time']);
    $info['education'] = education($info['education']);
    $info['work_time'] = work_time($info['work_time']);
    //$info['tel'] = substr_replace($info['tel'],'****',3,4);
    if($info['type_id']==4){
        $info['price'] = rent($info['price']);
        $info['huxingshi'] = room($info['huxingshi']);
    }

    if($info['type_id']==5){
        $info['housing_type'] = housingType($info['housing_type']);
        $info['huxingshi'] = huxingshi($info['huxingshi']);
    }
    
    if($info['type_id']==3){
        $info['payment'] = payment($info['payment']);
        $info['housing_type'] = housingType($info['housing_type']);
        $info['orientation'] = orientation($info['orientation']);
        $info['fitment'] = fitment($info['fitment']);
    }
    
    if($info['type_id']==3 && $info['category_id']==2){
        $peizhi = explode(',', $info['allocation']);
        $str = '';
        foreach ($peizhi as $val){
            $str .= allocation($val).'&nbsp;';
        }
        $info['allocation'] = $str;
    }
    
    if($info['type_id']==3 || $info['type_id']==6){
        $info['img'] = explode(';', $info['img']);
    }
    
    //echo '<pre>';print_r($info);exit;
    $smarty->assign('info', $info);
    $smarty->display('release_view.htm');
}

/* 发布信息数据列表 */
function release_list()
{	 
    $result = get_filter();
    if ($result === false)
    {
        /* 分页大小 */
        $filter = array();
    	/* 查询条件 */
    	$filter['keywords']     = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);
        $filter['type_id']     = empty($_REQUEST['type_id']) ? '' : intval($_REQUEST['type_id']);
   	if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
    	{
            $filter['keywords'] = json_str_iconv($filter['keywords']);
            $filter['type_id'] = json_str_iconv($filter['type_id']);
   	}
        $where = '';
        if (!empty($filter['keywords']) && empty($filter['type_id'])) {
            $where = " where r.title LIKE '%" . mysql_like_quote($filter['keywords']) . "%' ";
        }elseif(empty($filter['keywords']) && !empty($filter['type_id'])){
            $where = " where r.type_id=" . $filter['type_id'];
        }elseif(!empty($filter['keywords']) && !empty($filter['type_id'])){
            $where = " where r.title LIKE '%" . mysql_like_quote($filter['keywords']) . "%' and r.type_id=" . $filter['type_id'];
        }
		
        $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('release_information') . " as r left join ".$GLOBALS['ecs']->table('users') ." as u on r.user_id=u.user_id $where";
    	$filter['record_count'] = $GLOBALS['db']->getOne($sql);

        /* 分页大小 */
    	$filter = page_and_size($filter);

        /* 查询数据 */
        $sql = "SELECT r.*,u.user_name FROM " . $GLOBALS['ecs']->table('release_information') ." as r left join ".$GLOBALS['ecs']->table('users') ." as u on r.user_id=u.user_id $where" .
           " ORDER BY r.id desc " .
           "  LIMIT $filter[start],$filter[page_size]";
		set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }
	
	$list = array();
	$query = $GLOBALS['db']->query($sql);
    while ($row = $GLOBALS['db']->fetch_array($query))
    {
        $row['add_time'] = date('Y-m-d H:i:s',$row['add_time']);
        $row['refresh_time'] = date('Y-m-d H:i:s',$row['refresh_time']);
        
        if(isset($row['region_id'])&& !empty($row['region_id'])){
            $area = get_city($row['region_id']);
            if($area){
                $city = get_city($area['parent_id']);
                if($city){
                    $province = get_city($city['parent_id']);
                }
            }
            $row['region_id'] = $province['region_name'].'&nbsp;&nbsp;&nbsp;'.$city['region_name'].'&nbsp;&nbsp;&nbsp;'.$area['region_name'];
        }
        $list[] = $row;
    }
    //echo '<pre>';print_r($list);exit;
    $arr = array('list' => $list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}
?>