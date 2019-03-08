<?php

/**
 * ECSHOP 基础函数库
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: lib_base.php 17217 2011-01-19 06:29:08Z liubo $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

/**
 * @desc 学历
 * @return array
 */
function education($id){
    $arr = array(1=>'小学',2=>'初中',3=>'高中',4=>'中专',5=>'大专',6=>'本科',7=>'硕士',8=>'无学历');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}
/**
 * @desc 工作年限
 * @return array
 */
function work_time($id){
    $arr = array(1=>'1年(含)以下',2=>'2年',3=>'3年',4=>'4年',5=>'5年',6=>'6年',7=>'7年',8=>'8年',9=>'9年',10=>'10年(含)以上');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 住宅类型
 * @return array
 */
function housingType($id){
    $arr = array(1=>'平方',2=>'普通住宅',3=>'公寓',4=>'别墅',5=>'其他',6=>'商住两用');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 装修情况
 * @return array
 */
function fitment($id){
    $arr = array(1=>'毛坯',2=>'简单装修',3=>'中等装修',4=>'精装修',5=>'豪华装修');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 房屋类型
 * @return array
 */
function orientation($id){
    $arr = array(1=>'东',2=>'南',3=>'西',4=>'北',5=>'东西',6=>'南北',7=>'东南',8=>'西南',9=>'东北',10=>'西北');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 付款方式
 * @return array
 */
function payment($id){
    $arr = array(1=>'押一付一',2=>'半年付',3=>'年付',4=>'押一付三',5=>'押二付一',6=>'面议',7=>'押一付二',8=>'押二付二',9=>'押二付三');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 租金
 * @return array
 */
function rent($id){
    $arr = array(1=>'500元以下/月',2=>'500-1000元/月',3=>'1000-1500元/月',4=>'1500-2000元/月',5=>'2000-3000元/月',6=>'3000-4500元/月',7=>'4500元以上/月');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 期望厅室
 * @return array
 */
function room($id){
    $arr = array(1=>'整租一室',2=>'整租两室',3=>'整租三室',4=>'整租四室',5=>'整租四室以上',6=>'合租');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 期望户型--室
 * @return array
 */
function huxingshi($id){
    $arr = array(1=>'一室',2=>'两室',3=>'三室',4=>'四室',5=>'四室以上');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 房屋配置
 * @return array
 */
function allocation($id){
    $arr = array(1=>'床',2=>'热水器',3=>'洗衣机',4=>'空调',5=>'冰箱',6=>'电视',7=>'宽带',8=>'沙发',9=>'衣柜',10=>'暖气');
    if(!empty($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}

/**
 * @desc 发布信息类型
 * @return array
 */
function release_category($id){
    $arr = array(
        array(
            'id'=>1,
            'name'=>'我要做家政',
            'url'=>'release.php?act=release_list&type_id=1'
        ),
        array(
            'id'=>2,
            'name'=>'我要找家政',
            'url'=>'release.php?act=release_list&type_id=2'
        ),
        array(
            'id'=>3,
            'name'=>'房源出租',
            'url'=>'release.php?act=release_list&type_id=3'
        ),
        array(
            'id'=>4,
            'name'=>'房源求租',
            'url'=>'release.php?act=release_list&type_id=4'
        ),
        array(
            'id'=>5,
            'name'=>'房源求购',
            'url'=>'release.php?act=release_list&type_id=5'
        ),
        array(
            'id'=>6,
            'name'=>'房源出售',
            'url'=>'release.php?act=release_list&type_id=6'
        ),
    );
    if(isset($id)){
        return $arr[$id];
    }else{
        return $arr;
    }
}