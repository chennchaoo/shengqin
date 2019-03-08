

<div class="site-footer">
  <div class="wrapper">
    <div class="footer-info clearfix">
      <div class="info-text">
		<?php if ($this->_var['txt_links']): ?>
		<div style="width:1200px; margin:0 auto; height:30px; text-align:center; line-height:30px;">友情链接：
		<?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['name']['iteration']++;
?>
		<a style="color:#333; margin-right:10px;" title="<?php echo $this->_var['link']['name']; ?>" target="_blank" href="<?php echo $this->_var['link']['url']; ?>"><?php echo $this->_var['link']['name']; ?></a><?php if (! ($this->_foreach['name']['iteration'] == $this->_foreach['name']['total'])): ?>丨 <?php endif; ?>   
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endif; ?>
		<p style="text-align:center; margin:3px 0px 30px 0px;">
      <a href="javascript:;"><?php echo $this->_var['copyright']; ?></a> <a href="javascript:;"><?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?></a>
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