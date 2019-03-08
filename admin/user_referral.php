<?php

/**
 * ECSHOP 会员管理程序
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: users.php 17217 2011-01-19 06:29:08Z liubo $
 */
define('IN_ECS', true);

require (dirname(__FILE__) . '/includes/init.php');
/* 代码增加2014-12-23 by www.68ecshop.com _star */
include_once (ROOT_PATH . '/includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);
/* 代码增加2014-12-23 by www.68ecshop.com _end */

$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'list';

/* 路由 */

$function_name = 'action_' . $action;

if(! function_exists($function_name))
{
	$function_name = "action_list";
}

call_user_func($function_name);

/* 路由 */

/* ------------------------------------------------------ */
// -- 用户帐号列表
/* ------------------------------------------------------ */
function action_list ()
{
	// 全局变量
	$user = $GLOBALS['user'];
	$_CFG = $GLOBALS['_CFG'];
	$_LANG = $GLOBALS['_LANG'];
	$smarty = $GLOBALS['smarty'];
	$db = $GLOBALS['db'];
	$ecs = $GLOBALS['ecs'];
	
	/* 检查权限 */
	admin_priv('users_manage');
	
	$smarty->assign('ur_here', '推荐人业绩统计');
        $user_list = referral_user_statistic();
	//echo '<pre>';print_r($user_list['user_list']);exit;
        $smarty->assign('id',intval($_GET['id']));
	$smarty->assign('user_list', $user_list['user_list']);
	$smarty->assign('filter', $user_list['filter']);
	$smarty->assign('record_count', $user_list['record_count']);
	$smarty->assign('page_count', $user_list['page_count']);
        $smarty->assign('all_users_money',$user_list['all_users_money']);
	$smarty->assign('full_page', 1);
	
	assign_query_info();
	$smarty->display('user_referral.htm');
}

/* ------------------------------------------------------ */
// -- ajax返回用户列表
/* ------------------------------------------------------ */
function action_query ()
{
	// 全局变量
	$smarty = $GLOBALS['smarty'];
	
	$user_list = referral_user_statistic();
	
	$smarty->assign('user_list', $user_list['user_list']);
	$smarty->assign('filter', $user_list['filter']);
	$smarty->assign('record_count', $user_list['record_count']);
	$smarty->assign('page_count', $user_list['page_count']);
        $smarty->assign('all_users_money',$user_list['all_users_money']);

	make_json_result($smarty->fetch('user_referral.htm'), '', array(
		'filter' => $user_list['filter'],'page_count' => $user_list['page_count']
	));
}

function referral_user_statistic()
{	 
    $result = get_filter();
    if ($result === false)
    {
        /* 分页大小 */
        $filter = array();
    	/* 查询条件 */
    	$filter['keywords']      = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);
        $filter['paytime_start'] = empty($_REQUEST['paytime_start']) ? '' : trim($_REQUEST['paytime_start']);
        $filter['paytime_end']   = empty($_REQUEST['paytime_end']) ? '' : trim($_REQUEST['paytime_end']);
        
   	if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
    	{
            $filter['keywords'] = json_str_iconv($filter['keywords']);
   	}
		
        $id = empty($_REQUEST['id']) ? '' : intval($_REQUEST['id']);
        $where = " where u.parent_id = ".$id;
        $w = '';
        if (!empty($filter['keywords']))
        {
            $where .= " AND u.user_name LIKE '%" . mysql_like_quote($filter['keywords']) . "%' or u.mobile_phone like  '%" . mysql_like_quote($filter['keywords']) . "%' ";
        }
	if (!empty($filter['paytime_start'])){
            $w .= $filter['paytime_start'] ? " AND pay_time >= '". strtotime($filter['paytime_start']). "' " :  " ";
        }
        if (!empty($filter['paytime_end'])){
            $w .= $filter['paytime_end'] ? " AND pay_time <= '". strtotime($filter['paytime_end']). "' " :  " ";
        }
	$filter = page_and_size($filter);
        $sql = "SELECT sum(goods_amount) as all_money FROM " . $GLOBALS['ecs']->table('users') . " AS u inner JOIN " . $GLOBALS['ecs']->table('order_info') . " as o ON u.user_id=o.user_id  ".$where.$w." and pay_status = 2";
        $all_users_money = $GLOBALS['db']->getOne($sql);
        $all_users_money = empty($all_users_money)?0:$all_users_money;
        if (!empty($filter['paytime_start']) || !empty($filter['paytime_end'])){
            $count = $GLOBALS['db']->getAll("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('users') . " AS u inner JOIN " . $GLOBALS['ecs']->table('order_info') . " AS o ON u.user_id=o.user_id ".$where." GROUP BY o.user_id");
            //$sql = "SELECT u.user_id, u.user_name, sum(o.goods_amount) as all_money FROM " . $GLOBALS['ecs']->table('users') . " AS u inner JOIN " . $GLOBALS['ecs']->table('order_info') . " AS o ON u.user_id=o.user_id ".$where." GROUP BY o.user_id ORDER by u.user_id desc LIMIT " . $filter['start'] . ',' . $filter['page_size'];
            $sql = "SELECT u.user_id, u.user_name, o.all_money FROM " . $GLOBALS['ecs']->table('users') . " AS u 
                    inner JOIN (SELECT user_id,sum(goods_amount) as all_money from " . $GLOBALS['ecs']->table('order_info') . " where pay_status = 2 ".$w." GROUP BY user_id ) as o
                    ON u.user_id=o.user_id ".$where." GROUP BY o.user_id ORDER by u.user_id desc LIMIT " . $filter['start'] . ',' . $filter['page_size'];
        }else{
            $count = $GLOBALS['db']->getAll("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('users') . " AS u left JOIN " . $GLOBALS['ecs']->table('order_info') . " AS o ON u.user_id=o.user_id ".$where." GROUP BY o.user_id");
            //$sql = "SELECT u.user_id, u.user_name, sum(o.goods_amount) as all_money FROM " . $GLOBALS['ecs']->table('users') . " AS u left JOIN " . $GLOBALS['ecs']->table('order_info') . " AS o ON u.user_id=o.user_id ".$where." GROUP BY o.user_id ORDER by u.user_id desc LIMIT " . $filter['start'] . ',' . $filter['page_size'];
            $sql = "SELECT u.user_id, u.user_name, o.all_money FROM " . $GLOBALS['ecs']->table('users') . " AS u 
                    left JOIN (SELECT user_id,sum(goods_amount) as all_money from " . $GLOBALS['ecs']->table('order_info') . " where pay_status = 2 ".$w." GROUP BY user_id ) as o
                    ON u.user_id=o.user_id ".$where." GROUP BY o.user_id ORDER by u.user_id desc LIMIT " . $filter['start'] . ',' . $filter['page_size'];
        }
        
        $filter['record_count'] = count($count);
        $filter['keywords'] = stripslashes($filter['keywords']);
        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }
    
    $list=array('all_users_money'=>$all_users_money);
    $user_list = $GLOBALS['db']->query($sql);
    while ($row = $GLOBALS['db']->fetchRow($user_list))
    {
        $row['all_money'] = empty($row['all_money'])? '0.00' : $row['all_money'];
        $list['user_list'][] = $row;
    }
    $arr = array(
            'user_list' => $list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']
    );
    return $arr;
}

function referral_user_statistic_()
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
		
        $id = empty($_REQUEST['id']) ? '' : intval($_REQUEST['id']);
        $where = ' where parent_id = '.$id;
        if (!empty($filter['keywords']))
        {
            $where .= " AND user_name LIKE '%" . mysql_like_quote($filter['keywords']) . "%' or mobile_phone like  '%" . mysql_like_quote($filter['keywords']) . "%' ";
        }
		
        $filter['record_count'] = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('users') . $where);

        /* 分页大小 */
        $filter = page_and_size($filter);
        $sql = "SELECT user_id, user_name FROM " . $GLOBALS['ecs']->table('users') . $where . " ORDER by user_id desc LIMIT " . $filter['start'] . ',' . $filter['page_size'];
//echo $sql;
        $filter['keywords'] = stripslashes($filter['keywords']);
        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }
    
    $list=array();
    $user_list = $GLOBALS['db']->query($sql);
    while ($row = $GLOBALS['db']->fetchRow($user_list))
    {
        $all_money = $GLOBALS['db']->getOne("select sum(goods_amount) from ". $GLOBALS['ecs']->table('order_info') ." where user_id=". $row['user_id'] ." and pay_status=2");
        $row['all_money'] = empty($all_money)? '0.00' : $all_money;
        $list[] = $row;
    }
    $arr = array(
            'user_list' => $list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']
    );
    return $arr;
}

?>
