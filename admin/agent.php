<?php

/**
 * ECSHOP 代理商管理程序
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: agent.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
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
$exc = new exchange($ecs->table("agent"), $db, 'id', 'name');

/*------------------------------------------------------ */
//-- 代理商信息列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $smarty->assign('ur_here',    '代理商列表');
    $smarty->assign('action_link', array('text' => '添加代理商', 'href' => 'agent.php?act=add'));
    $smarty->assign('full_page',   1);

    $position_list = agent_list();
    //echo '<pre>';print_r($position_list['list']);exit;

    $smarty->assign('list',            $position_list['list']);
    $smarty->assign('filter',          $position_list['filter']);
    $smarty->assign('record_count',    $position_list['record_count']);
    $smarty->assign('page_count',      $position_list['page_count']);

    assign_query_info();
    $smarty->display('agent_list.htm');
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $list = agent_list();

    $smarty->assign('list',   $list['list']);
    $smarty->assign('filter',          $list['filter']);
    $smarty->assign('record_count',    $list['record_count']);
    $smarty->assign('page_count',      $list['page_count']);

    make_json_result($smarty->fetch('agent_list.htm'), '',
        array('filter' => $list['filter'], 'page_count' => $list['page_count']));
}

/*------------------------------------------------------ */
//-- 删除代理商
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    $id = intval($_GET['id']);
    $exc->drop($id);
    //admin_log('', 'remove', 'ads_position');
    
    $url = 'agent.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}
elseif($_REQUEST['act']=='view'){
    $id = intval($_GET['id']);
    $sql = " SELECT * FROM " .
           $ecs->table('agent') . " WHERE `id` = " .$id;
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
    $smarty->assign('info', $info);
    $smarty->display('agent_view.htm');
}
elseif($_REQUEST['act']=='add'){
    $join_time = local_date('Y-m-d');
    $smarty->assign('info',array('join_time' => $join_time,'enabled' => 1));

    $smarty->assign('province_list', get_regions(1,1));
    
    $smarty->assign('ur_here',       '添加代理商');
    $smarty->assign('action_link',   array('href' => 'agent.php?act=list', 'text' => '代理商列表'));

    $smarty->assign('form_act', 'insert');
    $smarty->assign('action',   'add');

    assign_query_info();
    $smarty->display('agent_info.htm');
}
elseif($_REQUEST['act']=='insert'){
    $name      = $_POST['name'];
    $company_name = $_POST['company_name'];
    $id_card = trim($_POST['id_card']);
    $contract_start_time = trim($_POST['contract_start_time']);
    $contract_end_time   = trim($_POST['contract_end_time']);
    $manage_price = trim($_POST['manage_price']);
    $address      = trim($_POST['address']);
    $gender    = $_POST['gender'];
    $tel       = $_POST['tel'];
    $birthday  = $_POST['birthdayYear'] . '-' . $_POST['birthdayMonth'] . '-' . $_POST['birthdayDay'];
    $join_time = $_POST['join_time'];
    $agent_time = $_POST['agent_time'];
    $agent_products = $_POST['agent_products'];
    $province_id      = $_POST['province'];
    $city_id      = $_POST['city'];
    $region_id      = $_POST['district'];
    $remark         = $_POST['remark'];
    $add_time       = time();
    
    $sql = 'INSERT INTO ' . $ecs->table('agent') . ' (`name`, `company_name`, `id_card`, `contract_start_time`, `contract_end_time`, `manage_price`, `gender`, `tel`, `birthday`, `join_time`,`agent_time`, `agent_products`, `province_id`,`city_id`,`region_id`, `address`, `remark`, `add_time`) '.
            " VALUES ('$name','$company_name','$id_card','$contract_start_time','$contract_end_time','$manage_price','$gender','$tel','$birthday','$join_time','$agent_time','$agent_products','$province_id','$city_id','$region_id','$address','$remark','$add_time')";
    $db->query($sql);

    $link[0]['text'] = '继续添加';
    $link[0]['href'] = 'agent.php?act=add';

    $link[1]['text'] = '返回列表';
    $link[1]['href'] = 'agent.php?act=list';
    
    sys_msg('操作成功',0, $link);
}
elseif($_REQUEST['act']=='edit'){
    $join_time = local_date('Y-m-d');
    $smarty->assign('info',array('join_time' => $join_time,'enabled' => 1));
    
    $sql = "SELECT * FROM " . $ecs->table('agent') . " WHERE id=".intval($_GET['id']);
    $info = $db->GetRow($sql);
        
    $smarty->assign('ur_here',       '修改代理商');
    $smarty->assign('action_link',   array('href' => 'agent.php?act=list', 'text' => '代理商列表'));
    
    $province = array();
    if($info['province_id']){
        $province = get_city($info['province_id']);
        $info['province'] = $province['region_name'];
    }
    
    $city = array();
    if($info['city_id']){
        $city = get_city($info['city_id']);
        $info['city'] = $city['region_name'];
    }
    
    $region = array();
    if($info['region_id']){
        $region = get_city($info['region_id']);
        $info['region'] = $region['region_name'];
    }
    
    //$smarty->assign('country_list', get_regions());
    $province_list = get_regions(1, 1);
    $city_list = get_regions(2, $info['province_id']);
    $district_list = get_regions(3, $info['city_id']);

    $smarty->assign('province_list', $province_list);
    $smarty->assign('city_list', $city_list);
    $smarty->assign('district_list', $district_list);
    //echo '<pre>';print_r($district_list);
    $smarty->assign('info',$info);

    $smarty->assign('form_act', 'update');

    assign_query_info();
    $smarty->display('agent_info.htm');
}
elseif($_REQUEST['act']=='update'){
    $id        = $_POST['id'];
    $name      = $_POST['name'];
    $company_name = $_POST['company_name'];
    $id_card = trim($_POST['id_card']);
    $contract_start_time = trim($_POST['contract_start_time']);
    $contract_end_time   = trim($_POST['contract_end_time']);
    $manage_price = trim($_POST['manage_price']);
    $address      = trim($_POST['address']);
    $gender    = $_POST['gender'];
    $tel       = $_POST['tel'];
    $birthday  = $_POST['birthdayYear'] . '-' . $_POST['birthdayMonth'] . '-' . $_POST['birthdayDay'];
    $join_time = $_POST['join_time'];
    $agent_time = $_POST['agent_time'];
    $agent_products = $_POST['agent_products'];
    $province_id      = $_POST['province'];
    $city_id      = $_POST['city'];
    $region_id      = $_POST['district'];
    $remark         = $_POST['remark'];
    $add_time       = time();
    $sql = "update " . $ecs->table('agent') .
            " set `name`='$name',`company_name`='$company_name',`id_card`='$id_card',".
            "`contract_start_time`='$contract_start_time',`contract_end_time`='$contract_end_time',".
            "`manage_price`='$manage_price',`gender`='$gender',`tel`='$tel',".
            "`birthday`='$birthday',`join_time`='$join_time',`agent_time`='$agent_time',`agent_products`='$agent_products',".
            "`province_id`='$province_id',`city_id`='$city_id',`region_id`='$region_id',`remark`='$remark',`add_time`='$add_time' where id = " .  intval($id);
    //echo $sql;exit;
    $db->query($sql);

    /* 提示信息 */
    $links[0]['text'] = '返回列表';
    $links[0]['href'] = 'agent.php?act=list&' . list_link_postfix();
    $links[1]['text'] = $_LANG['go_back'];
    $links[1]['href'] = 'javascript:history.back()';

    sys_msg($_LANG['update_success'], 0, $links);
}

/* 获取代理商数据列表 */
function agent_list()
{	 
    $result = get_filter();
    if ($result === false)
    {
        /* 分页大小 */
        $filter = array();
    	/* 查询条件 */
    	$filter['keywords']   = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);
        $filter['start_time'] = empty($_REQUEST['start_time']) ? '' : trim($_REQUEST['start_time']);
        $filter['end_time']   = empty($_REQUEST['end_time']) ? '' : trim($_REQUEST['end_time']);
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
        
        $w = '';
	if (!empty($filter['start_time'])){
            $w .= $filter['start_time'] ? " AND shipping_time_end >= '". strtotime($filter['start_time']). "' " :  " ";
        }
        if (!empty($filter['end_time'])){
            $w .= $filter['end_time'] ? " AND shipping_time_end <= '". strtotime($filter['end_time']). "' " :  " ";
        }
        
    	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('agent') . " $where";
    	$filter['record_count'] = $GLOBALS['db']->getOne($sql);

        /* 分页大小 */
    	$filter = page_and_size($filter);

        /* 查询数据 */
    	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('agent') ." $where" .
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
        
        $sql = "SELECT sum(goods_amount) as all_money from " . $GLOBALS['ecs']->table('order_info') . " where district=".$row['region_id']." and shipping_status = 2 ".$w."";
        $all_money = $GLOBALS['db']->getOne($sql);
        if(empty($all_money)){
            $all_money = '0.00';
        }
        $row['all_money'] = $all_money;
        $province = array();
        if($row['province_id']){
            $province = get_city($row['province_id']);
            $row['province'] = $province['region_name'];
        }

        $city = array();
        if($row['city_id']){
            $city = get_city($row['city_id']);
            $row['city'] = $city['region_name'];
        }

        $region = array();
        if($row['region_id']){
            $region = get_city($row['region_id']);
            $row['region'] = $region['region_name'];
        }
        $list[] = $row;
    }

    $arr = array('list' => $list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}
?>