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
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/ads.php');

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
$exc = new exchange($ecs->table("train_recruit"), $db, 'id', 'name');

/*------------------------------------------------------ */
//-- 培训招聘报名信息列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $smarty->assign('ur_here',    '培训招聘报名信息');
    //$smarty->assign('action_link', array('text' => $_LANG['position_add'], 'href' => 'ad_position.php?act=add'));
    $smarty->assign('full_page',   1);

    $position_list = train_recruit_list();
    //echo '<pre>';print_r($position_list['list']);exit;

    $smarty->assign('list',            $position_list['list']);
    $smarty->assign('filter',          $position_list['filter']);
    $smarty->assign('record_count',    $position_list['record_count']);
    $smarty->assign('page_count',      $position_list['page_count']);

    assign_query_info();
    $smarty->display('train_list.htm');
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $list = train_recruit_list();

    $smarty->assign('list',   $list['list']);
    $smarty->assign('filter',          $list['filter']);
    $smarty->assign('record_count',    $list['record_count']);
    $smarty->assign('page_count',      $list['page_count']);

    make_json_result($smarty->fetch('train_list.htm'), '',
        array('filter' => $list['filter'], 'page_count' => $list['page_count']));
}

/*------------------------------------------------------ */
//-- 删除培训招聘报名信息
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    $id = intval($_GET['id']);
    $exc->drop($id);
    //admin_log('', 'remove', 'ads_position');
    
    $url = 'train_recruit.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}
elseif($_REQUEST['act']=='view'){
    $id = intval($_GET['id']);
    $sql = " SELECT * FROM " .
           $ecs->table('train_recruit') . " WHERE `id` = " .$id;
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
    $smarty->assign('info', $info);
    $smarty->display('train_recruit_view.htm');
}

/* 获取招聘报名数据列表 */
function train_recruit_list()
{	 
    $result = get_filter();
    if ($result === false)
    {
        /* 分页大小 */
        $filter = array();
    	/* 查询条件 */
    	$filter['keywords']     = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);
   	if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
    	{
            $filter['keywords'] = json_str_iconv($filter['keywords']);
   	}
        //$filter['sort_by']    = empty($_REQUEST['sort_by']) ? 'total_search' : trim($_REQUEST['sort_by']);
       // $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
		
        $where = '';
        if (!empty($filter['keywords']))
        {
            $where = " where name LIKE '%" . mysql_like_quote($filter['keywords']) . "%' ";
        }
		
    	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('train_recruit') . " $where";
    	$filter['record_count'] = $GLOBALS['db']->getOne($sql);

        /* 分页大小 */
    	$filter = page_and_size($filter);

        /* 查询数据 */
    	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('train_recruit') ." $where" .
           " ORDER BY id desc " .
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
        if($row['gender']==1){
            $gender = '男';
        }else{
            $gender = '女';
        }
        $row['gender'] = $gender;
        $row['add_time'] = date('Y-m-d H:i:s',$row['add_time']);
        
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