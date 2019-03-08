<?php
/* *
 * 功能：创蓝发送信息DEMO
 * 版本：1.3
 * 日期：2014-07-16
 * 说明：
 * 以下代码只是为了方便客户测试而提供的样例代码，客户可以根据自己网站的需要，按照技术文档自行编写,并非一定要使用该代码。
 * 该代码仅供学习和研究创蓝接口使用，只是提供一个参考。
 */
function sendSMS($mobile_phone, $content){
    $result = balanceSendSMS($mobile_phone, $content,'true');
    $result = execResult($result);
    if($result[1]==0){
            return '发送成功';
    }else{
            return "发送失败{$result[1]}";
    }
}

function balanceSendSMS( $mobile, $msg, $needstatus = 'false', $product = '', $extno = '') {
    //创蓝发送短信接口URL, 如无必要，该参数可不用修改
    $chuanglan_config['api_send_url'] = 'http://222.73.117.156/msg/HttpBatchSendSM';

    //创蓝短信余额查询接口URL, 如无必要，该参数可不用修改
    $chuanglan_config['api_balance_query_url'] = 'http://222.73.117.156/msg/QueryBalance';

    //创蓝账号 替换成你自己的账号
    $chuanglan_config['api_account']	= 'vip_sqsc';

    //创蓝密码 替换成你自己的密码
    $chuanglan_config['api_password']	= 'Tch654321';
    //创蓝接口参数
    $postArr = array (
        'account' => $chuanglan_config['api_account'],
        'pswd' => $chuanglan_config['api_password'],
        'msg' => $msg,
        'mobile' => $mobile,
        'needstatus' => $needstatus,
        'product' => $product,
        'extno' => $extno
    );
    $result = curlPost( $chuanglan_config['api_send_url'] , $postArr);
    return $result;
}

/**
 * 查询额度
 *
 *  查询地址
 */
function queryBalance() {
        global $chuanglan_config;
        //查询参数
        $postArr = array ( 
                  'account' => $chuanglan_config['api_account'],
                  'pswd' => $chuanglan_config['api_password'],
        );
        $result = curlPost($chuanglan_config['api_balance_query_url'], $postArr);
        return $result;
}

/**
 * 处理返回值
 * 
 */
function execResult($result){
        $result=preg_split("/[,\r\n]/",$result);
        return $result;
}

/**
 * 通过CURL发送HTTP请求
 * @param string $url  //请求URL
 * @param array $postFields //请求参数 
 * @return mixed
 */
function curlPost($url,$postFields){
        $postFields = http_build_query($postFields);
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $postFields );
        $result = curl_exec ( $ch );
        curl_close ( $ch );
        return $result;
}

//魔术获取
 function __get($name){
        return $this->$name;
}

//魔术设置
function __set($name,$value){
        $this->$name=$value;
}