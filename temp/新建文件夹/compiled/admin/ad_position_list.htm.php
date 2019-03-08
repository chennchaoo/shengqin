<!-- $Id: ad_position_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<div class="form-div">
  <form action="javascript:search_ad_position()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <select name="select" value="按广告位名称">
	<option value="按广告位名称">按广告位名称</option>
	<option value="按广告位ID">按广告位ID</option>
	</select>
    关键字<input type="text" name="keyword" size="15" />
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>

<script language="JavaScript">
    function search_ad_position()
    {
		listTable.filter['select'] = document.forms['searchForm'].elements['select'].value;
        listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
        listTable.filter['page'] = 1;
        
        listTable.loadList();
    }

</script>

<form method="post" action="" name="listForm">
<!-- start ad position list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellpadding="3" cellspacing="1">
  <tr>
    <th><?php echo $this->_var['lang']['position_id']; ?></th>
    <th><?php echo $this->_var['lang']['position_name']; ?></th>
    <th><?php echo $this->_var['lang']['posit_width']; ?></th>
    <th><?php echo $this->_var['lang']['posit_height']; ?></th>
    <th><?php echo $this->_var['lang']['position_desc']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['position_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
  <tr>
    <td align="center" class="first-cell"><?php echo $this->_var['list']['position_id']; ?></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, 'edit_position_name', <?php echo $this->_var['list']['position_id']; ?>)"><?php echo htmlspecialchars($this->_var['list']['position_name']); ?></span>
    </td>
    <td align="center"><span onclick="javascript:listTable.edit(this, 'edit_ad_width', <?php echo $this->_var['list']['position_id']; ?>)"><?php echo $this->_var['list']['ad_width']; ?></span></td>
    <td align="center"><span onclick="javascript:listTable.edit(this, 'edit_ad_height', <?php echo $this->_var['list']['position_id']; ?>)"><?php echo $this->_var['list']['ad_height']; ?></span></td>
    <td align="center"><span><?php echo htmlspecialchars($this->_var['list']['position_desc']); ?></span></td>
    <td align="center">
      <a href="ads.php?act=list&pid=<?php echo $this->_var['list']['position_id']; ?>" title="<?php echo $this->_var['lang']['view']; ?><?php echo $this->_var['lang']['ad_content']; ?>">
      <img src="images/icon_view.gif" border="0" height="16" width="16" /></a>
      <a href="ad_position.php?act=edit&id=<?php echo $this->_var['list']['position_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>">
      <img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['position_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="6"><?php echo $this->_var['lang']['no_position']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
    <td align="right" nowrap="true" colspan="6"><?php echo $this->fetch('page.htm'); ?></td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end ad_position list -->
</form>

<script type="text/javascript" language="JavaScript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  onload = function()
  {
    // &#64138;&#53036;&#10870;鵥
    startCheckOrder();
  }
  
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
