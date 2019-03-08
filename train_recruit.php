<?php

/**
 * ECSHOP 文章内容
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

if (empty($_REQUEST['act'])){
    $cache_id = sprintf('%X', crc32($_CFG['lang']));

    if (!$smarty->is_cached('train_recruit.dwt', $cache_id))
    {
        assign_template();

        $position = assign_ur_here('','培训招聘');
        $smarty->assign('page_title',       $position['title']);    // 页面标题
        $smarty->assign('ur_here',          $position['ur_here']);  // 当前位置

        /* 文章详情 */
        $article = get_article_info($article_id);

        $smarty->assign('helps',            get_shop_help()); // 网店帮助
        $smarty->assign('article',      $article);
        $smarty->assign('keywords',     htmlspecialchars($article['keywords']));
        $smarty->assign('description', htmlspecialchars($article['description']));
        $smarty->assign('province_list', get_regions(1, 1));
    }
    $smarty->display('train_recruit.dwt');
}
elseif ($_REQUEST['act'] == 'insert') {
    $name = trim($_POST['name']);
    $gender = intval($_POST['gender']);
    $birthday  = $_POST['birthdayYear'] . '-' . $_POST['birthdayMonth'] . '-' . $_POST['birthdayDay'];
    $tel = trim($_POST['tel']);
    $region_id = intval($_POST['region_id']);
    $remark = trim($_POST['remark']);
    $user_id = !empty($_SESSION['user_id'])?$_SESSION['user_id']:'';
    $add_time = time();
    
    $sql = "INSERT INTO " . $ecs->table('train_recruit') . "(name, birthday ,gender, tel, region_id, remark, user_id, add_time)" .
               "VALUES ( '$name', $birthday, '$gender', '$tel', '$region_id', '$remark', '$user_id', $add_time)";
    $db->query($sql);
    $id = $db->insert_id();
    if($id){
        show_message('您已报名成功！','返回报名页', 'train_recruit.php');
    }else{
        show_message('报名失败！','返回报名页，重新填写信息', 'train_recruit.php');
    }
}elseif ($_REQUEST['act'] == 'region') {
    $region_type = intval($_POST['region_type']);
    $parentid = intval($_POST['parentId']);
    $arr = get_regions($region_type,$parentid);
    if(!empty($arr)){
        foreach ($arr as $val){
            $v .="<option value=".$val['region_id'].">".$val['region_name']."</option>";
        }
    }
    echo json_encode($v);
    exit;
}elseif ($_REQUEST['act'] == 'cert') {
	$sql = 'select * from ecs_goods where is_delete =0 AND cert_no = "'.$_GET['cert_no'].'"';
	$info = $db->getRow($sql);
	if(!$info['cert_no']){
		$sql = "SELECT name AS goods_name,age,gender,work_time AS experience,img AS cert_img FROM ecs_release_information 
				WHERE cert_no='".$_GET['cert_no']."'";
		$info = $db->getRow($sql);
	}
	//$sql = "SELECT name AS goods_name,age,gender,work_time AS experience,img AS cert_img";
	//
	echo json_encode($info);
}
/*------------------------------------------------------ */
//-- PRIVATE FUNCTION
/*------------------------------------------------------ */

/**
 * 获得指定的文章的详细信息
 *
 * @access  private
 * @param   integer     $article_id
 * @return  array
 */
function get_article_info($article_id)
{
    /* 获得文章的信息 */
    $sql = "SELECT a.*, IFNULL(AVG(r.comment_rank), 0) AS comment_rank ".
            "FROM " .$GLOBALS['ecs']->table('article'). " AS a ".
            "LEFT JOIN " .$GLOBALS['ecs']->table('comment'). " AS r ON r.id_value = a.article_id AND comment_type = 1 ".
            "WHERE a.is_open = 1 AND a.article_id = '$article_id' GROUP BY a.article_id";
    $row = $GLOBALS['db']->getRow($sql);

    if ($row !== false)
    {
        $row['comment_rank'] = ceil($row['comment_rank']);                              // 用户评论级别取整
        $row['add_time']     = local_date($GLOBALS['_CFG']['date_format'], $row['add_time']); // 修正添加时间显示

        /* 作者信息如果为空，则用网站名称替换 */
        if (empty($row['author']) || $row['author'] == '_SHOPHELP')
        {
            $row['author'] = $GLOBALS['_CFG']['shop_name'];
        }
    }

    return $row;
}

/**
 * 获得文章关联的商品
 *
 * @access  public
 * @param   integer $id
 * @return  array
 */
function article_related_goods($id)
{
    $sql = 'SELECT g.goods_id, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
                'g.market_price, g.promote_price, g.promote_start_date, g.promote_end_date ' .
            'FROM ' . $GLOBALS['ecs']->table('goods_article') . ' ga ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' AS g ON g.goods_id = ga.goods_id ' .
            "LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                    "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
            "WHERE ga.article_id = '$id' AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0";
    $res = $GLOBALS['db']->query($sql);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $arr[$row['goods_id']]['goods_id']      = $row['goods_id'];
        $arr[$row['goods_id']]['goods_name']    = $row['goods_name'];
        $arr[$row['goods_id']]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
            sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $arr[$row['goods_id']]['goods_thumb']   = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['goods_img']     = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$row['goods_id']]['market_price']  = price_format($row['market_price']);
        $arr[$row['goods_id']]['shop_price']    = price_format($row['shop_price']);
        $arr[$row['goods_id']]['url']           = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);

        if ($row['promote_price'] > 0)
        {
            $arr[$row['goods_id']]['promote_price'] = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $arr[$row['goods_id']]['formated_promote_price'] = price_format($arr[$row['goods_id']]['promote_price']);
        }
        else
        {
            $arr[$row['goods_id']]['promote_price'] = 0;
        }
    }

    return $arr;
}
/* 代码增加_start  By  www.68ecshop.com */
make_html();
/* 代码增加_end   By  www.68ecshop.com */
?>