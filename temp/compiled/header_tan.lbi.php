<div id="navOut">
	<div class="nav">
		<!--<div class="navLeft">
			<p>首页</p>
			<<div class="fenlei">
				<ul>
					<?php $_from = get_categories_tree(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat0']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat0']['iteration']++;
?>
					<li>
						 <dl class="fenleiLeft">
							<dt><?php echo $this->_var['cat']['name']; ?></dt>
							<dd>
								<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['namechild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['namechild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['namechild']['iteration']++;
?>
									<a href="<?php echo $this->_var['child']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

							</dd>
						 </dl>
					</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
			</div>

		</div>-->
		<?php echo $this->fetch('library/head_nav.lbi'); ?>
	</div>
</div>