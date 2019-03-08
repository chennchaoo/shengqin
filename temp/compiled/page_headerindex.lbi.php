<div id="top" style="height:140px">
    	<div class="top-line">
        	
            <div class="top-line-main">
            	<div class="left">
            	</div>
       			<div class="right">
					<?php
					if ($_SESSION['user_id'] > 0)
					{
						$GLOBALS['smarty']->assign('user_info', get_user_info());
					}
					?>
                	<p class="tel">全国统一服务热线：0539-8888888</p>
					<?php if ($this->_var['user_info']): ?>
                    <p class="orange"><a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a></p>
                    <p>丨</p><p><a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a> </p>
					<?php else: ?>
					<p class="orange"><a class="orange" href="user.php">登陆</a></p>
                    <p>丨</p><p><a href="register.php">注册</a></p>
					<?php endif; ?>

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
			<input aria-haspopup="true" role="combobox" class="s-combobox-input input" name="keywords" id="keyword" tabindex="9" accesskey="s" onkeyup="STip(this.value, event);" autocomplete="off"  value="<?php if ($this->_var['search_keywords']): ?><?php echo htmlspecialchars($this->_var['search_keywords']); ?><?php else: ?>请输入关键词<?php endif; ?>" onFocus="if(this.value=='请输入关键词'){this.value='';}else{this.value=this.value;}" onBlur="if(this.value=='')this.value='请输入关键词'" type="text">
			<input type="submit" value="搜索" class="button input-sousuo"  style="cursor:pointer">
			<p class="p-center">
			热门搜索：
			<?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['name']['iteration']++;
?>
			<a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" title="<?php echo $this->_var['val']; ?>">&nbsp;<?php echo $this->_var['val']; ?></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</p>
        </div>
        </form>

    </div>
     
    </div>

<script type="text/javascript">function _show_(h,b){if(!h){return;}if(b&&b.source&&b.target){var d=(typeof b.source=="string")?M.$("#"+b.source):b.source;var e=(typeof b.target=="string")?M.$("#"+b.target):b.target;if(d&&e&&!e.isDone){e.innerHTML=d.value;d.parentNode.removeChild(d);if(typeof b.callback=="function"){b.callback();}e.isDone=true;}}M.addClass(h,"hover");if(b&&b.isLazyLoad&&h.isDone){var g=h.find("img");for(var a=0,c=g.length;a<c;a++){var f=g[a].getAttribute("data-src_index_menu");if(f){g[a].setAttribute("src",f);g[a].removeAttribute("data-src_index_menu");}}h.isDone=true;}}function _hide_(a){if(!a){return;}if(a.className.indexOf("hover")>-1){M.removeClass(a,"hover");}}</script>

<?php echo $this->fetch('library/header_tan.lbi'); ?>

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