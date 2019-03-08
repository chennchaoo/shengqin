<div class="mainbanner_window">
	<ul id="slideContainer">
	<?php $_from = $this->_var['flash_img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fimg');$this->_foreach['flash_img_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flash_img_list']['total'] > 0):
    foreach ($_from AS $this->_var['fimg']):
        $this->_foreach['flash_img_list']['iteration']++;
?>
		<li><a href="<?php echo $this->_var['fimg']['img_link']; ?>"><img src="<?php echo $this->_var['fimg']['img_url']; ?>" width="960" height="400" alt="#"  /></a></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
</div>
<ul class="mainbanner_list">
<?php $_from = $this->_var['flash_img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'fimg');$this->_foreach['flash_img_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flash_img_list']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['fimg']):
        $this->_foreach['flash_img_list']['iteration']++;
?>
	<li><a href="javascript:void(0);"><?php echo $this->_var['key']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
</ul>