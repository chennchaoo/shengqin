<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://www.xiaojingdong.com/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线客服</title>
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/chat.css" />

<script id="to_html" type="text">
<div id="script_to_id" class="msg_others">
<dl class="message">
	<dt class="user_pic"><img src="themes/68ecshopcom_360buy/images/chat/others_pic.png" /></dt>
    <dd class="message_detail">
		<div class="msg_title">
        	<p class="msg_owner txt_bold">to_name</p>
            <span class="send_time">send_time</span>
        </div>
        <div class="msg_content"><p>msg_content</p></div>
    	<span class="msg_tl"></span>
			<span class="msg_tr"></span>
			<span class="msg_br"></span>
			<span class="msg_bl"></span>
        <span class="msg_arrow"></span>
    </dd>
</dl>
</div>

</script>

<script id="from_html" type="text">

<div id="script_from_id" class="msg_me">
<dl class="message">
	<dt class="user_pic">
	<?php if ($this->_var['headimg'] != false): ?>
	<img src="<?php echo $this->_var['headimg']; ?>" width="46px" height="47px" />
	<?php else: ?>
	<img src="themes/68ecshopcom_360buy/images/chat/user_pic.png" />
	<?php endif; ?>
	</dt>
    <dd class="message_detail">
		<div class="msg_title">
        	<p class="msg_owner txt_bold">from_name</p>
            <span class="send_time">send_time</span>
        </div>
        <div class="msg_content"><p>msg_content</p></div>
    	<span class="msg_tl"></span>
		<span class="msg_tr"></span>
		<span class="msg_br"></span>
		<span class="msg_bl"></span>
        <span class="msg_arrow"></span>
    </dd>
</dl>
</div>

</script>

<script id="notice_html" type="text">

<div id="script_notice_id" class="msg_notice">
	<i class="icon_notice"></i>
	<p class="msg_content"></p>
	<span class="msg_tl"></span>
	<span class="msg_tr"></span>
	<span class="msg_br"></span>
	<span class="msg_bl"></span>
</div>

</script>
<script type='text/javascript' src='themes/68ecshopcom_360buy/js/jquery-1.6.2.min.js'></script>
<!-- UEditor编辑器
<link href="js/chat/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/chat/umeditor/umeditor.config.js"></script>
<script type="text/javascript" src="js/chat/umeditor/umeditor.js"> </script>
<script type="text/javascript" src="js/chat/umeditor/lang/zh-cn/zh-cn.js"></script>
 -->
<script type='text/javascript' src='js/chat/b64.js'></script>
<script type='text/javascript' src='js/chat/md5.js'></script>
<script type='text/javascript' src='js/chat/sha1.js'></script>
<script type='text/javascript' src='js/chat/strophe.js'></script>
<script type='text/javascript' src='js/chat/chat.js'></script>
<script type="text/javascript">
function leave(){
	return confirm('是否终止聊天');
}
</script>
</head>

<body onbeforeunload="return '是否终止聊天'">
	<input type="hidden" id="from" value="<?php echo $this->_var['from']; ?>" />
	<input type="hidden" id="password" value="<?php echo $this->_var['password']; ?>" />
	<input type="hidden" id="to" value="<?php echo $this->_var['to']; ?>" />
	<input type="hidden" id="username" value="<?php echo $this->_var['username']; ?>" />
	<input type="hidden" id="customername" value="<?php echo $this->_var['customername']; ?>" />
	<input type="hidden" id="chat_goods_id" value="<?php echo $this->_var['chat_goods_id']; ?>" />
	<input type="hidden" id="chat_supp_id" value="<?php echo $this->_var['chat_supp_id']; ?>" />
	<input type="hidden" id="chat_order_id" value="<?php echo $this->_var['chat_order_id']; ?>" />
	<input type="hidden" id="chat_order_sn" value="<?php echo $this->_var['chat_order_sn']; ?>" />
	<div id="system_notice" style="display: none;"><?php echo $this->_var['system_notice']; ?></div>
	<div id="sound"></div>
	<div class="chat_wrap">
		
		<div class="chat_header">
			<img src="themes/68ecshopcom_360buy/images/chat/web_logo.png" class="chat_logo" />
			<div class="btn_area">
				<a class="chat_close" href="javascript:;"></a>
			</div>
		</div>
		
		
		<div class="chat_content">
			<div class="main_con">
				
				<div class="chat_window">
					
					<div class="chat_list" id="scroll_div">
						<div class="scroll_inner">
							<!-- 
                	<div class="msg_notice">
                    	<i class="icon_notice"></i>
                        <p class="msg_content"><?php echo $this->_var['system_notice']; ?></p>
                    	<span class="msg_tl"></span>
                    	<span class="msg_tr"></span>
                   		<span class="msg_br"></span>
                    	<span class="msg_bl"></span>
                    </div>
                     -->
						</div>
					</div>
					
					
					<div class="edit_area">
						<div class="edit_toolbar">
							<!--评价弹出层 start
                    	<a class="icon_pic"></a>
                        <a class="degree_button" href="javascript:;"><i class="icon_hart"></i><span class="txt">满意度评价</span></a>
                        <div class="pop_recommend">
                        	<div class="close_pop_recommend"></div>
                        	<p>您对当前客服人员服务满意吗？</p>
                            <p class="degree_inputs">
                            	<label><input type="radio" name="degree" value="100"/>非常满意</label>
                                <label><input type="radio" name="degree" value="75"/>满意</label>
                                <label><input type="radio" name="degree" value="50"/>一般</label>
                                <label><input type="radio" name="degree" value="25"/>不满意</label>
                                <label><input type="radio" name="degree" value="0"/>非常不满意</label>
                            </p>
                            <div class="degreeeq50">
                            	<p>您的问题解决了吗？</p>
                                <p>
                                	<label><input type="radio" name="sloveQ"/>解决了</label>
                                    <label><input type="radio" name="sloveQ"/>没解决</label>
                                </p>
                            </div>
                            <div class="degreelt50">
                            	<p>您不满意的原因是？</p>
                                <p>
                                	<label><input type="checkbox"/>问题没得到解决</label>
                                    <label><input type="checkbox"/>对客服态度不满意</label>
                                    <label><input type="checkbox"/>客服对业务不熟悉</label>
                                </p>
                            </div>
                            <div class="recommend_edit_area">
                            	<textarea class="degree_content"></textarea>
                            	<div class="txt_num">还可以输入256字</div>
                            </div>
                            <div class="recommend_btn">
                            	<a href="#">提交</a>
                            </div>
                        </div>
                        -->
							
						</div>
						
						<div class="edit_ipt_area">
							<textarea class="edit_txt" id="editor" placeholder="请说明您要咨询的问题……"></textarea>
							<!-- <script id="editor" class="edit_txt" type="text/plain" style="height: 30px;"></script> -->
						</div>
						
						
						<div class="edit_btn_area">
							<div class="send_box">
								<a href="javascript:;" id="btn_send" class="btn_send">发送</a>
								<a href="javascript:;" class="btn_send_set" title="发送设置"></a>
								<ul class="send_set_con">
									<li class="current">按Enter键发送消息，Ctrl+Enter换行</li>
									<li>按Ctrl+Enter键发送消息，Enter换行</li>
								</ul>
							</div>
							<a href="#" class="btn_close">结束对话</a>
						</div>
						
					</div>
					
				</div>
				
				
				<div class="right_sidebar">
					
					<div id="tabs" class="shop_tab">
						<!-- <span id="chat_goods" class="current tab_item">咨询商品</span> -->
					</div>
					
					
					<div class="tab_contents">
						
						<div class="tab_content order_info chat_supp" style="display: none;">
							<div id="brand-bar-pop">
								<dl id="ghs_shop" style="border-bottom: 1px solid #ddd; padding-bottom: 5px; text-align: center; padding-top: 13px; padding-bottom: 12px; *padding-top: 12px; *padding-bottom: 9px;">
									<dt class="shop_title">
										卖家：
										<a href="supplier.php?suppId=<?php echo $this->_var['supp_info']['suppid']; ?>" target="_blank" style="color: #333333"> <?php echo $this->_var['supp_info']['shopname']; ?></a>
									</dt>
									<dd></dd>
									<div class="ghs_clear"></div>
								</dl>
								<dl id="hotline" style="padding-top: 17px;">
									<dt>商家名称：<?php echo $this->_var['supp_info']['suppliername']; ?></dt>
									<dd></dd>
									<div class="ghs_clear"></div>
								</dl>
								<dl id="hotline">
									<dt>商店等级：<?php echo $this->_var['supp_info']['userrank']; ?></dt>
									<dd></dd>
									<div class="ghs_clear"></div>
								</dl>
								<dl id="hotline">
									<dt>客服电话:<?php echo $this->_var['supp_info']['servicephone']; ?></dt>
									<dd></dd>
									<dd class="ghs_clear"></dd>
								</dl>
								<dl id="hotline">
									<dt>所在地区:<?php echo $this->_var['supp_info']['region']; ?></dt>
									<dd></dd>
									<dd class="ghs_clear"></dd>
								</dl>
								<div id="enter-shop">
									<div class="shop_follow_item clearfix">
										<a class="btn_flat1 btn_goto_shop" href="supplier.php?suppId=<?php echo $this->_var['supp_info']['suppid']; ?>" target="_blank"> 进入商店 </a>
										<a class="btn_flat1 btn_shop_add" href="javascript:guanzhu(<?php echo $this->_var['supp_info']['suppid']; ?>);"> 关注本店 </a>
									</div>
									<div id="attention-shop">
										<p>扫一扫，手机访问店铺</p>
										<img src="erweima_supplier.php?sid=<?php echo $this->_var['supp_info']['suppid']; ?>" width="120" height="120" />
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="tab_content order_info chat_order" style="display: none;">
							<div class="order_detail">
								<div class="detail_box">
									<div class="detail_label_txt">订单状态：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['chat_order']['order_status_text']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">订单编号：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['chat_order']['order_sn']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">订单金额：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['chat_order']['total_fee']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">支付方式：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['chat_order']['pay_name']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">收货人：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['chat_order']['consignee']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">下单时间：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['chat_order']['formated_add_time']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">订单商品：</div>
									<ul class="detail_label_con">
										<?php $_from = $this->_var['chat_order']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?>
										<li>
											<a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
												<img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="50" height="50" title="<?php echo $this->_var['goods']['goods_name']; ?>" />
											</a>
										</li>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									</ul>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						
						
						<div class="tab_content order_info chat_order_list" style="display: none;">
							<?php if ($this->_var['order_count'] > 0): ?>
							<div class="order_pages_box">
								<div class="order_pages">
									<span class="order_prev">上一页</span>
									<div class="order_num">
										<span id="cur_page">1</span>
										/
										<span id="order_count">
											<?php echo $this->_var['order_count']; ?>
										</span>
									</div>
									<span class="order_next">下一页</span>
								</div>
								<div class="order_info_more">
									<a href="user.php?act=order_list" target="_blank">查看更多&gt;&gt;</a>
								</div>
							</div>
							<?php else: ?>
							<span>亲，您还没有购买过任何东西呢，赶紧去购买吧！</span>
							<?php endif; ?>
							<?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'order');$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['order']):
        $this->_foreach['loop']['iteration']++;
?>
							<div id="order_<?php echo ($this->_foreach['loop']['iteration'] - 1); ?>" class="order_detail"
								<?php if (($this->_foreach['loop']['iteration'] - 1) != 0): ?>
								style="display: none;"
								<?php endif; ?>
								>
								<div class="detail_box">
									<div class="detail_label_txt">订单状态：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['order']['order_status_text']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">订单编号：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['order']['order_sn']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">订单金额：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['order']['total_fee']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">支付方式：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['order']['pay_name']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">收货人：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['order']['consignee']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">下单时间：</div>
									<div class="detail_label_con">
										<?php echo $this->_var['order']['order_time']; ?>
									</div>
								</div>
								<div class="detail_box">
									<div class="detail_label_txt">订单商品：</div>
									<ul class="detail_label_con">
										<?php $_from = $this->_var['order']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?>
										<li>
											<a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
												<img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="50" height="50" title="<?php echo $this->_var['goods']['goods_name']; ?>" />
											</a>
										</li>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									</ul>
									<div class="clear"></div>
								</div>
							</div>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
						
						
						<div class="tab_content product_info chat_goods" style="display: none;">
							<?php if ($this->_var['chat_goods'] != null): ?>
							<div class="product_pic">
								<a href="goods.php?id=<?php echo $this->_var['chat_goods']['goods_id']; ?>" target="_blank">
									<img src="<?php echo $this->_var['chat_goods']['goods_thumb']; ?>" width="100" height="100" />
								</a>
							</div>
							<div class="product_detail">
								<div class="product_name">
									<a href="goods.php?id=<?php echo $this->_var['chat_goods']['goods_id']; ?>" target="_blank" title="<?php echo $this->_var['chat_goods']['goods_name']; ?>">
										<?php echo $this->_var['chat_goods']['goods_name']; ?>
									</a>
								</div>
								<div class="product_brief">
									<?php echo $this->_var['chat_goods']['goods_brief']; ?>
								</div>
							</div>
							<div class="clear"></div>
							<div class="product_price">
								价格:
								<span>
									<?php echo $this->_var['chat_goods']['shop_price']; ?>
								</span>
							</div>
							<?php else: ?>
							<div style="text-align: center; font-weight: bold;">亲，没有发现您待咨询的商品！</div>
							<?php endif; ?>
						</div>
						
					</div>
					
				</div>
				
			</div>
		</div>
		
	</div>
	<script type="text/javascript">
/**
var ueditor = UM.getEditor('editor',{
    //这里可以选择自己需要的工具按钮名称,此处仅选择如下七个
    toolbar:['emotion'],
    //focus时自动清空初始化时的内容
    autoClearinitialContent:true,
    //关闭字数统计
    wordCount:false,
    //关闭elementPath
    elementPathEnabled:false,
    //默认的编辑区域高度
    initialFrameHeight: 30
    //更多其他参数，请参考umeditor.config.js中的配置项
});
// 清空
ueditor.setContent("");

function getContent(){
	return ueditor.getContent();
}

function getContentTxt(){
	return ueditor.getContentTxt();
}

function setContent(content){
	ueditor.setContent(content);
}

**/

$(function(){
	$.ready(function(){
		
		//实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
		
		$('.chat_wrap').css('left',($(window).width()-$('.chat_wrap').width())/2);
		$('.chat_wrap').css('top',($(window).height()-$('.chat_wrap').height())/2);
		$(window).resize(function(){
			$('.chat_wrap').css('left',($(window).width()-$('.chat_wrap').width())/2);
			$('.chat_wrap').css('top',($(window).height()-$('.chat_wrap').height())/2);	
		})
	});
	/*评价内容 textarea*/	
	var limitNum = 256;
    var pattern = '还可以输入' + limitNum + '字';
    $('.txt_num').html(pattern);
    $('.degree_content').keyup(
    function(){
        var remain = $(this).val().length;
        if(remain > 500){
                pattern = "字数超过限制！";
            }else{
                var result = limitNum - remain;
                pattern = '还可以输入' + result + '字';
            }
            $('.txt_num').html(pattern);
        }
    );
    
	/*满意度评价*/
	$('.degree_button').click(function(){
		$('.pop_recommend').show();	
	});
	$('.recommend_btn a').click(function(){
		if($('.degree_inputs input[type=radio]:checked').length>0){
			$('.pop_recommend').hide();
			$('<div class="msg_notice">'+
                    	'<i class="icon_notice"></i>'+
                        '<p>您对海信容声官方客服5评价成功！</p>'+
                    	'<span class="msg_tl"></span>'+
                    	'<span class="msg_tr"></span>'+
                   		'<span class="msg_br"></span>'+
                    	'<span class="msg_bl"></span>'+
                    '</div>').appendTo('.scroll_inner');
		}
		$("#scroll_div").scrollTop($(".scroll_inner").height());// 发送消息后消息滚动到最底部
	});
	$('.edit_btn_area .btn_close').click(function(){
		if($('.degree_inputs input[type=radio]:checked').length==0){
			$('.pop_recommend').show();	
		}	
	});
	$('.close_pop_recommend').click(function(){
		$('.pop_recommend').hide();		
	});
	/*选择发送方式*/
	$('.btn_send_set').click(function(){
		$('.send_set_con').toggle();	
	});
	$('.send_set_con li').click(function(){
		$(this).addClass('current').siblings().removeClass();
		$('.send_set_con').hide();	
	});
	
	/*关闭聊天窗口*/
	$('.chat_close').click(function(){
		window.close();	
	});
	
	/*右侧tab切换*/
	$().ready(function(){
	   	//控制选项卡顺序及展示内容，设置第一个展示
	   	//此处代码从后台获取
	   	
	   	/*
	   		chat_goods:
	   		chat_order_list:
	   		chat_order:
	   		chat_supp:
	   	*/
	   	
	   	
	   	var tab_items = [{id: "chat_goods", name: "咨询商品"}, {id: "chat_order_list", name: "最近订单"}];
	   	tab_items = [{id: "chat_order_list", name: "最近订单"}];
	   	
	   	<?php if ($this->_var['tab_items'] != null): ?>
	   	tab_items = <?php echo $this->_var['tab_items']; ?>;
	   	<?php endif; ?>
			   	
	   	for(var i = 0; i < tab_items.length; i++){
	   		var tab_item = tab_items[i];
	   		var current_class = i == 0 ? "current" : "";
	   		$("#tabs").append("<span id='"+tab_item.id+"' class='"+current_class+" tab_item'>"+tab_item.name+"</span>");
	   		if(i == 0){
	   			$("."+tab_item.id).show();
	   		}
	   	}
	   	//切换选项卡
	   	$(".tab_item").click(function(){
	   		var tab_item_id = $(this).attr("id");
	   		$(".tab_content").hide();
	   		$("."+tab_item_id).show();
	   		$(".current").removeClass("current");
	   		$("#"+tab_item_id).addClass("current");
	   	});
	});
	
	/* 控制订单列表的上下页切换  */
    $().ready(function(){
    	
    	var cur_page = 0;
        <?php if ($this->_var['order_count'] > 0): ?>
        var total_page = <?php echo $this->_var['order_count']; ?> - 1;
        <?php else: ?>
        var total_page = 0;
        <?php endif; ?>
    	
    	$(".order_prev").click(function(){
    		
    		if(total_page == 0){
    			return;
    		}
    		
    		if(cur_page == 0){
    			cur_page = total_page;
    		}else{
    			cur_page = cur_page - 1;
    		}
    		$(".chat_order_list").find(".order_detail").hide();
    		$("#order_"+cur_page).show();
    		$("#cur_page").html(cur_page + 1);
    	});
    	$(".order_next").click(function(){
    		
    		if(total_page == 0){
    			return;
    		}
    		
    		if(cur_page == total_page){
    			cur_page = 0;
    		}else{
    			cur_page = cur_page + 1;
    		}
    		$(".chat_order_list").find(".order_detail").hide();
    		$("#order_"+cur_page).show();
    		$("#cur_page").html(cur_page + 1);
    	});
    });
	
})
</script>
</body>
</html>
