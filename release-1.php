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
require(ROOT_PATH . 'includes/lib_release.php');

if ((DEBUG_MODE & 2) != 2) {
    $smarty->caching = true;
}

$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';

/* 如果是显示页面，对页面进行相应赋值 */
if($action)
{
    assign_template();
    $smarty->assign('helps', get_shop_help()); // 网店帮助
    $smarty->assign('action', $action);
    $smarty->assign('lang', $_LANG);
}

/* 路由 */
$function_name = 'action_' . $action;
if(! function_exists($function_name))
{
    $function_name = "action_default";
}
call_user_func($function_name);

/**
 * @desc 我要做家政
 */
function action_default ()
{
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];

    $position = assign_ur_here('', '我要做家政');
    $smarty->assign('page_title', $position['title']);    // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);  // 当前位置
    
    $id = intval($_GET['id']);
    if(!empty($id)){
        $info = release_info($id);
        //echo '<pre>';print_r($info);exit;
		$smarty->assign('city_list', get_regions(2, $info['province_id']));
		$smarty->assign('district_list', get_regions(3, $info['city_id']));
        $smarty->assign('info',$info);
    }

    $smarty->assign('education', education());
    $smarty->assign('work_time', work_time());
    $smarty->assign('province_list', get_regions(1, 1));

    $smarty->display('release.dwt');
}

function action_do_housewifery(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];
    
    $name = trim($_POST['name']);
    $gender = intval($_POST['gender']);
	$age = intval($_POST['age']);
    $tel = trim($_POST['tel']);
    $title = trim($_POST['title']);
    $work_time = intval($_POST['work_time']);
    $education = intval($_POST['education']);
    $type_id = intval($_POST['type_id']);
    $price = intval($_POST['price']);
    $address = trim($_POST['address']);
    $content = trim($_POST['content']);
    $region_id = intval($_POST['region_id']);
    $user_id = $_SESSION['user_id'];
    $add_time = time();
    $refresh_time = time();
    
	$id = intval($_POST['id']);
	if($id){
		$sql = 'update ' . $ecs->table('release_information') . " set name = '$name',gender='$gender',age='$age',tel='$tel',title='$title',work_time='$work_time',education='$education',price='$price',content = '$content',region_id = '$region_id',address = '$address',refresh_time = '$refresh_time' where id=".$id;
		$query = $db->query($sql);
		if($query > 0) {
			show_message('操作成功！', '返回上一页', 'release.php?act=default&id='.$id);
		} else {
			show_message('操作失败！', '返回上一页，重新填写信息', 'release.php?act=default&id='.$id);
		}
	}else{
		$sql = "INSERT INTO " . $ecs->table('release_information') . "(user_id, name, gender, age, tel, title, work_time, education, type_id, price, content, region_id, address, add_time, refresh_time)" .
				"VALUES ( '$user_id', '$name', '$gender', '$age', '$tel', '$title', '$work_time', '$education', '$type_id', '$price', '$content', '$region_id', '$address', '$add_time','$refresh_time')";
		//echo $sql;exit;
		$db->query($sql);
		$id = $db->insert_id();
		if($id){
			show_message('操作成功！','返回上一页', 'release.php');
		}else{
			show_message('操作失败！','返回上一页，重新填写信息', 'release.php');
		}
	}
}

/**
 * @desc 我要找家政
 */
function action_housewifery(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];
    
    $position = assign_ur_here('', '我要找家政');
    $smarty->assign('page_title', $position['title']);    // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);  // 当前位置

	$id = intval($_GET['id']);
    if(!empty($id)){
        $info = release_info($id);
        //echo '<pre>';print_r($info);exit;
		$smarty->assign('city_list', get_regions(2, $info['province_id']));
		$smarty->assign('district_list', get_regions(3, $info['city_id']));
        $smarty->assign('info',$info);
    }
    
    $smarty->assign('education', education());
    $smarty->assign('work_time', work_time());
    $smarty->assign('province_list', get_regions(1, 1));
    
    $smarty->display('housewifery.dwt');
}

/**
 * @desc 我要找家政操作
 */
function action_find_housewifery(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];
    
    $name = trim($_POST['name']);
    $tel = trim($_POST['tel']);
    $title = trim($_POST['title']);
    $work_time = intval($_POST['work_time']);
    $education = intval($_POST['education']);
    $type_id = intval($_POST['type_id']);
    $price = intval($_POST['price']);
    $address = trim($_POST['address']);
    $content = trim($_POST['content']);
    $region_id = intval($_POST['region_id']);
    $user_id = $_SESSION['user_id'];
    $add_time = time();
    $refresh_time = time();
    
	$id = intval($_POST['id']);
	if($id){
		$sql = 'update ' . $ecs->table('release_information') . " set name = '$name',tel='$tel',title='$title',work_time='$work_time',education='$education',type_id='$type_id',price='$price',content = '$content',region_id = '$region_id',address = '$address',refresh_time = '$refresh_time' where id=".$id;
		$query = $db->query($sql);
		if($query > 0) {
			show_message('操作成功！', '返回上一页', 'release.php?act=housewifery&id='.$id);
		} else {
			show_message('操作失败！', '返回上一页，重新填写信息', 'release.php?act=housewifery&id='.$id);
		}
	}else{
		$sql = "INSERT INTO " . $ecs->table('release_information') . "(user_id, name, tel, title, work_time, education, type_id, price, content, region_id, address, add_time, refresh_time)" .
				"VALUES ( '$user_id', '$name', '$tel', '$title', '$work_time', '$education', '$type_id', '$price', '$content', '$region_id', '$address', '$add_time','$refresh_time')";
		$db->query($sql);
		$id = $db->insert_id();
		if($id){
			show_message('操作成功！','返回上一页', 'release.php?act=housewifery');
		}else{
			show_message('操作失败！','返回上一页，重新填写信息', 'release.php?act=housewifery');
		}
	}
}

/**
 * @desc 出租
 */
function action_rental(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];
    
    $position = assign_ur_here('', '租房');
    $smarty->assign('page_title', $position['title']);    // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);  // 当前位置

    $id = intval($_GET['id']);
    if(!empty($id)){
        $info = release_info($id);
        $info['allocation'] = explode(',', $info['allocation']);
        //echo '<pre>';print_r($info);exit;
        $smarty->assign('city_list', get_regions(2, $info['province_id']));
        $smarty->assign('district_list', get_regions(3, $info['city_id']));
        $smarty->assign('info',$info);
    }
    
    $smarty->assign('province_list', get_regions(1, 1));
    $smarty->assign('housingType',housingType());
    $smarty->assign('orientation',  orientation());
    $smarty->assign('payment',  payment());
    $smarty->assign('allocation',allocation());
    
    $smarty->display('rental.dwt');
}

/**
 * @desc 出租操作
 */
function action_do_rental(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $bedroom = '';
    $gender = '';
    $housing_type = '';
    $orientation = '';
    $fitment = '';
    $bedgender = '';
    
    $user_id = $_SESSION['user_id'];
    $name = trim($_POST['name']);
    $tel = trim($_POST['tel']);
    $category_id = intval($_POST['category_id']);//出租方式
    $district_name = trim($_POST['district_name']);
    $region_id = intval($_POST['district']);
    $address = trim($_POST['address']);
    $huxingshi = intval($_POST['huxingshi']);
    $huxingting = intval($_POST['huxingting']);
    $huxingwei = intval($_POST['huxingwei']);
    if($category_id==1){
        $acreage = intval($_POST['total_area']);//总面积 
    }elseif($category_id==2){
        $acreage = intval($_POST['area']);//单间面积
        $bedroom = intval($_POST['bedroom']);
        $gender = intval($_POST['gender']);
        $housing_type = intval($_POST['housing_type']);
        $orientation = intval($_POST['orientation']);
        $fitment = intval($_POST['fitment']);
    }elseif($category_id==3){
        $gender = intval($_POST['bedgender']);
    }
    $louceng = intval($_POST['louceng']);
    $zonglouceng = intval($_POST['zonglouceng']);
    $allocation = implode(',',$_POST['allocation']);//房屋配置，字符串
    $price = intval($_POST['price']);
    $payment = intval($_POST['payment']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $img = empty($_POST['zufang'])?'':implode(';',$_POST['zufang']);
    $type_id = 3;
    $add_time = time();
    $refresh_time = time();
    $id = intval($_POST['id']);
	if($id){
		$sql = 'update ' . $ecs->table('release_information') . " set name = '$name',gender='$gender', tel='$tel',title='$title',type_id='$type_id',category_id='$category_id',price='$price',content='$content',region_id = '$region_id',address = '$address',refresh_time = '$refresh_time',district_name = '$district_name',huxingshi = '$huxingshi',huxingting = '$huxingting',huxingwei = '$huxingwei',louceng = '$louceng',zonglouceng = '$zonglouceng',acreage = '$acreage',bedroom = '$bedroom',housing_type = '$housing_type',orientation = '$orientation',fitment = '$fitment',payment = '$payment',allocation = '$allocation',img= '$img' where id=".$id;
		$query = $db->query($sql);
		if($query > 0) {
			show_message('操作成功！', '返回上一页', 'release.php?act=rental&id='.$id);
		} else {
			show_message('操作失败！', '返回上一页，重新填写信息', 'release.php?act=rental&id='.$id);
		}
	}else{
		$sql = "INSERT INTO " . $ecs->table('release_information') . 
				"(user_id, name, gender, tel, title, type_id, category_id, price, content, region_id, address, add_time, refresh_time, district_name, huxingshi, huxingting, huxingwei, louceng, zonglouceng, acreage, bedroom, housing_type, orientation, fitment, payment, allocation, img)" .
				"VALUES ( '$user_id', '$name', '$gender', '$tel', '$title', '$type_id', '$category_id', '$price', '$content', '$region_id', '$address', '$add_time','$refresh_time', '$district_name', '$huxingshi', '$huxingting', '$huxingwei', '$louceng', '$zonglouceng', '$acreage', '$bedroom', '$housing_type', '$orientation', '$fitment', '$payment', '$allocation', '$img')";
		//echo $sql;
		$db->query($sql);
		$id = $db->insert_id();
		if($id){
			show_message('操作成功！','返回上一页', 'release.php?act=rental');
		}else{
			show_message('操作失败！','返回上一页，重新填写信息', 'release.php?act=rental');
		}
	}
}

/**
 * 房屋求租
 */
function action_wanted(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $position = assign_ur_here('', '求租房');
    $smarty->assign('page_title', $position['title']);    // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);  // 当前位置

	$id = intval($_GET['id']);
    if(!empty($id)){
        $info = release_info($id);
		$info['into_time'] = date('Y-m-d',$info['into_time']);
        //echo '<pre>';print_r($info);exit;
		$smarty->assign('city_list', get_regions(2, $info['province_id']));
		$smarty->assign('district_list', get_regions(3, $info['city_id']));
        $smarty->assign('info',$info);
    }

    $smarty->assign('province_list', get_regions(1, 1));
    $smarty->assign('rent',  rent());
    $smarty->assign('room',room());
    $smarty->display('wanted.dwt');
}

/**
 * @desc 求租操作
 */
function action_do_wanted(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $user_id = $_SESSION['user_id'];
    $name = trim($_POST['name']);
    $tel = trim($_POST['tel']);
    
    $region_id = intval($_POST['district']);
    $address = trim($_POST['address']);
    $huxingshi = intval($_POST['tingshi']);
    $price = intval($_POST['price']);
    $into_time = strtotime(trim($_POST['into_time']));
    
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $type_id = 4;
    $add_time = time();
    $refresh_time = time();
    
	$id = intval($_POST['id']);
	if($id){
		$sql = 'update ' . $ecs->table('release_information') . " set name = '$name',tel='$tel',title='$title',price='$price',content='$content',region_id='$region_id',address='$address',into_time = '$into_time',refresh_time = '$refresh_time',huxingshi = '$huxingshi' where id=".$id;
		$query = $db->query($sql);
		if($query > 0) {
			show_message('操作成功！', '返回上一页', 'release.php?act=wanted&id='.$id);
		} else {
			show_message('操作失败！', '返回上一页，重新填写信息', 'release.php?act=wanted&id='.$id);
		}
	}else{
		$sql = "INSERT INTO " . $ecs->table('release_information') . 
				"(user_id, name, tel, title, price, content, region_id, address, into_time, add_time, refresh_time, huxingshi)" .
				"VALUES ( '$user_id', '$name', '$tel', '$title', '$type_id', '$price', '$content', '$region_id', '$address', $into_time, '$add_time', '$refresh_time', '$huxingshi')";
		//echo $sql;
		$db->query($sql);
		$id = $db->insert_id();
		if($id){
			show_message('操作成功！','返回上一页', 'release.php?act=wanted');
		}else{
			show_message('操作失败！','返回上一页，重新填写信息', 'release.php?act=wanted');
		}
	}
}

/**
 * 房源求购
 */
function action_qiugou(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $position = assign_ur_here('', '二手房买卖');
    $smarty->assign('page_title', $position['title']);    // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);  // 当前位置

	$id = intval($_GET['id']);
    if(!empty($id)){
        $info = release_info($id);
        //echo '<pre>';print_r($info);exit;
		$smarty->assign('city_list', get_regions(2, $info['province_id']));
		$smarty->assign('district_list', get_regions(3, $info['city_id']));
        $smarty->assign('info',$info);
    }

    $smarty->assign('province_list', get_regions(1, 1));
    $smarty->assign('housingType',  housingType());
    $smarty->display('qiugou.dwt');
}

/**
 * @desc 房源求购操作
 */
function action_do_qiugou(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $user_id = $_SESSION['user_id'];
    $name = trim($_POST['name']);
    $tel = trim($_POST['tel']);
    
    $region_id = intval($_POST['district']);
    $price = intval($_POST['price']);
    $big_price = intval($_POST['big_price']);
    $housing_type = intval($_POST['housing_type']);
    $huxingshi = intval($_POST['huxingshi']);
    $acreage = intval($_POST['acreage']);
    $big_acreage = intval($_POST['big_acreage']);
    
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $type_id = 5;
    $add_time = time();
    $refresh_time = time();
    
	$id = intval($_POST['id']);
	if($id){
		$sql = 'update ' . $ecs->table('release_information') . " set name = '$name',tel='$tel',title='$title',price='$price',big_price='$big_price',content='$content',region_id='$region_id',refresh_time='$refresh_time',huxingshi = '$huxingshi',acreage = '$acreage',big_acreage = '$big_acreage',housing_type = '$housing_type' where id=".$id;
		$query = $db->query($sql);
		if($query > 0) {
			show_message('操作成功！', '返回上一页', 'release.php?act=qiugou&id='.$id);
		} else {
			show_message('操作失败！', '返回上一页，重新填写信息', 'release.php?act=qiugou&id='.$id);
		}
	}else{
		$sql = "INSERT INTO " . $ecs->table('release_information') . 
				"(user_id, name, tel, title, type_id, price, big_price, content, region_id, add_time, refresh_time, huxingshi, acreage, big_acreage, housing_type)" .
				"VALUES ( '$user_id', '$name', '$tel', '$title', '$type_id', '$price', '$big_price', '$content', '$region_id', '$add_time','$refresh_time', '$huxingshi', '$acreage', '$big_acreage', '$housing_type')";
		//echo $sql;exit;
		$db->query($sql);
		$id = $db->insert_id();
		if($id){
			show_message('操作成功！','返回上一页', 'release.php?act=qiugou');
		}else{
			show_message('操作失败！','返回上一页，重新填写信息', 'release.php?act=qiugou');
		}
	}
}

/**
 * 房源出售
 */
function action_chushou(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $position = assign_ur_here('', '房源出售');
    $smarty->assign('page_title', $position['title']);    // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);  // 当前位置

	$id = intval($_GET['id']);
    if(!empty($id)){
        $info = release_info($id);
        //echo '<pre>';print_r($info);exit;
		$smarty->assign('city_list', get_regions(2, $info['province_id']));
		$smarty->assign('district_list', get_regions(3, $info['city_id']));
        $smarty->assign('info',$info);
    }

    $smarty->assign('province_list', get_regions(1, 1));
    $smarty->assign('housingType',  housingType());
    $smarty->display('chushou.dwt');
}

/**
 * @desc 房源出售操作
 */
function action_do_chushou(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $user_id = $_SESSION['user_id'];
    $name = trim($_POST['name']);
    $tel = trim($_POST['tel']);
    
    $district_name = trim($_POST['district_name']);
    $region_id = intval($_POST['district']);
    $address = trim($_POST['address']);
    $huxingshi = intval($_POST['huxingshi']);
    $huxingting = intval($_POST['huxingting']);
    $huxingwei = intval($_POST['huxingwei']);
    $acreage = intval($_POST['total_area']);  
    $price = intval($_POST['price']);
    
    $title = trim($_POST['title']);
    $img = empty($_POST['chushou'])?'':implode(';',$_POST['chushou']);
    $content = trim($_POST['content']);
    $type_id = 6;
    $add_time = time();
    $refresh_time = time();
    
	$id = intval($_POST['id']);
	if($id){
		$sql = 'update ' . $ecs->table('release_information') . " set name = '$name',tel='$tel',title='$title',price='$price',content='$content',region_id='$region_id',refresh_time='$refresh_time',district_name='$district_name',huxingshi = '$huxingshi',huxingting = '$huxingting',huxingwei = '$huxingwei',acreage = '$acreage',img = '$img' where id=".$id;
		$query = $db->query($sql);
		if($query > 0) {
			show_message('操作成功！', '返回上一页', 'release.php?act=chushou&id='.$id);
		} else {
			show_message('操作失败！', '返回上一页，重新填写信息', 'release.php?act=chushou&id='.$id);
		}
	}else{
		$sql = "INSERT INTO " . $ecs->table('release_information') . 
				"(user_id, name, tel, title, type_id, price, content, region_id, add_time, refresh_time, district_name, huxingshi, huxingting, huxingwei, acreage, img)" .
				"VALUES ( '$user_id', '$name', '$tel', '$title', '$type_id', '$price', '$content', '$region_id', '$add_time', '$refresh_time', '$district_name', '$huxingshi', '$huxingting', '$huxingwei', '$acreage', '$img')";
		//echo $sql;exit;
		$db->query($sql);
		$id = $db->insert_id();
		if($id){
			show_message('操作成功！','返回上一页', 'release.php?act=chushou');
		}else{
			show_message('操作失败！','返回上一页，重新填写信息', 'release.php?act=chushou');
		}
	}
}

function release_info($id){
    // 获取全局变量
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    $sql  = "SELECT * FROM " . $GLOBALS['ecs']->table('release_information') ." where id=".$id;
    $info = $db->getRow($sql);
    if(isset($info['region_id'])&& !empty($info['region_id'])){
        $info['province_id'] = '';
        $info['city_id'] = '';
        $area = get_city($info['region_id']);
        if($area){
            $info['city_id'] = $area['parent_id'];
            $city = get_city($area['parent_id']);
            if($city){
                $info['province_id'] = $city['parent_id'];
            }
        }
    }
    return $info;
}

/**
 * @desc 上传
 */
function action_upload(){
    $file = $_GET['file'];//指定上传文件夹
    $path = "uploads/".$file.'/';
    $extArr = array("jpg", "png", "gif");
    
    $name = $_FILES['photoimg']['name'];
    $size = $_FILES['photoimg']['size'];

    if(empty($name)){
            echo '请选择要上传的图片';
            exit;
    }
    $ext = extend($name);
    if(!in_array($ext,$extArr)){
            echo '图片格式错误！';
            exit;
    }
    if($size>(500*1024)){
            echo '图片大小不能超过500KB';
            exit;
    }
    $image_name = time().rand(100,999).".".$ext;
    $tmp = $_FILES['photoimg']['tmp_name'];
    if(move_uploaded_file($tmp, $path.$image_name)){
            echo '<img src="'.$path.$image_name.'"  class="preview"><input name="'.$file.'[]" value="'.$path.$image_name.'" type="hidden">';
    }else{
            echo '上传出错了！';
    }
    
}

function extend($file_name){
    $extend = pathinfo($file_name);
    $extend = strtolower($extend["extension"]);
    return $extend;
}

/**
 * @desc 发布信息列表
 */
function action_release_list(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    
    /* 获得当前页码 */
    $page   = !empty($_REQUEST['page'])  && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;
    /* 获得页面的缓存ID */
    $cache_id = sprintf('%X', crc32($page . '-' . $_CFG['lang']));

    if (!$smarty->is_cached('release_list.dwt', $cache_id)) {
        assign_template();
        $type_id = empty($_GET['type_id'])?1:$_GET['type_id'];
        
        $current = release_category($type_id-1);
        $position = assign_ur_here('', $current['name']);
        $smarty->assign('page_title', $position['title']);    // 页面标题
        $smarty->assign('ur_here', $position['ur_here']);  // 当前位置

        $category = release_category();//左侧菜单

        $size   = 15;
        $keywords = '';
        $goon_keywords = ''; //继续传递的搜索关键词
        $param = array();
        if (isset($_REQUEST['keywords']) && !empty($_REQUEST['keywords'])) {
            $keywords = addslashes(htmlspecialchars(urldecode(trim($_REQUEST['keywords']))));

            $smarty->assign('search_value',    stripslashes(stripslashes($keywords)));
            $count  = get_release_count($type_id,$keywords);

            $goon_keywords = urlencode($_REQUEST['keywords']);
            $param = array('act'=>'release_list','type_id'=>$type_id,'keywords'=>$goon_keywords);
        }else {
            $param = array('act'=>'release_list','type_id'=>$type_id);
            $count  = get_release_count($type_id);
        }

        $pages  = ($count > 0) ? ceil($count / $size) : 1;
        if ($page > $pages) {
            $page = $pages;
        }

        $smarty->assign('release_list', get_release_list($page, $size ,$type_id, $keywords));
        /* 分页 */
        $smarty->assign('pager',get_pager('release.php', $param, $count, $page, $size));

        $smarty->assign('category', $category);
        $search_url = "release.php?act=release_list&type_id=$type_id";
        $smarty->assign('type_id',$type_id);
	$smarty->assign('search_url',       $search_url);
        //echo '<pre>';print_r(get_release_list($page, $size ,$type_id, $keywords));exit;
    }
    $smarty->display('release_list.dwt');
}

/**
 * @desc 发布信息详情
 */
function action_release_view(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = empty($_SESSION['user_id'])?'':$_SESSION['user_id'];
    
    $category = release_category();//左侧菜单
    
    $id = (isset($_REQUEST['id']) && preg_match('/^-?[1-9]\d*$/', $_REQUEST['id'])) ? intval($_REQUEST['id']) : 0;
    $sql = 'SELECT *  FROM ' .$GLOBALS['ecs']->table('release_information') . ' WHERE id='.$id;
    $info = $db->getRow($sql);
    
    $current = release_category($info['type_id']-1);
    $here = '';
    if(!empty($info['title'])){
        $here = '<code> > </code>'.$info['title'];
    }
    $position = assign_ur_here('', $current['name'].$here);
    $smarty->assign('page_title', $info['title']);    // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);  // 当前位置
    
    if(isset($info['region_id'])&& !empty($info['region_id'])){
        $area = get_city($info['region_id']);
        if($area){
            $city = get_city($area['parent_id']);
            if($city){
                $province = get_city($city['parent_id']);
            }
        }
        $info['region_id'] = $province['region_name'].'&nbsp;'.$city['region_name'].'&nbsp;'.$area['region_name'];
    }
    $info['refresh_time'] = date('Y-m-d H:i:s',$info['refresh_time']);
    $info['into_time'] = date('Y-m-d',$info['into_time']);
    $info['education'] = education($info['education']);
    $info['work_time'] = work_time($info['work_time']);
    $info['tel'] = substr_replace($info['tel'],'****',3,4);
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
    $smarty->assign('info',$info);
    
    $smarty->assign('user_id', $user_id);
    $smarty->assign('category', $category);
    $smarty->display('release_view.dwt');
}

/**
 * @desc 查看发布信息消费
 */
function action_paymen_view_tel(){
    // 获取全局变量
    $_LANG = $GLOBALS['_LANG'];
    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];
    
    $id = intval($_POST['id']);
    if(!empty($id)){
        $view = get_user_release_view($user_id, $id);//此发布信息是否已被看过
        if(empty($view)){
            //$sur_amount = get_user_surplus($user_id);//可用余额
            $sur_amount = get_user_money($user_id);//可用余额
            if($sur_amount<1) {
                $arr = array(
                    'state'=>1,
                    'content'=>'当前账号余额已不足,不能用于查看此信息'
                );
                echo json_encode($arr);exit;
            }
            $user_money = -1;//可用余额变动
            $change_desc = '查看发布信息电话';//变动说明
            log_account_change($user_id, $user_money, 0, 0, 0, $change_desc,ACT_VIEW_TEL);
            insert_user_release_view($user_id, $id);
        }
        
        $sql = 'SELECT tel  FROM ' .$GLOBALS['ecs']->table('release_information') . ' WHERE id='.$id;
        $tel = $db->getOne($sql); 
        $arr = array(
            'state'=>2,
            'content'=>$tel
        );
        echo json_encode($arr);exit;
    }else{
        $arr = array(
            'state'=>1,
            'content'=>'数据错误'
        );
        echo json_encode($arr);exit;
    }
}

/**
 * 
 * @param int $page 当前页面
 * @param int $size 每页显示条数
 * @param string $type_id 分类id
 * @param type $title
 * @return array
 */
function get_release_list($page = 1, $size = 20 ,$type_id=1, $title='')
{
    //增加搜索条件，如果有搜索内容就进行搜索    
    if ($title != '')
    {
        $sql = 'SELECT *  FROM ' .$GLOBALS['ecs']->table('release_information') . ' WHERE type_id='.$type_id.' and title like \'%' . $title . '%\' ORDER BY id DESC';
    }
    else 
    {
        $sql = 'SELECT *  FROM ' .$GLOBALS['ecs']->table('release_information') . ' WHERE type_id='.$type_id.' ORDER BY id DESC';
    }

    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page-1) * $size);

    $arr = array();
    if ($res)
    {
        while ($row = $GLOBALS['db']->fetchRow($res))
        {
            if(isset($row['region_id'])&& !empty($row['region_id'])){
                $area = get_city($row['region_id']);
                if($area){
                    $city = get_city($area['parent_id']);
                    if($city){
                        $province = get_city($city['parent_id']);
                    }
                }
                $row['region_id'] = $province['region_name'].'&nbsp;'.$city['region_name'].'&nbsp;'.$area['region_name'];
            }
        
            $id = $row['id'];

            $arr[$id]['id']           = $id;
            $arr[$id]['title']        = $row['title'];
            $arr[$id]['price']        = $row['price'];
            $arr[$id]['refresh_time'] = date('Y-m-d H:i:s',$row['refresh_time']);
            $arr[$id]['region_id']    = $row['region_id'];
            $arr[$id]['address']    = $row['address'];
            $arr[$id]['url']          = 'release.php?act=release_view&id='.$row['id'];
        }
    }

    return $arr;
}

/**
 * @desc 获得指定分类下的发布信息
 * @param string $type_id 分类id
 * @param string $title 标题
 * @return int
 */
function get_release_count($type_id=1,$title='')
{
    global $db, $ecs;
    if ($title != '')
    {
        $count = $db->getOne('SELECT COUNT(*) FROM ' . $ecs->table('release_information') . ' WHERE  type_id='.$type_id.' and title like \'%' . $title . '%\'');
    }
    else
    {
        $count = $db->getOne("SELECT COUNT(*) FROM " . $ecs->table('release_information') . ' WHERE  type_id='.$type_id);
    }
    return $count;
}

function get_user_release_view($user_id,$release_id){
    $sql = 'select id from '.$GLOBALS['ecs']->table('release_view').' where user_id='.$user_id.' and release_id='.$release_id;
    return abs($GLOBALS['db']->getOne($sql));
}
/**
 * 记录查询会员发布记录
 *
 * @access  public
 * @param   int     $user_id  会员id
 * @param   int    $release_id   发布信息id
 *
 * @return  int
 */
function insert_user_release_view($user_id,$release_id)
{
    $sql = 'INSERT INTO ' .$GLOBALS['ecs']->table('release_view').
           ' (user_id, release_id)'.
            " VALUES ('$user_id', '$release_id')";
    $GLOBALS['db']->query($sql);

    return $GLOBALS['db']->insert_id();
}

function get_user_money($user_id){
    $sql = "SELECT user_money FROM " .$GLOBALS['ecs']->table('users').
           " WHERE user_id = '$user_id'";
    return $GLOBALS['db']->getOne($sql);
}

/* 代码增加_start  By  www.68ecshop.com */
make_html();
/* 代码增加_end   By  www.68ecshop.com */
?>