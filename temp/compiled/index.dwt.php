<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['qq']; ?>&site=qq&menu=yes" target="_blank" alt="点击这里联系我" title="点击这里联系我"><img src="themes/68ecshopcom_360buy/img/kefu.png" /></a>
	<a href="#" onclick="chickdisplay()"><img src="themes/68ecshopcom_360buy/img/cha.jpg" /></a>
</div>


 
    <?php echo $this->fetch('library/page_headerindex.lbi'); ?>
      
		
 
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
	<?php $_from = $this->_var['notice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'notice_0_33877100_1552025024');if (count($_from)):
    foreach ($_from AS $this->_var['notice_0_33877100_1552025024']):
?>
    	<li><a href="<?php echo $this->_var['notice_0_33877100_1552025024']['url']; ?>"><?php echo sub_str($this->_var['notice_0_33877100_1552025024']['title'],14); ?></a></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
	</div>
    <span></span>

 
 </div>          
        
           
        
        
        
        
        
		<div id="banner">
        <div class="promoWD">
			<?php echo $this->fetch('library/index_ad3.lbi'); ?>
          
  </div>
		</div>
        
            
        
        
        
<div class="cb10"></div>
<div id="main">

	<?php echo $this->fetch('library/stores_tab.lbi'); ?>
	<div class="cb10"></div>
    <div class="ccc">
	<ul  id="reixiao1" id="ceshi">
		<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>
		<?php if ($this->_foreach['index_goods']['iteration'] < 13): ?>
    	<li>
			<a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
				<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
				<h5><?php echo sub_str($this->_var['goods']['short_name'],14); ?></h5>
			</a>
		</li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    </div>
	<div class="ccc">
	<ul id="reixiao2" style="display:none;">
		<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>
        		<?php if ($this->_foreach['index_goods']['iteration'] < 13): ?>
            	<li>
        			<a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
        				<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
        				<h5><?php echo sub_str($this->_var['goods']['short_name'],14); ?></h5>
        			</a>
        		</li>
        		<?php endif; ?>
        		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
				<?php if ($this->_var['productCate']): ?>
                <ul>
					<?php $_from = $this->_var['productCate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_item');$this->_foreach['productCate'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productCate']['total'] > 0):
    foreach ($_from AS $this->_var['cat_item']):
        $this->_foreach['productCate']['iteration']++;
?>
                	<a href="<?php echo $this->_var['cat_item']['url']; ?>"><li><?php echo htmlspecialchars($this->_var['cat_item']['cat_name']); ?></li></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
				<?php endif; ?>
        </div>
        <div class="main-main-center">
			
			<?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

        </div>
        <div class="main-main-right">
			<?php if ($this->_var['life_product']): ?>
        	<ul>
				<?php $_from = $this->_var['life_product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'life');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['life']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
            	<li><a href="<?php echo $this->_var['life']['url']; ?>"><img src="<?php echo $this->_var['life']['thumb']; ?>" height="200" width="200" />
                <div class="detail">
                	<p><?php echo sub_str($this->_var['life']['name'],12); ?></p>
                   <p> <del>售价：<b class="red"><?php echo $this->_var['life']['market_price']; ?>元</b></del></p>
                   <p> 会员价：<b class="red"><?php echo $this->_var['life']['shop_price']; ?>元</b></p>
                </div>
                </a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
			<?php endif; ?>
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
				<?php if ($this->_var['jiazhengCate']): ?>
                <ul class="floor-2">
					<?php $_from = $this->_var['jiazhengCate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'jiazheng_0_33931400_1552025024');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['jiazheng_0_33931400_1552025024']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
					<a href="<?php echo $this->_var['jiazheng_0_33931400_1552025024']['url']; ?>"><li><?php echo htmlspecialchars($this->_var['jiazheng_0_33931400_1552025024']['cat_name']); ?></li></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
				<?php endif; ?>
        </div>
        <div class="main-main-center">
			
			<?php 
$k = array (
  'name' => 'ads',
  'id' => '2',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

        </div>
        <div class="main-main-right">
			<?php if ($this->_var['jiazhenggoods']): ?>
        	<ul>
				<?php $_from = $this->_var['jiazhenggoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_goods']['iteration']++;
?>
            	<li>
					<a href="<?php echo $this->_var['goods']['url']; ?>">
						<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" height="200" width="200">
						<div class="detail">
							<p>从业经验 ：<b class="red"><?php echo $this->_var['goods']['experience']; ?></b></p>
							<p> <del>服务工资：<b class="red"><?php echo $this->_var['goods']['charge_price']; ?></b></del></p>
							<p> 会员卡：<b class="red"><?php echo $this->_var['goods']['member_price']; ?></b></p>
						</div>
					</a>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
			<?php endif; ?>
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
				<?php if ($this->_var['pension']): ?>
                <ul class="floor-3">
					<?php $_from = $this->_var['pension']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pension_0_33950900_1552025024');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['pension_0_33950900_1552025024']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
					<a href="<?php echo $this->_var['pension_0_33950900_1552025024']['url']; ?>"><li><?php echo htmlspecialchars($this->_var['pension_0_33950900_1552025024']['cat_name']); ?></li></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
				<?php endif; ?>
        </div>
        <div class="main-main-center">
			
			<?php 
$k = array (
  'name' => 'ads',
  'id' => '3',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

        </div>
        <div class="main-main-right">
			<?php if ($this->_var['hot_pension']): ?>
        	<ul>
				<?php $_from = $this->_var['hot_pension']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pension_0_33960700_1552025024');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['pension_0_33960700_1552025024']):
        $this->_foreach['cat_goods']['iteration']++;
?>
            	<li>
                                        <a href="<?php echo $this->_var['pension_0_33960700_1552025024']['url']; ?>">
						<img src="<?php echo $this->_var['pension_0_33960700_1552025024']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['pension_0_33960700_1552025024']['name']); ?>" height="200" width="200">
						<div class="detail">
							<p><?php echo sub_str($this->_var['pension_0_33960700_1552025024']['name'],14); ?></p>
							<p> <del>收费区间：<b class="red"><?php if ($this->_var['pension_0_33960700_1552025024']['charge_price']): ?><?php echo $this->_var['pension_0_33960700_1552025024']['charge_price']; ?><?php else: ?>？？<?php endif; ?>元</b></del></p>
							<p> 会员卡：<b class="red"><?php if ($this->_var['pension_0_33960700_1552025024']['member_price']): ?><?php echo $this->_var['pension_0_33960700_1552025024']['member_price']; ?><?php else: ?>？？<?php endif; ?>元</b></p>
						</div>
					</a>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php endif; ?>
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
			<?php if ($this->_var['agent']): ?>
			<ul class="floor-4">
				<?php $_from = $this->_var['agent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'agent_0_33976000_1552025024');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['agent_0_33976000_1552025024']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
				<a href="<?php echo $this->_var['agent_0_33976000_1552025024']['url']; ?>"><li><?php echo htmlspecialchars($this->_var['agent_0_33976000_1552025024']['cat_name']); ?></li></a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			<?php endif; ?>
        </div>
        <div class="main-main-center">
			
			<?php 
$k = array (
  'name' => 'ads',
  'id' => '4',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

        </div>
        <div class="main-main-right">
			<?php if ($this->_var['agent_goods']): ?>
        	<ul>
                <?php $_from = $this->_var['agent_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'agents');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['agents']):
        $this->_foreach['cat_goods']['iteration']++;
?>
            	<li>
                    <a href="<?php echo $this->_var['agents']['url']; ?>">
                        <!--<img src="themes/68ecshopcom_360buy/img/11-8.png" />-->
                        <img src="<?php echo $this->_var['agents']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['agents']['name']); ?>" height="200" width="200">
                        <div class="detail">
                            <p><?php echo sub_str($this->_var['agents']['name'],14); ?></p>
                            <p> <del>价格：<b class="red"><?php if ($this->_var['agents']['shop_price']): ?><?php echo $this->_var['agents']['shop_price']; ?><?php else: ?>？？<?php endif; ?>元</b></del></p>
                            <p> 会员价：<b class="red"><?php if ($this->_var['agents']['promote_price']): ?><?php echo $this->_var['agents']['promote_price']; ?>
														<?php elseif ($this->_var['agents']['shop_price']): ?><?php echo $this->_var['agents']['shop_price']; ?>
														<?php else: ?>？？<?php endif; ?>元</b></p>
                        </div>
                    </a>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
			<?php endif; ?>
            
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
					<?php if ($_SESSION['user_id'] == ""): ?>
					<a href="user.php">
					<?php else: ?>
                    <a href="release.php?act=rental">
					<?php endif; ?>
                    <h2>出租房屋</h2>
                    <p>出租信息 及时发布</p>
                    </a>
                    </div>
                    <div class="top-left-2">
					<?php if ($_SESSION['user_id'] == ""): ?>
					<a href="user.php">
					<?php else: ?>
                    <a href="release.php?act=qiugou">
					<?php endif; ?>
                    <h2 class="mt10">买房</h2>
                    </a>
                    </div>
                </div>
                <div class="top-right">
					<?php if ($_SESSION['user_id'] == ""): ?>
					<a href="user.php">
					<?php else: ?>
                    <a href="release.php?act=wanted">
					<?php endif; ?>
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
				<?php if ($_SESSION['user_id'] == ""): ?>
				<a href="user.php">
				<?php else: ?>
				<a href="release.php?act=chushou">
				<?php endif; ?>
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
                <?php if ($this->_var['gongqiu']): ?>
					<?php $_from = $this->_var['gongqiu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'gongqiu_0_34033900_1552025024');$this->_foreach['gongqiu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gongqiu']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['gongqiu_0_34033900_1552025024']):
        $this->_foreach['gongqiu']['iteration']++;
?>
						
						<li><span>更新日期：<?php echo $this->_var['gongqiu_0_34033900_1552025024']['refresh_time']; ?> </span><a href="<?php echo $this->_var['gongqiu_0_34033900_1552025024']['url']; ?>"><b>0<?php echo $this->_var['key']; ?></b><?php echo $this->_var['gongqiu_0_34033900_1552025024']['title']; ?>   </a></li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
                
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
					<?php if ($_SESSION['user_id'] == ""): ?>
					<a href="user.php" class="input-fabu" style="padding-left:20px;display:inline-block; color:#fff;width:167px;">
					<?php else: ?>
					<a href="release.php?act=housewifery" class="input-fabu" style="padding-left:20px;display:inline-block; color:#fff;width:167px;">
					<?php endif; ?>
						免费发布信息
					</a>
                </form>
            </div>
            <div class="kuang-right myscroll">
            	<div class="cb-none-10"></div>
				<?php if ($this->_var['jiazheng']): ?>
					<ul>
					<?php $_from = $this->_var['jiazheng']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
						<li onclick="location='<?php echo $this->_var['val']['url']; ?>'" style="margin:1px 1px 1px 10px">
						<?php echo $this->_var['val']['chenghu']; ?> <?php echo $this->_var['val']['district']; ?>  <?php echo $this->_var['val']['title']; ?><br/><a style="float:right">——&nbsp;<?php echo $this->_var['val']['surname']; ?>&nbsp;<?php echo $this->_var['val']['last_current']; ?></a>
						</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				<?php endif; ?>
            
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
				<?php if ($_SESSION['user_id'] == ""): ?>
				<a href="user.php" class="input-fabu" style="padding-left:20px;display:inline-block; color:#fff;width:167px;">
				<?php else: ?>
				<a href="release.php" class="input-fabu" style="padding-left:20px;display:inline-block; color:#fff;width:167px;">
				<?php endif; ?>
					免费发布信息
				</a>
                 </form>
            </div>
            
            <div class="kuang-right myscroll">
            	<div class="cb-none-10"></div>
				<?php if ($this->_var['zuojiazheng']): ?>
					<ul>
					<?php $_from = $this->_var['zuojiazheng']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
						<li onclick="location='<?php echo $this->_var['val']['url']; ?>'" style="margin:1px 1px 1px 10px">
						<?php echo $this->_var['val']['chenghu']; ?> <?php echo $this->_var['val']['district']; ?>  <?php echo $this->_var['val']['title']; ?><br/><a style="float:right">——&nbsp;<?php echo $this->_var['val']['surname']; ?>&nbsp;<?php echo $this->_var['val']['last_current']; ?></a>
						</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				<?php endif; ?>
            
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
            <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'brand');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['brand']):
        $this->_foreach['cat_goods']['iteration']++;
?>
            <li class="b-b <?php if (( $this->_var['k'] + 1 ) % 6 != 0): ?> b-r <?php endif; ?>" >
				<a href="<?php echo $this->_var['brand']['url']; ?>">
					<img src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?>"  />
				</a>
			</li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    
    </div>
    
     
</div> 
  
  
        
</div>



       
  
 
	<style>
	.info-text p{margin:18px 0 30px 0;}
	</style>
	<?php echo $this->fetch('library/help.lbi'); ?> 
	<?php echo $this->fetch('library/page_footer.lbi'); ?> 
      
        
        
</body>
</html>
