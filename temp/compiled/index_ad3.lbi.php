<div id="main_promo">
	<div id="slides">
		<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_37845200_1552025024');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_37845200_1552025024']):
        $this->_foreach['myflash']['iteration']++;
?>
			<div class="slide"><a href="<?php echo $this->_var['flash_0_37845200_1552025024']['url']; ?>" target="_blank" title="<?php echo $this->_var['flash_0_37845200_1552025024']['title']; ?>"><img src="<?php echo $this->_var['flash_0_37845200_1552025024']['src']; ?>"  alt="<?php echo $this->_var['flash_0_37845200_1552025024']['title']; ?>" /></a></div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<div id="dots">
	<ul>
	<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_37854200_1552025024');if (count($_from)):
    foreach ($_from AS $this->_var['flash_0_37854200_1552025024']):
?>
	  <li class="menuItem"><a href="javascript:;"></a></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
</div>