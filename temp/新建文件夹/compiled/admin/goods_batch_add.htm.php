<!-- $Id: goods_batch_add.htm 16544 2009-08-13 07:55:57Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<link href="styles/zTree/zTreeStyle.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.6.2.min.js,jquery.ztree.all-3.5.min.js,category_selecter.js')); ?>
<div class="main-div">
<form action="goods_batch.php?act=upload" method="post" enctype="multipart/form-data" name="theForm" onsubmit="return formValidate()">
<table cellspacing="1" cellpadding="3" width="100%">
<tr>
    <td class="label"><?php echo $this->_var['lang']['export_format']; ?></td>
    <td><select name="data_cat" id="data_cat">
      <option value="0"><?php echo $this->_var['lang']['select_please']; ?></option>
      <?php echo $this->html_options(array('options'=>$this->_var['data_format'])); ?>
    </select></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['goods_cat']; ?></td>
    <td>
    <input type="text" id="cat_name" name="cat_name" nowvalue="<?php echo $this->_var['goods_cat_name']; ?>" value="<?php echo $this->_var['goods_cat_name']; ?>" ><!--代码增加--商品分类--68ecshop-->
	<input type="hidden" id="cat_id" name="cat_id" value="<?php echo $this->_var['goods_cat_id']; ?>"><!--代码增加--商品分类--68ecshop-->
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['file_charset']; ?></td>
    <td><select name="charset" id="charset">
      <?php echo $this->html_options(array('options'=>$this->_var['lang_list'])); ?>
    </select></td>
  </tr>
  <tr>
    <td class="label">
      <a href="javascript:showNotice('noticeFile');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a>
      <?php echo $this->_var['lang']['csv_file']; ?></td>
    <td><input name="file" type="file" size="40">
    <br />
      <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeFile"><?php echo $this->_var['lang']['notice_file']; ?></span></td>
  </tr>
  <?php $_from = $this->_var['download_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('charset', 'download');if (count($_from)):
    foreach ($_from AS $this->_var['charset'] => $this->_var['download']):
?>
  <tr>
    <td>&nbsp;</td>
    <td><a href="goods_batch.php?act=download&charset=<?php echo $this->_var['charset']; ?>"><?php echo $this->_var['download']; ?></a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr align="center">
    <td colspan="2"><input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" /></td>
  </tr>
</table>
<script type="text/javascript">
	$().ready(function(){
		// $("#cat_name")为获取分类名称的jQuery对象，可根据实际情况修改
		// $("#cat_id")为获取分类ID的jQuery对象，可根据实际情况修改
		// "<?php echo $this->_var['goods_cat_id']; ?>"为被选中的商品分类编号，无则设置为null或者不写此参数或者为空字符串
		$.ajaxCategorySelecter($("#cat_name"), $("#cat_id"), "<?php echo $this->_var['goods_cat_id']; ?>");
	});
</script>


</form>
<table width="100%">
  <tr>
    <td>&nbsp;</td>
    <td width="80%"><?php echo $this->_var['lang']['use_help']; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
    var elements;
    onload = function()
    {
        // 文档元素对象
        elements = document.forms['theForm'].elements;

        // 开始检查订单
        startCheckOrder();
    }

    /**
     * 检查是否底级分类
     */
    function checkIsLeaf(selObj)
    {
        if (selObj.options[selObj.options.selectedIndex].className != 'leafCat')
        {
            alert(goods_cat_not_leaf);
            selObj.options.selectedIndex = 0;
        }
    }

    /**
     * 检查输入是否完整
     */
    function formValidate()
    {
    	
        if ($("#cat_id").val().length <= 0)
        {
        	alert(please_select_cat);
        	$("#cat_name").focus();
            return false;
        }
        if ($("[name='file']").val() == '')
    	{
        	alert(please_upload_file);
        	return false;
    	}
       
        return true;
    }
	
</script>





<?php echo $this->fetch('pagefooter.htm'); ?>