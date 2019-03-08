<?php if ($this->_var['helps']): ?>
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
	<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
    	<ul>
        	<li><?php echo $this->_var['help_cat']['cat_name']; ?>
            	<ul>
				<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                	<li><a href="help.php?id=<?php echo $this->_var['item']['article_id']; ?>"><?php echo $this->_var['item']['short_title']; ?></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            
            </li>
        </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
<?php endif; ?>