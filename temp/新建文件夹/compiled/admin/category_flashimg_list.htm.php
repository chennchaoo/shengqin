<!-- $Id: category_flashimg_list.htm 17019 2010-01-29 10:10:34Z liuhui $ -->

<?php echo $this->fetch('pageheader.htm'); ?>

<form method="post" action="" name="listForm">
<!-- start ad position list -->
<div class="list-div" id="listDiv">


<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
    <th>轮播图片地址</th>
    <th>轮播图片链接</th>
    <th>排序</th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['flashimg_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flashimg');if (count($_from)):
    foreach ($_from AS $this->_var['flashimg']):
?>
  <tr align="center" >
    <td width="35%"><a href="<?php echo $this->_var['flashimg']['img_url']; ?>" target="_blank"><?php echo $this->_var['flashimg']['img_url']; ?></a></td>   
    <td width="35%"><?php echo $this->_var['flashimg']['href_url']; ?></td>
    <td width="10%" align="right"><?php echo $this->_var['flashimg']['sort_order']; ?></td>
    <td width="20%" align="center">
      <a href="category_flashimg.php?act=edit&id=<?php echo $this->_var['flashimg']['img_id']; ?>&cat_id=<?php echo $this->_var['flashimg']['cat_id']; ?>" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="category_flashimg.php?act=remove&id=<?php echo $this->_var['flashimg']['img_id']; ?>&cat_id=<?php echo $this->_var['flashimg']['cat_id']; ?>" onclick="return confirm('你确实要删除该图片吗？');" title="删除这张轮播图片"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>

</div>
</form>


<?php echo $this->fetch('pagefooter.htm'); ?>
