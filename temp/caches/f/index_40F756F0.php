<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:72:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/index.dwt";i:1;s:91:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/library/page_headerindex.lbi";i:2;s:85:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/library/header_tan.lbi";i:3;s:83:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/library/head_nav.lbi";i:4;s:84:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/library/index_ad3.lbi";i:5;s:85:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/library/stores_tab.lbi";i:6;s:79:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/library/help.lbi";i:7;s:86:"F:/phpstudy/PHPTutorial/WWW/shengqin/themes/68ecshopcom_360buy/library/page_footer.lbi";}s:7:"expires";i:1552028624;s:8:"maketime";i:1552025024;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://shengqin.test.com/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="themes/68ecshopcom_360buy/css/style.css" />
<title>海众文化首页</title>
<script src="themes/68ecshopcom_360buy/js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.5.min.js" charset="utf-8"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/promo_v2.js" charset="utf-8"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/scroll.js" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				
				$('.fenlei ul li').mouseenter(function(){
					$(this).stop().animate({'height':'170px'},300).siblings().stop().animate({'height':'44px'},300);
					$(this).siblings().css('background','url(../themes/68ecshopcom_360buy/img/bg.png) repeat;');
					
				}).mouseleave(function(){
					$('.fenlei ul li').stop().animate({'height':'109px'},300)
					$(this).siblings().css('background','url(../themes/68ecshopcom_360buy/img/bg.png) repeat;');
				});
				
				$('.myscroll').myScroll({
					speed: 40, //数值越大，速度越慢
					rowHeight: 35 //li的高度
				});
				
			})
			
		function region()
		{
			var diag = new Dialog();
			diag.Width = 1050;
			diag.Height = 700;
			diag.Title = "切换城市";
			diag.URL = "area.php?act=index";
			diag.show();
		}
		</script>
 
</head>
<body>
<div id="xuanfu" class="xuanfu">
	<a href="user.php"><img src="themes/68ecshopcom_360buy/img/zhongxin.png" /></a>
    <a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" target="_blank" alt="点击这里联系我" title="点击这里联系我"><img src="themes/68ecshopcom_360buy/img/kefu.png" /></a>
	<a href="#" onclick="chickdisplay()"><img src="themes/68ecshopcom_360buy/img/cha.jpg" /></a>
</div>
 
    <div id="top" style="height:140px">
    	<div class="top-line">
        	
            <div class="top-line-main">
            	<div class="left">
            	</div>
       			<div class="right">
					                	<p class="tel">全国统一服务热线：0539-8888888</p>
										<p class="orange"><a class="orange" href="user.php">登陆</a></p>
                    <p>丨</p><p><a href="register.php">注册</a></p>
					
                    <!--<p class="erweima">在线充值</p>-->
                </div>
            </div>
        </div>
    
    <div id="top-1">
    	<div class="logo"></div>
    	<div class="city">
        	<button type="button" ></button>
			<a class="pl orange"></a>
        </div>
        <form class="mallSearch-form" method="get" name="searchForm" id="searchForm" action="search.php" onSubmit="return checkSearchForm()">
        <div class="center">
			<input aria-haspopup="true" role="combobox" class="s-combobox-input input" name="keywords" id="keyword" tabindex="9" accesskey="s" onkeyup="STip(this.value, event);" autocomplete="off"  value="请输入关键词" onFocus="if(this.value=='请输入关键词'){this.value='';}else{this.value=this.value;}" onBlur="if(this.value=='')this.value='请输入关键词'" type="text">
			<input type="submit" value="搜索" class="button input-sousuo"  style="cursor:pointer">
			<p class="p-center">
			热门搜索：
						<a href="search.php?keywords=%E6%90%9E%E7%AC%91" title="搞笑">&nbsp;搞笑</a>
						<a href="search.php?keywords=%E6%95%99%E8%82%B2" title="教育">&nbsp;教育</a>
						<a href="search.php?keywords=%E4%BD%93%E8%82%B2" title="体育">&nbsp;体育</a>
						<a href="search.php?keywords=%E5%81%A5%E5%BA%B7" title="健康">&nbsp;健康</a>
						<a href="search.php?keywords=%E5%8A%B1%E5%BF%97" title="励志">&nbsp;励志</a>
						</p>
        </div>
        </form>
    </div>
     
    </div>
<script type="text/javascript">function _show_(h,b){if(!h){return;}if(b&&b.source&&b.target){var d=(typeof b.source=="string")?M.$("#"+b.source):b.source;var e=(typeof b.target=="string")?M.$("#"+b.target):b.target;if(d&&e&&!e.isDone){e.innerHTML=d.value;d.parentNode.removeChild(d);if(typeof b.callback=="function"){b.callback();}e.isDone=true;}}M.addClass(h,"hover");if(b&&b.isLazyLoad&&h.isDone){var g=h.find("img");for(var a=0,c=g.length;a<c;a++){var f=g[a].getAttribute("data-src_index_menu");if(f){g[a].setAttribute("src",f);g[a].removeAttribute("data-src_index_menu");}}h.isDone=true;}}function _hide_(a){if(!a){return;}if(a.className.indexOf("hover")>-1){M.removeClass(a,"hover");}}</script>
<div id="navOut">
	<div class="nav">
		<!--<div class="navLeft">
			<p>首页</p>
			<<div class="fenlei">
				<ul>
										<li>
						 <dl class="fenleiLeft">
							<dt>热点</dt>
							<dd>
								
							</dd>
						 </dl>
					</li>
										<li>
						 <dl class="fenleiLeft">
							<dt>搞笑</dt>
							<dd>
								
							</dd>
						 </dl>
					</li>
										<li>
						 <dl class="fenleiLeft">
							<dt>健康</dt>
							<dd>
								
							</dd>
						 </dl>
					</li>
										<li>
						 <dl class="fenleiLeft">
							<dt>情感</dt>
							<dd>
								
							</dd>
						 </dl>
					</li>
									</ul>
			</div>
		</div>-->
		<ul class="navRight">
    <li style="width:150px;"><a href="/" title="">首页</a><span></span></li>
	 
	<li style="width:150px;"><a href="category.php?id=3" title="热点">热点</a><span></span></li>
	 
	<li style="width:150px;"><a href="category.php?id=1" title="搞笑">搞笑</a><span></span></li>
	 
	<li style="width:150px;"><a href="category.php?id=2" title="健康">健康</a><span></span></li>
	 
	<li style="width:150px;"><a href="category.php?id=6" title="情感">情感</a><span></span></li>
	</ul>	</div>
</div>
<script type="text/javascript">
//<![CDATA[
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
	var frm  = document.getElementById('searchForm');
	var type = parseInt(document.getElementById('searchtype').value);
	frm.action = type==0 ? 'search.php' : 'stores.php';
        return true;
    }
    else
    {
	alert("请输入关键词！");
        return false;
    }
}
function myValue1()
{
	document.getElementById('keyword').value = "请输入商品名称或编号...";
}
function myValue2()
{
	document.getElementById('keyword').value = "";
}
//]]>
</script>
<div class="blank10"></div>
<script>
/* *
 * 清除购物车购买商品数量
 */
function delet(rec_id)
{
	var formBuy      = document.forms['formCart'];
	var domname='goods_number_'+rec_id;
	var attr = getSelectedAttributes(document.forms['formCart']);
	var qty = parseInt(document.getElementById(domname).innerHTML)==0;
	Ajax.call('flow.php', 'step=price&rec_id=' + rec_id + '&number=' + qty, changecartPriceResponse, 'GET', 'JSON');
}			
/* *
 * 增加购物车购买商品数量
 */
function addcartnum(rec_id)
{
  var attr = getSelectedAttributes(document.forms['formCart']);
  var domname='goods_number_'+rec_id;
  var qty = parseInt(document.getElementById(domname).innerHTML)+1;
  Ajax.call('flow.php', 'step=price&rec_id=' + rec_id + '&number=' + qty, changecartPriceResponse, 'GET', 'JSON');
}
/* *
 * 减少购买商品数量
 */
function lesscartnum(rec_id)
{
    var formBuy      = document.forms['formCart'];
	var domname='goods_number_'+rec_id;
	var attr = getSelectedAttributes(document.forms['formCart']);
	var qty = parseInt(document.getElementById(domname).innerHTML)-1;
	Ajax.call('flow.php', 'step=price&rec_id=' + rec_id + '&number=' + qty, changecartPriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changecartPriceResponse(res)
{
  if (res.err_msg.length > 0 )
  {
    alert(res.err_msg);
  }
  else
  {
	var domnum='goods_number_'+res.rec_id;
	if(res.qty <= 0){
    	document.getElementById('CART_INFO').innerHTML = res.content1;
	}else{
    	document.getElementById(domnum).innerHTML = res.qty;
	}
    document.getElementById('ECS_CARTINFO').innerHTML = res.result;
  }
}
function changallser(allser)
{
	document.getElementById(allser).className='item fore';
}
</script> 
<script>
$('.search-type li').click(function() {
    $(this).addClass('cur').siblings().removeClass('cur');
    $('#searchtype').val($(this).attr('num'));
});
</script>      
		
 
 <style>
.myscroll {height: 175px; margin: 0 auto; font-size: 12px; overflow: hidden;}
.myscroll li {height: 35px;}
.myscroll a {color: #333; text-decoration: none;}
.myscroll a:hover {color: #ED5565; text-decoration: underline;}
</style>
 <div id="flright">
 	<span><a href="article_cat.php?id=12">更多>></a></span>
 	<h4>热点</h4>
	<div class="myscroll">
    <ul>
	    	<li><a href="article.php?id=135">段子也幽默｜以前和现在</a></li>
	    	<li><a href="article.php?id=134">千古难题的答案有时就是这么简...</a></li>
	    	<li><a href="article.php?id=120">关于养老金压力、减税降费…财...</a></li>
	    	<li><a href="article.php?id=63">港区人大代表香港电影发展局局...</a></li>
	    	<li><a href="article.php?id=62">这项工作22个省份党政一把手...</a></li>
	    	<li><a href="article.php?id=61">可立在桌面上 华为P30外型...</a></li>
	    </ul>
	</div>
    <span></span>
 
 </div>          
        
           
        
        
        
        
        
		<div id="banner">
        <div class="promoWD">
			<div id="main_promo">
	<div id="slides">
					<div class="slide"><a href="http://www.zgshengqin.com/goods.php?id=440" target="_blank" title=""><img src="data/afficheimg/20160818vdptub.jpg"  alt="" /></a></div>
			</div>
</div>
<div id="dots">
	<ul>
		  <li class="menuItem"><a href="javascript:;"></a></li>
		</ul>
</div>          
  </div>
		</div>
        
            
        
        
        
<div class="cb10"></div>
<div id="main">
	<h4 id="color" onmouseover="chick1()">搞笑</h4><h4  id="color1" onmouseover="chick2()">汽车</h4>	<div class="cb10"></div>
    <div class="ccc">
	<ul  id="reixiao1" id="ceshi">
				    	<li>
			<a href="goods.php?id=498" title="在网吧上网的时候，你们遇到过哪些奇葩事？">
				<img src="images/201903/thumb_img/498_thumb_G_1551928251033.jpg" alt="在网吧上网的时候，你们遇到过哪些奇葩事？" />
				<h5>在网吧上网的时候，你们遇到过...</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=502" title="笑到喷饭是一种怎样的体验？">
				<img src="images/201903/thumb_img/502_thumb_G_1551927913515.jpg" alt="笑到喷饭是一种怎样的体验？" />
				<h5>笑到喷饭是一种怎样的体验？</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=501" title="深夜的朋友圈能有多可怕？笑疯在被窝里哈哈哈">
				<img src="images/201903/thumb_img/501_thumb_G_1551927988527.jpg" alt="深夜的朋友圈能有多可怕？笑疯在被窝里哈哈哈" />
				<h5>深夜的朋友圈能有多可怕？笑疯...</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=500" title="你在驾校里遇到过什么啼笑皆非的事情？">
				<img src="images/201903/thumb_img/500_thumb_G_1551928064078.jpg" alt="你在驾校里遇到过什么啼笑皆非的事情？" />
				<h5>你在驾校里遇到过什么啼笑皆非...</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=499" title="明星有哪些神回复？">
				<img src="images/201903/thumb_img/499_thumb_G_1551928126308.jpg" alt="明星有哪些神回复？" />
				<h5>明星有哪些神回复？</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=509" title="由于隔音不好，你听到过什么搞笑或奇葩的事？">
				<img src="images/201903/thumb_img/509_thumb_G_1551925681276.jpg" alt="由于隔音不好，你听到过什么搞笑或奇葩的事？" />
				<h5>由于隔音不好，你听到过什么搞...</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=510" title="哪些笑话可以让你笑一辈子？">
				<img src="images/201903/thumb_img/510_thumb_G_1551925591722.jpg" alt="哪些笑话可以让你笑一辈子？" />
				<h5>哪些笑话可以让你笑一辈子？</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=511" title="你是否有一张让别人一看就笑喷的珍藏图？">
				<img src="images/201903/thumb_img/511_thumb_G_1551925560151.jpg" alt="你是否有一张让别人一看就笑喷的珍藏图？" />
				<h5>你是否有一张让别人一看就笑喷...</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=512" title="上网到今天，你觉得最沙雕的一句话是什么？">
				<img src="images/201903/thumb_img/512_thumb_G_1551924405259.jpg" alt="上网到今天，你觉得最沙雕的一句话是什么？" />
				<h5>上网到今天，你觉得最沙雕的一...</h5>
			</a>
		</li>
						    	<li>
			<a href="goods.php?id=513" title="你见过哪些尴尬到极点的搞笑对话？">
				<img src="images/201903/thumb_img/513_thumb_G_1551925267084.jpg" alt="你见过哪些尴尬到极点的搞笑对话？" />
				<h5>你见过哪些尴尬到极点的搞笑对...</h5>
			</a>
		</li>
				    </ul>
    </div>
	<div class="ccc">
	<ul id="reixiao2" style="display:none;">
		        		            	<li>
        			<a href="goods.php?id=508" title="销量下滑/产能过剩 现代汽车考虑暂停北京第一工厂生产">
        				<img src="images/201706/thumb_img/508_thumb_G_1496705543563.jpg" alt="销量下滑/产能过剩 现代汽车考虑暂停北京第一工厂生产" />
        				<h5>销量下滑/产能过剩 现代汽车...</h5>
        			</a>
        		</li>
        		        		        		            	<li>
        			<a href="goods.php?id=503" title="买比亚迪宋MAX再等等！新款即将上市，到店实拍抢先了解一下">
        				<img src="images/201903/thumb_img/503_thumb_G_1551927796352.jpg" alt="买比亚迪宋MAX再等等！新款即将上市，到店实拍抢先了解一下" />
        				<h5>买比亚迪宋MAX再等等！新款...</h5>
        			</a>
        		</li>
        		        		        		            	<li>
        			<a href="goods.php?id=504" title="特斯拉全新SUV Model Y来了！比Model 3大，可惜只能通过线上预订">
        				<img src="images/201903/thumb_img/504_thumb_G_1551927732652.jpg" alt="特斯拉全新SUV Model Y来了！比Model 3大，可惜只能通过线上预订" />
        				<h5>特斯拉全新SUV Model...</h5>
        			</a>
        		</li>
        		        		        		            	<li>
        			<a href="goods.php?id=505" title="奇瑞发布全新概念车，外观大气时尚，配无框对开门，售价预计15万">
        				<img src="images/201903/thumb_img/505_thumb_G_1551927666899.jpg" alt="奇瑞发布全新概念车，外观大气时尚，配无框对开门，售价预计15万" />
        				<h5>奇瑞发布全新概念车，外观大气...</h5>
        			</a>
        		</li>
        		        		        		            	<li>
        			<a href="goods.php?id=506" title="售价5980元，城市代步时尚精灵，油耗2升+时速97km，续航250km！">
        				<img src="images/201903/thumb_img/506_thumb_G_1551927590987.jpg" alt="售价5980元，城市代步时尚精灵，油耗2升+时速97km，续航250km！" />
        				<h5>售价5980元，城市代步时尚...</h5>
        			</a>
        		</li>
        		        		    </ul>
	</div>
 <SCRIPT language=javascript>
 function chick1(){
		document.getElementById("reixiao2").style.display='none';
		document.getElementById("reixiao1").style.display='block';
		document.getElementById("color").style.color='#ed9b01';
		document.getElementById("color1").style.color='#333';
}
function chickdisplay(){
		document.getElementById("xuanfu").style.display='none';
}
function chick2(){
		document.getElementById("reixiao2").style.display='block';
		document.getElementById("reixiao1").style.display='none';
		document.getElementById("color").style.color='#333';
		document.getElementById("color1").style.color='#ed9b01';
}
</SCRIPT>
<div class="cb10"></div>
<div class="floor">
	<h2>F1</h2><h4>产品商城</h4><p>DOMESTIC SERVICE</p>
    <div class="cb"></div>
    <div class="main-main">
    	<div class="main-main-left">
        	<div class="left-1">
            	<img src="themes/68ecshopcom_360buy/img/1-6.png" /><h3>生活用品</h3>
                </div>
				        </div>
        <div class="main-main-center">
			
			554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"1";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
        </div>
        <div class="main-main-right">
			        	<ul>
				            	<li><a href="goods.php?id=291"><img src="images/201606/thumb_img/291_thumb_G_1465318008184.jpg" height="200" width="200" />
                <div class="detail">
                	<p>天然葛仙米水润面膜 长效...</p>
                   <p> <del>售价：<b class="red">118.8元</b></del></p>
                   <p> 会员价：<b class="red">99.0元</b></p>
                </div>
                </a></li>
				            	<li><a href="goods.php?id=292"><img src="images/201606/thumb_img/292_thumb_G_1465318984917.jpg" height="200" width="200" />
                <div class="detail">
                	<p>天然葛仙米精华保湿爽肤水...</p>
                   <p> <del>售价：<b class="red">150.0元</b></del></p>
                   <p> 会员价：<b class="red">125.0元</b></p>
                </div>
                </a></li>
				            	<li><a href="goods.php?id=293"><img src="images/201606/thumb_img/293_thumb_G_1465320940901.jpg" height="200" width="200" />
                <div class="detail">
                	<p>天然葛仙米保湿眼霜 保湿...</p>
                   <p> <del>售价：<b class="red">147.6元</b></del></p>
                   <p> 会员价：<b class="red">123.0元</b></p>
                </div>
                </a></li>
				            	<li><a href="goods.php?id=329"><img src="images/201606/thumb_img/329_thumb_G_1466639193287.jpg" height="200" width="200" />
                <div class="detail">
                	<p>vauch维楚 天然葛仙...</p>
                   <p> <del>售价：<b class="red">21.5元</b></del></p>
                   <p> 会员价：<b class="red">18.0元</b></p>
                </div>
                </a></li>
				            	<li><a href="goods.php?id=330"><img src="images/201609/thumb_img/330_thumb_G_1473358403290.jpg" height="200" width="200" />
                <div class="detail">
                	<p>绿捷雅 葛仙米精华护发乳...</p>
                   <p> <del>售价：<b class="red">50.4元</b></del></p>
                   <p> 会员价：<b class="red">42.0元</b></p>
                </div>
                </a></li>
				            	<li><a href="goods.php?id=390"><img src="images/201609/thumb_img/390_thumb_G_1473357610667.jpg" height="200" width="200" />
                <div class="detail">
                	<p>玫瑰花茶 美容养颜茶</p>
                   <p> <del>售价：<b class="red">82.8元</b></del></p>
                   <p> 会员价：<b class="red">69.0元</b></p>
                </div>
                </a></li>
				            </ul>
			        </div>
    </div>
</div> 
<div class="cb10"></div>
<div class="floor">
	<h2>F2</h2><h4>家政在线服务</h4><p>DOMESTIC SERVICE</p>
    <div class="cb"></div>
    <div class="main-main">
    	<div class="main-main-left">
        	<div class="left-2">
            	<img src="themes/68ecshopcom_360buy/img/1-6.png" /><h3>精品家政</h3>
                </div>
				        </div>
        <div class="main-main-center">
			
			554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
        </div>
        <div class="main-main-right">
			        	<ul>
				            	<li>
					<a href="goods.php?id=508">
						<img src="images/201706/thumb_img/508_thumb_G_1496705543563.jpg" alt="销量下滑/产能过剩 现代汽车考虑暂停北京第一工厂生产" height="200" width="200">
						<div class="detail">
							<p>从业经验 ：<b class="red"></b></p>
							<p> <del>服务工资：<b class="red"></b></del></p>
							<p> 会员卡：<b class="red"></b></p>
						</div>
					</a>
				</li>
				            	<li>
					<a href="goods.php?id=503">
						<img src="images/201903/thumb_img/503_thumb_G_1551927796352.jpg" alt="买比亚迪宋MAX再等等！新款即将上市，到店实拍抢先了解一下" height="200" width="200">
						<div class="detail">
							<p>从业经验 ：<b class="red"></b></p>
							<p> <del>服务工资：<b class="red"></b></del></p>
							<p> 会员卡：<b class="red"></b></p>
						</div>
					</a>
				</li>
				            	<li>
					<a href="goods.php?id=504">
						<img src="images/201903/thumb_img/504_thumb_G_1551927732652.jpg" alt="特斯拉全新SUV Model Y来了！比Model 3大，可惜只能通过线上预订" height="200" width="200">
						<div class="detail">
							<p>从业经验 ：<b class="red"></b></p>
							<p> <del>服务工资：<b class="red"></b></del></p>
							<p> 会员卡：<b class="red"></b></p>
						</div>
					</a>
				</li>
				            	<li>
					<a href="goods.php?id=505">
						<img src="images/201903/thumb_img/505_thumb_G_1551927666899.jpg" alt="奇瑞发布全新概念车，外观大气时尚，配无框对开门，售价预计15万" height="200" width="200">
						<div class="detail">
							<p>从业经验 ：<b class="red"></b></p>
							<p> <del>服务工资：<b class="red"></b></del></p>
							<p> 会员卡：<b class="red"></b></p>
						</div>
					</a>
				</li>
				            	<li>
					<a href="goods.php?id=392">
						<img src="images/201609/thumb_img/392_thumb_G_1473381367132.jpg" alt="月嫂" height="200" width="200">
						<div class="detail">
							<p>从业经验 ：<b class="red">1年</b></p>
							<p> <del>服务工资：<b class="red">3700-4500</b></del></p>
							<p> 会员卡：<b class="red">3900</b></p>
						</div>
					</a>
				</li>
				            	<li>
					<a href="goods.php?id=354">
						<img src="images/201609/thumb_img/354_thumb_G_1473380682094.jpg" alt="月嫂" height="200" width="200">
						<div class="detail">
							<p>从业经验 ：<b class="red">1年</b></p>
							<p> <del>服务工资：<b class="red">4500-5000</b></del></p>
							<p> 会员卡：<b class="red">4500</b></p>
						</div>
					</a>
				</li>
				            </ul>
			        </div>
    </div>
</div> 
        <div class="cb10"></div>
<div class="floor">
	<h2>F3</h2><h4>养老在线服务</h4><p>DOMESTIC SERVICE</p>
    <div class="cb"></div>
    <div class="main-main">
    	<div class="main-main-left">
        	<div class="left-3">
            	<img src="themes/68ecshopcom_360buy/img/1-6.png" /><h3>养老在线</h3>
                </div>
				        </div>
        <div class="main-main-center">
			
			554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"3";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
        </div>
        <div class="main-main-right">
			        	<ul>
				            	<li>
                                        <a href="goods.php?id=506">
						<img src="images/201903/thumb_img/506_thumb_G_1551927590987.jpg" alt="售价5980元，城市代步时尚精灵，油耗2升+时速97km，续航250km！" height="200" width="200">
						<div class="detail">
							<p>售价5980元，城市代步时尚...</p>
							<p> <del>收费区间：<b class="red">？？元</b></del></p>
							<p> 会员卡：<b class="red">？？元</b></p>
						</div>
					</a>
				</li>
				            	<li>
                                        <a href="goods.php?id=507">
						<img src="images/201903/thumb_img/507_thumb_G_1551927510851.jpg" alt="生命只有一次，不要把永久的伤痛留给家人！" height="200" width="200">
						<div class="detail">
							<p>生命只有一次，不要把永久的伤...</p>
							<p> <del>收费区间：<b class="red">？？元</b></del></p>
							<p> 会员卡：<b class="red">？？元</b></p>
						</div>
					</a>
				</li>
				            	<li>
                                        <a href="goods.php?id=333">
						<img src="images/201609/thumb_img/333_thumb_G_1473631959775.jpg" alt="旅游养老" height="200" width="200">
						<div class="detail">
							<p>旅游养老</p>
							<p> <del>收费区间：<b class="red">60-100元</b></del></p>
							<p> 会员卡：<b class="red">60元</b></p>
						</div>
					</a>
				</li>
				            	<li>
                                        <a href="goods.php?id=334">
						<img src="images/201609/thumb_img/334_thumb_G_1473631928627.jpg" alt="居家养老" height="200" width="200">
						<div class="detail">
							<p>居家养老</p>
							<p> <del>收费区间：<b class="red">3600-4200元</b></del></p>
							<p> 会员卡：<b class="red">3600元</b></p>
						</div>
					</a>
				</li>
				            	<li>
                                        <a href="goods.php?id=335">
						<img src="images/201609/thumb_img/335_thumb_G_1473631882825.jpg" alt="旅游养老" height="200" width="200">
						<div class="detail">
							<p>旅游养老</p>
							<p> <del>收费区间：<b class="red">120-180元</b></del></p>
							<p> 会员卡：<b class="red">120元</b></p>
						</div>
					</a>
				</li>
				            	<li>
                                        <a href="goods.php?id=336">
						<img src="images/201609/thumb_img/336_thumb_G_1473631844036.jpg" alt="养老院" height="200" width="200">
						<div class="detail">
							<p>养老院</p>
							<p> <del>收费区间：<b class="red">1500-1800元</b></del></p>
							<p> 会员卡：<b class="red">1500元</b></p>
						</div>
					</a>
				</li>
				            </ul>
                    </div>
    </div>
</div>
        
        <div class="cb10"></div>
<div class="floor">
	<h2>F4</h2><h4>社区便民服务</h4><p>DOMESTIC SERVICE</p>
    <div class="cb"></div>
    <div class="main-main">
    	<div class="main-main-left">
        	<div class="left-4">
            	<img src="themes/68ecshopcom_360buy/img/1-6.png" /><h3>社区便民</h3>
            </div>
			        </div>
        <div class="main-main-center">
			
			554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"4";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
        </div>
        <div class="main-main-right">
			        	<ul>
                            	<li>
                    <a href="goods.php?id=283">
                        <!--<img src="themes/68ecshopcom_360buy/img/11-8.png" />-->
                        <img src="images/201605/thumb_img/283_thumb_G_1463428103454.jpg" alt="鸿运英才少儿险" height="200" width="200">
                        <div class="detail">
                            <p>鸿运英才少儿险</p>
                            <p> <del>价格：<b class="red">0.0元</b></del></p>
                            <p> 会员价：<b class="red">0.0														元</b></p>
                        </div>
                    </a>
                </li>
                            	<li>
                    <a href="goods.php?id=284">
                        <!--<img src="themes/68ecshopcom_360buy/img/11-8.png" />-->
                        <img src="images/201605/thumb_img/284_thumb_G_1463501713859.jpg" alt="少儿平安福健康保险" height="200" width="200">
                        <div class="detail">
                            <p>少儿平安福健康保险</p>
                            <p> <del>价格：<b class="red">0.0元</b></del></p>
                            <p> 会员价：<b class="red">0.0														元</b></p>
                        </div>
                    </a>
                </li>
                            	<li>
                    <a href="goods.php?id=285">
                        <!--<img src="themes/68ecshopcom_360buy/img/11-8.png" />-->
                        <img src="images/201605/thumb_img/285_thumb_G_1463507022756.jpg" alt="金灿人生" height="200" width="200">
                        <div class="detail">
                            <p>金灿人生</p>
                            <p> <del>价格：<b class="red">0.0元</b></del></p>
                            <p> 会员价：<b class="red">0.0														元</b></p>
                        </div>
                    </a>
                </li>
                            	<li>
                    <a href="goods.php?id=316">
                        <!--<img src="themes/68ecshopcom_360buy/img/11-8.png" />-->
                        <img src="images/201606/thumb_img/316_thumb_G_1466548006128.jpg" alt="平安智能星教育金保险计划" height="200" width="200">
                        <div class="detail">
                            <p>平安智能星教育金保险计划</p>
                            <p> <del>价格：<b class="red">0.0元</b></del></p>
                            <p> 会员价：<b class="red">0.0														元</b></p>
                        </div>
                    </a>
                </li>
                            	<li>
                    <a href="goods.php?id=317">
                        <!--<img src="themes/68ecshopcom_360buy/img/11-8.png" />-->
                        <img src="images/201606/thumb_img/317_thumb_G_1466549733441.jpg" alt="平安乐享福养老年金计划" height="200" width="200">
                        <div class="detail">
                            <p>平安乐享福养老年金计划</p>
                            <p> <del>价格：<b class="red">0.0元</b></del></p>
                            <p> 会员价：<b class="red">0.0														元</b></p>
                        </div>
                    </a>
                </li>
                            	<li>
                    <a href="goods.php?id=318">
                        <!--<img src="themes/68ecshopcom_360buy/img/11-8.png" />-->
                        <img src="images/201606/thumb_img/318_thumb_G_1466558517811.jpg" alt="平安福健康保障计划介绍" height="200" width="200">
                        <div class="detail">
                            <p>平安福健康保障计划介绍</p>
                            <p> <del>价格：<b class="red">0.0元</b></del></p>
                            <p> 会员价：<b class="red">0.0														元</b></p>
                        </div>
                    </a>
                </li>
                            </ul>
			            
        </div>
    </div>
    
</div> 
 <div class="cb10"></div>
<div class="floor">
	<h2>F5</h2><h4>最新房屋供求信息</h4><p>DOMESTIC SERVICE</p>
    <div class="cb"></div>
    
    
    <div class="floor-5-main">
    	<div class="floor-left">
        	<div class="top">
            	<div class="top-left">
                	<div class="top-left-1">
										<a href="user.php">
					                    <h2>出租房屋</h2>
                    <p>出租信息 及时发布</p>
                    </a>
                    </div>
                    <div class="top-left-2">
										<a href="user.php">
					                    <h2 class="mt10">买房</h2>
                    </a>
                    </div>
                </div>
                <div class="top-right">
										<a href="user.php">
					                    <h2 class="fs46 mt80">求租房屋</h2>
                    <p class=" fs16">免费发布您的求租信息</p>
                    </a>
                </div>
            
            </div>
            <div class="bottom">
            	<div class="bottom-left">
                	<a href="#"><img class="mt20 ml20" src="themes/68ecshopcom_360buy/img/11233.png" /></a>
                
                </div>
                <div class="bottom-right">
								<a href="user.php">
				                <h2 class="fs46 w90 mt20 talign ml20 bbr">卖房</h2>
                
                 
				<div class="pppp">
                <h3>
                最及时的房产信息
                
                </h3>
                <p class="bb111 fs8 w150 ">TIMELYREALINFORMATION</p>
                
                </div>                 
                </a> 
                 
                </div>
            </div>
        </div>
    	<div class="floor-right">
        	<div class="biaoti">
            <h5>最新房屋供求信息</h5>
            
            </div>
			<div class="myscroll" style="height:329px;">
        	<ul>
                											
						<li><span>更新日期：2016-09-28 14:35:04 </span><a href="release.php?act=release_view&id=174"><b>00</b>可办公迷你小公寓   </a></li>
											
						<li><span>更新日期：2016-09-28 14:32:57 </span><a href="release.php?act=release_view&id=173"><b>01</b>精装修房子对外出租可办公   </a></li>
											
						<li><span>更新日期：2016-09-28 14:31:42 </span><a href="release.php?act=release_view&id=172"><b>02</b>房屋出租押一付三   </a></li>
											
						<li><span>更新日期：2016-09-27 15:53:28 </span><a href="release.php?act=release_view&id=171"><b>03</b>二室二厅出租房租面议   </a></li>
											
						<li><span>更新日期：2016-09-27 15:21:30 </span><a href="release.php?act=release_view&id=170"><b>04</b>商城花园三室一厅出租   </a></li>
											
						<li><span>更新日期：2016-09-26 16:04:15 </span><a href="release.php?act=release_view&id=168"><b>05</b>整套出租   </a></li>
											
						<li><span>更新日期：2016-09-25 14:58:35 </span><a href="release.php?act=release_view&id=167"><b>06</b>怡景新苑房屋出租   </a></li>
											
						<li><span>更新日期：2016-07-07 14:31:22 </span><a href="release.php?act=release_view&id=153"><b>07</b>公司院内部分房屋出租可办公仓储   </a></li>
											
						<li><span>更新日期：2016-07-07 14:23:56 </span><a href="release.php?act=release_view&id=115"><b>08</b>豪德鑫界新精装修带电梯迷你小复式   </a></li>
											
						<li><span>更新日期：2016-06-26 16:24:29 </span><a href="release.php?act=release_view&id=28"><b>09</b>适合办公、仓库，有院子，沿街院内   </a></li>
									                
            </ul>
			</div>
        
        </div>
    
    
    </div>
    
    
    
    
</div> 
    
 <div class="cb10"></div>
 
 
  <div class="floor">
	<h2>F6</h2><h4>家政供求市场</h4><p>DOMESTIC SERVICE</p>
    <div class="cb"></div>
    
    <div class="floor-6">
    	<div class="floor-6-kuang mr">
        	<div class="kuang-left br-fff">
            	<h1><a href="release.php?act=release_list&type_id=2" style="color:#FF3300">我要找家政</a></h1>
                <p class="pfoor6">胜亲，家庭一站式服务品牌！</p>
                <h1 class="talign bb111">100%</h1>
                <p class="pfoor6">雇主信息真实性</p>
                <div class="cb10"></div>
                <form name="search">
										<a href="user.php" class="input-fabu" style="padding-left:20px;display:inline-block; color:#fff;width:167px;">
											免费发布信息
					</a>
                </form>
            </div>
            <div class="kuang-right myscroll">
            	<div class="cb-none-10"></div>
									<ul>
											<li onclick="location='release.php?act=release_view&id=164'" style="margin:1px 1px 1px 10px">
						 海淀区  家庭保姆<br/><a style="float:right">——&nbsp;胜亲&nbsp;2016-08-13</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=163'" style="margin:1px 1px 1px 10px">
						 麻涌镇  家庭保姆<br/><a style="float:right">——&nbsp;胜亲&nbsp;2016-08-13</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=162'" style="margin:1px 1px 1px 10px">
						 长汀县  家庭保姆<br/><a style="float:right">——&nbsp;胜亲&nbsp;2016-08-13</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=161'" style="margin:1px 1px 1px 10px">
						 东城区  家庭保姆<br/><a style="float:right">——&nbsp;胜亲&nbsp;2016-08-13</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=160'" style="margin:1px 1px 1px 10px">
						 西岗区  家庭保姆<br/><a style="float:right">——&nbsp;zgshengqin&nbsp;2016-08-13</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=159'" style="margin:1px 1px 1px 10px">
						 西市区  看护小孩<br/><a style="float:right">——&nbsp;胜亲&nbsp;2016-08-13</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=158'" style="margin:1px 1px 1px 10px">
						 东市区  家教<br/><a style="float:right">——&nbsp;songfw&nbsp;2016-08-13</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=109'" style="margin:1px 1px 1px 10px">
						 兰山区  住家保姆<br/><a style="float:right">——&nbsp;1861539900&nbsp;2016-07-02</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=108'" style="margin:1px 1px 1px 10px">
						   找个住家保姆<br/><a style="float:right">——&nbsp;徐&nbsp;2016-07-02</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=27'" style="margin:1px 1px 1px 10px">
						 兰山区  保姆<br/><a style="float:right">——&nbsp;刘女士&nbsp;2016-06-19</a>
						</li>
										</ul>
				            
            </div>
        </div>
        <div class="floor-6-kuang  ">
        	<div class="kuang-left br-fff">
            	<h1><a href="release.php?act=release_list&type_id=1" style="color:#FF3300">我要做家政</a></h1>
                <p class="pfoor6">胜亲，家庭一站式服务品牌！</p>
                <h1 class="talign bb111">100%</h1>
                <p class="pfoor6">雇主信息真实性</p>
                <div class="cb10"></div>
                <form name="search">
								<a href="user.php" class="input-fabu" style="padding-left:20px;display:inline-block; color:#fff;width:167px;">
									免费发布信息
				</a>
                 </form>
            </div>
            
            <div class="kuang-right myscroll">
            	<div class="cb-none-10"></div>
									<ul>
											<li onclick="location='release.php?act=release_view&id=157'" style="margin:1px 1px 1px 10px">
						女士 陇西县  ssasdasad<br/><a style="float:right">——&nbsp;aaa&nbsp;2016-07-21</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=156'" style="margin:1px 1px 1px 10px">
						女士 大观区  1325641<br/><a style="float:right">——&nbsp;songfw&nbsp;2016-07-21</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=154'" style="margin:1px 1px 1px 10px">
						女士 新城区  qdasd<br/><a style="float:right">——&nbsp;sss&nbsp;2016-07-21</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=152'" style="margin:1px 1px 1px 10px">
						女士 临沭县  保姆<br/><a style="float:right">——&nbsp;能秀珍&nbsp;2016-07-07</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=151'" style="margin:1px 1px 1px 10px">
						女士 苍山县  月嫂<br/><a style="float:right">——&nbsp;孟凡玲&nbsp;2016-07-07</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=150'" style="margin:1px 1px 1px 10px">
						女士 兰山区  保洁<br/><a style="float:right">——&nbsp;张雪&nbsp;2016-07-07</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=149'" style="margin:1px 1px 1px 10px">
						女士 兰山区  保姆<br/><a style="float:right">——&nbsp;张丽&nbsp;2016-07-07</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=148'" style="margin:1px 1px 1px 10px">
						女士 莒南县  保姆<br/><a style="float:right">——&nbsp;吴芹花&nbsp;2016-07-07</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=147'" style="margin:1px 1px 1px 10px">
						女士 兰山区  保姆<br/><a style="float:right">——&nbsp;郑素娟&nbsp;2016-07-07</a>
						</li>
											<li onclick="location='release.php?act=release_view&id=146'" style="margin:1px 1px 1px 10px">
						女士 兰山区  钟点<br/><a style="float:right">——&nbsp;周广兰&nbsp;2016-07-07</a>
						</li>
										</ul>
				            
            </div>
            
            
        </div>
    
    
    </div>
    
          
       
	</div>
  
  
<div class="cb10"></div>
<div class="floor">
	<h2>F7</h2><h4>品牌商家</h4><p>DOMESTIC SERVICE</p>
    <div class="cb"></div> 
    <div class="floor8">
    
    	<ul class="b-t">
                        <li class="b-b  b-r " >
				<a href="brand.php?id=106">
					<img src="data/brandlogo/1466981600491227168.jpg" alt="旺盛达"  />
				</a>
			</li>
                        <li class="b-b  b-r " >
				<a href="brand.php?id=107">
					<img src="data/brandlogo/1466982490270404260.jpg" alt="绿捷雅"  />
				</a>
			</li>
                        <li class="b-b  b-r " >
				<a href="brand.php?id=108">
					<img src="data/brandlogo/1466982380578088846.jpg" alt="炎帝生物"  />
				</a>
			</li>
                        <li class="b-b  b-r " >
				<a href="brand.php?id=71">
					<img src="data/brandlogo/1437433840630073088.jpg" alt="格兰仕"  />
				</a>
			</li>
                        <li class="b-b  b-r " >
				<a href="brand.php?id=109">
					<img src="data/brandlogo/1467844551107907046.png" alt="广通家政"  />
				</a>
			</li>
                        <li class="b-b " >
				<a href="brand.php?id=110">
					<img src="data/brandlogo/1471461338974297097.jpg" alt="胜亲到家"  />
				</a>
			</li>
                    </ul>
    
    </div>
    
     
</div> 
  
  
        
</div>
       
  
 
	<style>
	.info-text p{margin:18px 0 30px 0;}
	</style>
	<div class="cb30"></div>
<div id="footers">
	<div class="footer-main">
    
	<div class="footer-1 ml20 mr10">
    	<img src="themes/68ecshopcom_360buy/img/foote-1.png" />
        <h4>金牌品质保证</h4>
        <p>优选品质 购物无忧</p>
    
    </div>
    
    <div class="footer-1 ml20 mr10">
    	<img src="themes/68ecshopcom_360buy/img/foote-2.png" />
        <h4>7天无理由退换货</h4>
        <p>为您提供无忧服务保障</p>
    
    </div>
    
    <div class="footer-1 ml20 mr10">
    	<img src="themes/68ecshopcom_360buy/img/foote-3.png" />
        <h4>线下服务体验</h4>
        <p>为您呈现不一样的购物体验</p>
    
    </div>
    
    <div class="footer-1 ml20 mr10">
    	<img src="themes/68ecshopcom_360buy/img/foote-4.png" />
        <h4>帮助中心</h4>
        <p>您的购物指南</p>
    </div>
	</div>
</div>
 <div class="cb10"></div> 
<div id="bottom">
	<div class="left"></div>
	<div class="center">
	    	<ul>
        	<li>购物指南             	<ul>
				                	<li><a href="help.php?id=9">售后流程</a></li>
				                	<li><a href="help.php?id=10">购物流程</a></li>
				                	<li><a href="help.php?id=71">在线支付</a></li>
				                </ul>
            
            </li>
        </ul>
        	<ul>
        	<li>联系我们             	<ul>
				                	<li><a href="help.php?id=25">关于我们</a></li>
				                	<li><a href="help.php?id=26">投诉与建议</a></li>
				                	<li><a href="help.php?id=47">联系方式</a></li>
				                </ul>
            
            </li>
        </ul>
        	<ul>
        	<li>售后服务            	<ul>
				                	<li><a href="help.php?id=22">售后服务保证</a></li>
				                	<li><a href="help.php?id=42">换货流程</a></li>
				                	<li><a href="help.php?id=73">退款说明</a></li>
				                </ul>
            
            </li>
        </ul>
        	<ul>
        	<li>优惠政策            	<ul>
				                	<li><a href="help.php?id=45">订单状态</a></li>
				                	<li><a href="help.php?id=69">如何送礼</a></li>
				                </ul>
            
            </li>
        </ul>
        </div>
	 <div class="center-1">
     	<div class="center-1-1">
        	<img src="themes/68ecshopcom_360buy/img/shouji.png" width="91" height="92" />
            <p>手机二维码</p>
        </div>
        <div class="center-1-1 ml20">
        <img src="themes/68ecshopcom_360buy/img/weixin.png" width="91" height="92" />
        <p>微信二维码</p>
        </div>
        </div>
        
        <div class="right">
        
        	<h2>服务热线</h2>
            <h4>400-0539-221</h4>
        </div>
</div>
<div class="cb10"></div> 
 
	<div class="site-footer">
  <div class="wrapper">
    <div class="footer-info clearfix">
      <div class="info-text">
				<div style="width:1200px; margin:0 auto; height:30px; text-align:center; line-height:30px;">友情链接：
				<a style="color:#333; margin-right:10px;" title="临沂市广通职业培训学校" target="_blank" href="http://www.lygtxx.com/index.asp">临沂市广通职业培训学校</a>丨    
				<a style="color:#333; margin-right:10px;" title="临沂市广通物业管理有限公司" target="_blank" href="http://www.lygtwy.com">临沂市广通物业管理有限公司</a>丨    
				<a style="color:#333; margin-right:10px;" title="快递查询" target="_blank" href="http://www.kuaidiwo.cn/">快递查询</a>   
				</div>
				<p style="text-align:center; margin:3px 0px 30px 0px;">
      <a href="javascript:;">&copy; 2005-2019 海众文化 版权所有，并保留所有权利。</a> <a href="javascript:;">临沂商城会展中心 </a>
      </p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
Ajax.call('api/okgoods.php', '', '', 'GET', 'JSON');
//预售
Ajax.call('pre_sale.php?act=check_order', '', '', 'GET', 'JSON');
</script> 
      
        
        
</body>
</html>