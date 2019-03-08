<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://shengqin.test.com/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/<?php echo $this->_var['cat_style']; ?>" />
<script>var jdpts = new Object(); jdpts._st = new Date().getTime();</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<title>海众文化首页</title>
<script src="themes/68ecshopcom_360buy/js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.5.min.js" charset="utf-8"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/promo_v2.js" charset="utf-8"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<style>
.b-a-n{
	width:1200px; 
	height:380px; 
	margin:0 auto; 
	
	}
.b-a-n .b-left{
	width:960px;
	height:380px;
	float:left;
	
	} 
.b-a-n .b-right{
	width:230px;
	height:380px;
	float:right;
	
	}
b-a-n .b-right .b-right-1{
	width:230px;
	height:185px;
	float:right;
	
	
	
	}
.c-b-1{
	width:100%;
	height:10px;
	clear:both;
	}
b-a-n .b-right .b-right-2{
	width:230px;
	height:185px;
	float:right;
	
	
	}
b-a-n .b-right img{
	width:230px;
	height:185px;
	}
b-a-n .b-right .b-right-2 img:hover{
	opacity:0.6;
	}
/* mainbanner */
.mainbanner{height:380px;overflow:hidden; position:relative;}
.mainbanner_window{width:960px;height:380px;overflow:hidden;position:absolute;}
.mainbanner_window ul{width:999999px;height:38px;position:relative;}
.mainbanner_window li{background:rgb(204, 204, 204);width:960px;height:380px;text-align:center;font-size:0px;float:left;display:inline;}
.mainbanner_list{left:450px;top:340px;width:500px;height:30px;margin-left:-75px;position:absolute;}
.mainbanner_list li{width:30px;height:30px;overflow:hidden;float:left;display:inline;}
.mainbanner_list a{background:url(themes/68ecshopcom_360buy/images/50c15ece07fd0f3407000083.png) no-repeat;width:25px;height:25px;line-height:25px;overflow:hidden;text-align:center;color:rgb(255, 255, 255);font-size:12px;font-weight:700;float:left;display:inline-block;}
.mainbanner_list li.active a{background-position:0 -30px;text-decoration:none;}
.mainbanner_list li a:hover{background-position:0 -30px;text-decoration:none;}

</style>
</head>
<body>
<div role="navigation" id="site-nav"> 
  <script type="text/javascript" src="themes/68ecshopcom_360buy/js/base-2011.js"></script> 
  <?php echo $this->fetch('library/page_header.lbi'); ?>
 
  <div class="blank"></div>
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="w main">
  <div class="b-a-n">
  	<div class="b-left">
    
	<script type="text/javascript" src="themes/68ecshopcom_360buy/js/index.js"></script>
    
    <div class="mainbanner">
	<?php echo $this->fetch('library/category_ad.lbi'); ?>
	</div>
    
    
    </div>
    <div class="b-right">
	<?php if ($this->_var['parent'] == 3): ?>
		<?php 
$k = array (
  'name' => 'ads',
  'id' => '256',
  'num' => '2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	<?php elseif ($this->_var['parent'] == 2): ?>
		<?php 
$k = array (
  'name' => 'ads',
  'id' => '258',
  'num' => '2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	<?php elseif ($this->_var['parent'] == 1): ?>
		<?php 
$k = array (
  'name' => 'ads',
  'id' => '257',
  'num' => '2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	<?php endif; ?>
    </div>
  
  </div>
  <div style="height:10px;"></div>
  <div class="c-b-1"></div>
      
       
       
      <script type="text/javascript">
	
	var begin_hidden=0;
	function init_position_left()
	{
	var kuan1=document.getElementById('xxxccczzz').clientWidth;
	var kuan2=document.getElementById('attr_group_more').clientWidth;
	var kuan =(kuan1-kuan2)/2;
	document.getElementById('attr_group_more').style.left=kuan+"px";
	}
	function getElementsByName(tagName, eName)
	{  
	var tags = document.getElementsByTagName(tagName);  
	var returns = new Array();  
      
	if (tags != null && tags.length > 0) {  
        for (var i = 0; i < tags.length; i++) {  
            if (tags[i].getAttribute("name") == eName) {  
                returns[returns.length] = tags[i];  
            }  
        }  
	}  
	return returns;  
	}
	function Show_More_Attrgroup()
	{
		var attr_list_dl = getElementsByName('dl','attr_group_dl');
		var attr_group_more_text = document.getElementById('attr_group_more_text');
		if(begin_hidden==2)
		{
			for(var i=0;i<attr_list_dl.length;i++)
			{
				attr_list_dl[i].style.display= i >= begin_hidden ? 'none' : 'block';
			}
			attr_group_more_text.innerHTML="更多选项（" + attr_group_more_txt + "）";
			init_position_left();
			begin_hidden=0;
		}
		else
		{
			for(var i=0;i<attr_list_dl.length;i++)
			{
				attr_list_dl[i].style.display='block';				
			}
			attr_group_more_text.innerHTML="收起";
			init_position_left();
			begin_hidden=2;
		}
	}
	// 是否显示“更多”__初始化
	function init_more(boxid, moreid, height)
	{
	     var obj_brand=document.getElementById(boxid);
	     var more_brand = document.getElementById(moreid);
	     if (obj_brand.clientHeight > height)
	     {
		obj_brand.style.height= height+ "px";
		obj_brand.style.overflow="hidden";
		more_brand.innerHTML='<a href="javascript:void(0);"  onclick="slideDiv(this, \''+boxid+'\', \''+height+'\');" class="more_68ecshop_1" >更多</a>';
	     }
	 }
	 function slideDiv(thisobj, divID,Height)
	 {  
	     var obj=document.getElementById(divID).style;  
	     if(obj.height=="")
	     {  
               obj.height= Height+ "px";  
               obj.overflow="hidden";
	       thisobj.innerHTML="更多";
	       thisobj.className="more_68ecshop_1";
	        // 如果是品牌，额外处理
		if(divID=='brand_abox')
		{
		   //obj.width="456px";
		   getBrand_By_Zimu(document.getElementById('brand_zimu_all'),'');
	           document.getElementById('brand_sobox').style.display = "none";
		   document.getElementById('brand_zimu').style.display = "none";
		   document.getElementById('brand_abox_father').className="";
		 }
            }
	    else
	    {  
               obj.height="";  
               obj.overflow="";  
	       thisobj.innerHTML="收起";
	       thisobj.className="more_68ecshop_2";
	        // 如果是品牌，额外处理
		if(divID=='brand_abox')
		{
		   //obj.width="456px";
	           document.getElementById('brand_sobox').style.display = "block";
		   document.getElementById('brand_zimu').style.display = "block";
		   //getBrand_By_Zimu(document.getElementById('brand_zimu_all'),'');
		   document.getElementById('brand_abox_father').className="brand_more_ecshop68";
		 }
	     }  
	  
        }
	function getBrand_By_Name(val)
	{
	    val =val.toLocaleLowerCase();
	    var brand_list = document.getElementById('brand_abox').getElementsByTagName('li');    
	    for(var i=0;i<brand_list.length;i++)
	    {
		//document.getElementById('brand_abox').style.width="auto";
		var name_attr_value= brand_list[i].getAttribute("name").toLocaleLowerCase();
		if(brand_list[i].title.indexOf(val)==0 || name_attr_value.indexOf(val)==0 || val=='')
		{
			brand_list[i].style.display='block';
		}
		else
		{
			brand_list[i].style.display='none';
		}
	    }
	}
	//点击字母切换品牌
	function getBrand_By_Zimu(obj, zimu)
	{
		document.getElementById('brand_sobox_input').value="可搜索拼音、汉字查找品牌";
		obj.focus();
		var brand_zimu=document.getElementById('brand_zimu');
		var zimu_span_list = brand_zimu.getElementsByTagName('span');
		for(var i=0;i<zimu_span_list.length;i++)
		{
			zimu_span_list[i].className='';
		}
		var thisspan=obj.parentNode;
		thisspan.className='span';
		var brand_list = document.getElementById('brand_abox').getElementsByTagName('li');			
		for(var i=0;i<brand_list.length;i++)
		{	
			//document.getElementById('brand_abox').style.width="auto";
			if(brand_list[i].getAttribute('rel') == zimu || zimu=='')
			{
				brand_list[i].style.display='block';
			}
			else
			{
				brand_list[i].style.display='none';
			}
		}
	}
	var duoxuan_a_valid=new Array();
	// 点击多选， 显示多选区
	function showDuoXuan(dx_divid, a_valid_id)
	{	     
	     var dx_dl_68ecshop = document.getElementById('attr_list_ul').getElementsByTagName('dl');
	     for(var i=0;i<dx_dl_68ecshop.length;i++)
	     {
		dx_dl_68ecshop[i].className='';
	     }
	     var dxDiv=document.getElementById(dx_divid);
	     dxDiv.className ="duoxuan";
	     duoxuan_a_valid[a_valid_id]=1;
	     
	}
	function hiddenDuoXuan(dx_divid, a_valid_id)
	{
		var dxDiv=document.getElementById(dx_divid);
		dxDiv.className ="";
		duoxuan_a_valid[a_valid_id]=0;
		if(a_valid_id=='brand')
		{
			var ul_obj_68ecshop = document.getElementById('brand_abox');
			var li_list_68ecshop = ul_obj_68ecshop.getElementsByTagName('li');
			if(li_list_68ecshop)
			{
				for(var j=0;j<li_list_68ecshop.length;j++)
				{
					li_list_68ecshop[j].className="";
				}
			}
		}
		else
		{
			var ul_obj_68ecshop = document.getElementById('attr_abox_'+a_valid_id);
		}
		var input_list = ul_obj_68ecshop.getElementsByTagName('input');
		var span_list = ul_obj_68ecshop.getElementsByTagName('span');
		for(var j=0;j<input_list.length;j++)
		{
			input_list[j].checked=false;
		}
		if(span_list.length)
		{
			for(var j=0;j<span_list.length;j++)
			{
				span_list[j].className="color_ecshop68";
			}
		}
	}
	function duoxuan_Onclick(a_valid_id, idid, thisobj)
	{			
		if (duoxuan_a_valid[a_valid_id])
		{
			if (thisobj)
			{	
				var fatherObj = thisobj.parentNode;
				if (a_valid_id =="brand")
				{
					fatherObj.className = fatherObj.className == "brand_seled" ? "" : "brand_seled";
				}
				else
				{
					fatherObj.className =   fatherObj.className == "color_ecshop68" ? "color_ecshop68_seled" : "color_ecshop68";
					
				}
			}
			document.getElementById('chk_'+a_valid_id+'_'+idid).checked= !document.getElementById('chk_'+a_valid_id+'_'+idid).checked;
			return false;
		}
	}
	
	function duoxuan_Submit(dxid, indexid, attr_count, category, brand_id, price_min, price_max,  filter_attr,filter)
	{		
		var theForm =document.forms['theForm'];
		var chklist=theForm.elements['checkbox_'+ dxid+'[]'];
		var newpara="";
		var mm=0;
		for(var k=0;k<chklist.length;k++)
		{
			if(chklist[k].checked)
			{
				//alert(chklist[k].value);
				newpara += mm>0 ? "_" : "";
				newpara += chklist[k].value;
				mm++;
			}
		}
		if (mm==0) 
		{
			return false;
		}
		if(dxid=='brand')
		{
			brand_id = newpara;
		}
		else
		{
			var attr_array = new Array();
			filter_attr = filter_attr.replace(/\./g,",");
			attr_array=filter_attr.split(',');

			for(var h=0;h<attr_count;h++)
			{
				if(indexid == h){
					attr_array[indexid] = newpara;
				}else{
					if(attr_array[h]){
					}else{
					 attr_array[h] = 0;
					}
				}
			}
			filter_attr = attr_array.toString();
		}
		filter_attr = filter_attr.replace(/,/g,".");
		var url="other.php";
		//var url="category.php";
		url += "?id="+ category;
		url += brand_id ? "&brand="+brand_id : "";
		url += price_min ? "&price_min="+price_min : "&price_min=0";
		url += price_max ? "&price_max="+price_max : "&price_max=0";
		url += filter_attr ? "&filter_attr="+filter_attr : "&filter_attr=0";
		url += filter ? "&filter="+filter : "&filter=0";
		//location.href=url;
		return_url(url,dxid);
	}

	function return_url(url,dxid){
	  $.ajax({    
		    url:url,   
		    type:'get',
		    cache:false,
		    dataType:'text',
		    success:function(data){
		        var obj = document.getElementById('button_'+dxid);
		        obj.href = data;
			obj.click();
			//location.href=data;
		     }
		});
	}
	
	</script> 
      
      
      <div style="height:0px; line-height:0px; clear:both;"></div>
      <div class="right-extra"> 
      	<?php echo $this->fetch('library/goods_list.lbi'); ?> 
	  	<?php echo $this->fetch('library/pages.lbi'); ?> 
      </div>
      <div class="left"> 
	  	<?php echo $this->fetch('library/category_tree2.lbi'); ?> 
        <?php if ($this->_var['new_goods']): ?>
      	<div class="m limitbuy " id="limitbuy537">
        <div class="mt">
          <h2>新品推荐</h2>
        </div>
        <div class="mc">
          <div class="clock" id="clock537">
            <ul>
              <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
              <?php if ($this->_foreach['hot_goods']['iteration'] < 6): ?>
              <li class="fore<?php echo $this->_foreach['hot_goods']['iteration']; ?>" >
                <div class="p-img"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><img width="100" height="100" alt="" data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>" /></a> 
                  <?php if ($this->_var['goods']['is_new']): ?>
                  <div class="pi7"></div>
                  <?php elseif ($this->_var['goods']['is_hot']): ?>
                  <div class="pi2"></div>
                  <?php endif; ?> 
                </div>
                <div class="rate"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
                <div class="p-price">
					<strong><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong>
					<?php if ($this->_var['goods']['is_product_type'] == 1): ?>
					<del><?php echo $this->_var['goods']['market_price']; ?></del>
					<?php endif; ?>
				</div>
              </li>
              <?php if (! ($this->_foreach['hot_goods']['iteration'] == $this->_foreach['hot_goods']['total'])): ?>
              <div class="blank5"></div>
              <?php endif; ?> 
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
            </ul>
          </div>
          <div id="limit537"></div>
        </div>
      </div>
      	<?php endif; ?> 
      
      <div id="ad_left" reco_id="6" class="m m0 hide"></div>
       
      <?php if ($this->_var['hot_goods']): ?>
      <div class="m limitbuy " id="limitbuy537">
        <div class="mt">
          <h2>热卖商品</h2>
        </div>
        <div class="mc">
          <div class="clock" id="clock537">
            <ul>
              <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
              <li class="fore<?php echo $this->_foreach['hot_goods']['iteration']; ?>" >
                <div class="p-img"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><img width="100" height="100" alt="" data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>" /></a> 
                  <?php if ($this->_var['goods']['is_hot']): ?>
                  <div class="pi7"></div>
                  <?php elseif ($this->_var['goods']['is_hot']): ?>
                  <div class="pi2"></div>
                  <?php endif; ?> 
                </div>
                <div class="rate"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
                <div class="p-price">
					<strong><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong>
					
					<?php if ($this->_var['goods']['is_product_type'] == 1): ?>
					<del><?php echo $this->_var['goods']['market_price']; ?></del>
					<?php endif; ?>
					
				</div>
              </li>
              <?php if (! ($this->_foreach['hot_goods']['iteration'] == $this->_foreach['hot_goods']['total'])): ?>
              <div class="blank5"></div>
              <?php endif; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
            </ul>
          </div>
          <div id="limit537"></div>
        </div>
      </div>
      <?php endif; ?> <?php echo $this->fetch('library/top10.lbi'); ?> 
      
      <div id="alsobuy" class="hide m m0"></div>
       
       
    </div>
    
  </div>
  <?php echo $this->fetch('library/history.lbi'); ?>
  <div class="blank"></div>
  <style>
	.info-text p{margin:18px 0 30px 0;}
	</style>
	<?php echo $this->fetch('library/help.lbi'); ?> 
	<?php echo $this->fetch('library/page_footer.lbi'); ?> 
  </div>

<script>//收集skuId
var skuIds = [];
$('ul.list-h li[sku]').each(function(i){
    skuIds.push($(this).attr('sku'));
})

/* spu合并 begin */
var imgSize = 'n2';
if ( $('#plist').hasClass('plist-160') ) {
    imgSize = 'n2';
}
if ( $('#plist').hasClass('plist-220') ) {
    if ( $('#plist').hasClass('plist-160') ) {
        imgSize = 'n2';
    } else {
        imgSize = 'n7';
    }
}
if ( $('#plist').hasClass('plist-n7') ) {
    imgSize = 'n7';
}
if ( $('#plist').hasClass('plist-n8') ) {
    imgSize = 'n8';
}


$('.p-scroll').each(function() {
    var scroll = $(this).find('.p-scroll-wrap'),
        btnPrev = $(this).find('.p-scroll-prev'),
        btnNext = $(this).find('.p-scroll-next'),
        len = $(this).find('li').length;
    if ( len > 5 ) {
        btnPrev.css('display', 'inline');
        btnNext.css('display', 'inline');
        scroll.imgScroll({
            visible: 5,
            showControl: false,
            next: btnNext,
            prev: btnPrev
        });
    }
    var colors = scroll.find('img');
    colors.each(function() {
        $(this).mouseover(function() {
            var index = $(this).parent('li').parent('li').attr('index');
            var src = $(this).attr("src"),
                skuid = $(this).attr('data-skuid');
            scroll.find('a').removeClass('curr');
            $(this).parent('a').addClass('curr');
            var targetImg = $(this).parents('li').find('.p-img img').eq(0),
                targetImgLink = $(this).parents('li').find('.p-img a').eq(0),
                targetNameLink = $(this).parents('li').find('.p-name a').eq(0),
                targetFollowLink = $(this).parents('li').find('.product-follow a').eq(0);
            targetImg.attr( 'src', src.replace('\/n5\/', '\/'+imgSize+'\/') );
            targetImgLink.attr( 'href', targetImgLink.attr('href').replace(/\/\d{6,}/, '/'+skuid) );
            targetNameLink.attr( 'href', targetNameLink.attr('href').replace(/\/\d{6,}/, '/'+skuid) );
            targetFollowLink.attr( 'id', targetFollowLink.attr('id').replace(/coll\d{6,}/, 'coll'+skuid) );

        });
    });
});
$('#plist.plist-n7 .list-h>li').hover(function() {
    $(this).addClass('hover').find('.product-follow,.shop-name').show();
    $(this).find('.item-wrap').addClass('item-hover');
}, function() {
    $(this).removeClass('hover').find('.item-wrap').removeClass('item-hover');
    $(this).find('.product-follow,.shop-name').hide();
});


/* spu合并 end */
</script> 
<script type="text/javascript">
$(document).ready(function(){
var headHeight=580;  //这个高度其实有更好的办法的。使用者根据自己的需要可以手工调整。
 
var nav=$("#filter");        //要悬浮的容器的id
$(window).scroll(function(){
 
if($(this).scrollTop()>headHeight){
nav.addClass("cat-nav-fixed");   //悬浮的样式
}
else{
nav.removeClass("cat-nav-fixed");
}
})
})
</script> 
 
<script type="text/javascript">
$("img").lazyload({
    effect       : "fadeIn",
	 skip_invisible : true,
	 failure_limit : 20
});
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
