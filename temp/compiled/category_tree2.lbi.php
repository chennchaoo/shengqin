<div class="m" id="sortlist" >
  <div class="mc" id="cate"> 
    <?php $_from = $this->_var['categories1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
    <div class='item  <?php if ($this->_var['current_cat_pr2_id'] == $this->_var['cat']['id']): ?>current<?php endif; ?>' >
      <h3 onclick="tab(<?php echo ($this->_foreach['cat']['iteration'] - 1); ?>)" <?php if (($this->_foreach['cat']['iteration'] == $this->_foreach['cat']['total'])): ?>style="border:none"<?php endif; ?>><b></b><?php echo htmlspecialchars($this->_var['cat']['name']); ?></h3>
      <ul style=" <?php if ($this->_var['current_cat_pr2_id'] == $this->_var['cat']['id']): ?>display:block;<?php else: ?>display:none;<?php endif; ?>">
        <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
        <li><a href="<?php echo $this->_var['child']['url']; ?>"  <?php if ($this->_var['cat_id'] == $this->_var['child']['id']): ?>class="curr"<?php endif; ?>><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
      </ul>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
</div>
 
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h3")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("div")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).className = "item"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).className = "item current"
		}
}
</script>