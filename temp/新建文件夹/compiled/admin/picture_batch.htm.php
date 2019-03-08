<!-- $Id: picture_batch.htm 15409 2008-12-09 02:36:22Z sunxiaodong $ -->
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js')); ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<link href="styles/zTree/zTreeStyle.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.6.2.min.js,jquery.ztree.all-3.5.min.js,category_selecter.js')); ?>
<div class="main-div">
<form action="picture_batch.php" method="post" name="theForm" onsubmit="return start()">
  <table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td><?php echo $this->_var['lang']['notes']; ?></td>
  </tr>
  <tr>
    <td >
    		<!--<select name="cat_id" onchange="goods_list(this);"><option value="0"><?php echo $this->_var['lang']['all_category']; ?></caption><?php echo $this->_var['cat_list']; ?></select>-->
           <input type="text" id="cat_name" name="cat_name" nowvalue="<?php echo $this->_var['goods_cat_name']; ?>" value="<?php echo $this->_var['goods_cat_name']; ?>" ><!--代码增加--商品分类--68ecshop-->
			<input type="hidden" id="cat_id" name="cat_id" value="<?php echo $this->_var['goods_cat_id']; ?>"><!--代码增加--商品分类--68ecshop--> 
          <select name="brand_id" onchange="goods_list(this);"><option value="0"><?php echo $this->_var['lang']['all_brand']; ?></caption><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
          <span id="list"><select name="goods_id"><option value="0"><?php echo $this->_var['lang']['all_goods']; ?></option></select></span>
          <input  type="button" value=" + " onclick="add_search_goods();" />
    </td>
  </tr>
   <tr>
    <td id="goods_list">

    </td>
  </tr>
  <tr>
    <td>
        <label for="do_icon"><input type="checkbox" name="do_icon" value="1" id="do_icon" checked="true" /><?php echo $this->_var['lang']['do_icon']; ?></label>
        <label for="do_album"><input type="checkbox" name="do_album" value="1" id="do_album" checked="true" /><?php echo $this->_var['lang']['do_album']; ?></label>
    </td>
  </tr>
  <tr>
    <td><label for="process_thumb"><input type="checkbox" name="process_thumb" value="1" id="process_thumb" checked="true" /><?php echo $this->_var['lang']['thumb']; ?></label></td>
  </tr>
  <tr>
    <td><label for="process_watermark"><input type="checkbox" name="process_watermark" value="1" id="process_watermark" checked="true" /><?php echo $this->_var['lang']['watermark']; ?></label></td>
  </tr>
  <tr>
    <td>
        <label for="yes_change"><input type="radio" name="change_link" value="1" id="yes_change" /><?php echo $this->_var['lang']['yes_change']; ?></label>
        <label for="no_change"><input type="radio" name="change_link" value="0" checked="true" id="no_change" /><?php echo $this->_var['lang']['no_change']; ?></label>
    </td>
  </tr>
  <tr>
    <td>
        <label for="silent"><input type="radio" name="silent" value="1" id="silent" checked="checked" /><?php echo $this->_var['lang']['silent']; ?></label>
        <label for="no_silent"><input type="radio" name="silent" value="0"  id="no_silent" /><?php echo $this->_var['lang']['no_silent']; ?></label>
    </td>
  </tr>
  <tr>
    <td align="center">
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
    </td>
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
</div>

<div class="list-div" id="listDiv">
  <table cellspacing='1' cellpadding='3' id='listTable'>
    <tr>
      <th><?php echo $this->_var['lang']['page']; ?></th>
      <th><?php echo $this->_var['lang']['total']; ?></th>
      <th><?php echo $this->_var['lang']['time']; ?></th>
    </tr>
  </table>
</div>

<div style="display:none;border: 1px solid rgb(204, 0, 0);margin-top:10px; padding: 4px; background-color: rgb(255, 255, 206); color: rgb(206, 0, 0);" id="errorMsg" ></div>

<script type="Text/Javascript" language="JavaScript">
<!--

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

/**
* 取得商品数据并生成option
*/
function goods_list(obj)
{
    var brand_id = obj.form.elements['brand_id'].value;
    var cat_id = obj.form.elements['cat_id'].value;

    Ajax.call('picture_batch.php?is_ajax=1&get_goods=1', 'brand_id=' + brand_id + '&cat_id=' + cat_id, make_goods_option, 'GET', 'JSON');
}

function make_goods_option(result)
{
    var len = result.length;
    var opt = '<select name="goods_id"><option value="0"><?php echo $this->_var['lang']['all_goods']; ?></option>';

    for (var i = 0; i < len; ++i)
    {
       opt += '<option value="' + result[i].goods_id + '">' +  result[i].goods_name + '</option>';
    }
    opt += '</select>';
    document.getElementById('list').innerHTML = opt;
}

function add_search_goods(obj)
{
    var goods_id = document.forms['theForm'].elements['goods_id'].value;
    var goods_name = '';
    var len = document.forms['theForm'].elements['goods_id'].options.length;
    for (var i = 0; i < len; ++i)
    {
        if (document.forms['theForm'].elements['goods_id'].options[i].selected)
        {
            goods_name = document.forms['theForm'].elements['goods_id'].options[i].innerHTML;
            break;
        }
    }
    if (goods_id == '0' || document.getElementById('goods_' + goods_id))
    {
        return ;
    }
    var goods_div = document.createElement("div");
    goods_div.id = 'goods_' + goods_id;
    goods_div.innerHTML = '<input type="hidden" name="multi_goods_id[]" value="' + goods_id + '">' + goods_name + '&nbsp;&nbsp;<img style="cursor: pointer;" onclick="del_search_goods(\'' + 'goods_' + goods_id + '\');" src="images/no.gif"/>';
    document.getElementById('goods_list').appendChild(goods_div);
}
function del_search_goods(gid)
{
    var boldElm = document.getElementById(gid);
    if (boldElm)
    {
        var removed =  document.getElementById(gid).parentNode.removeChild(boldElm);
    }

}
var first_act = 'icon';
var restart = 1;
/**
 * 开始处理数据
 */
function start()
{
    var thumb = document.forms['theForm'].elements['process_thumb'].checked ? 1 : 0;
    var watermark = document.forms['theForm'].elements['process_watermark'].checked ? 1 : 0;
    var change = document.forms['theForm'].elements['change_link'][0].checked? 1 : 0;
    var silent = document.forms['theForm'].elements['silent'][0].checked? 1 : 0;
    var cat_id = document.forms['theForm'].elements['cat_id'].value;
    var brand_id = document.forms['theForm'].elements['brand_id'].value;

    var do_album = document.forms['theForm'].elements['do_album'].checked? 1 : 0;
    var do_icon = document.forms['theForm'].elements['do_icon'].checked? 1 : 0;
    var goods_id = 0;
    var multi_goods = document.forms['theForm'].elements['multi_goods_id[]'];
    if (!multi_goods)
    {
        goods_id = document.forms['theForm'].elements['goods_id'].value;;
    }
    else
    {
 		if( multi_goods.length > 0)
		{
            goods_id = '';
			for(var i = 0; i < multi_goods.length; i++)
			{
                goods_id += (multi_goods.length != i + 1) ?( multi_goods[i].value + ',') : multi_goods[i].value;
			}
		}
		else
		{
            goods_id = multi_goods.value
		}

    }
    if (do_album == 0 && do_icon == 0)
    {
        alert('<?php echo $this->_var['lang']['action_notice']; ?>');
        return false;
    }

    if (do_icon == 0)
    {
        first_act = 'album';
    }

    if (thumb || watermark )
    {
        if (restart)
        {
            var tbl = document.getElementById("listTable");
            for (i = tbl.rows.length - 1; i > 0; i--)
            {
              tbl.deleteRow(i);
            }
            restart = 0;
        }
        var elem = document.getElementById('errorMsg');
        elem.style.display = 'none';
        elem.innerHTML = '';
        Ajax.call('picture_batch.php?is_ajax=1&start=1', 'total_' + first_act + '=1&thumb=' + thumb + '&watermark=' + watermark + '&change=' + change + '&silent=' + silent + '&do_icon=' + do_icon + '&do_album=' + do_album + '&goods_id=' + goods_id + '&brand_id=' + brand_id + '&cat_id=' + cat_id , start_response, 'GET', 'JSON');
    }
    else
    {
        alert(no_action);
    }
    return false;
}

/**
 * 处理反馈信息
 * @param: result
 * @return
 */
function start_response(result)
{
    //没有执行错误
    if (result.error == 0)
    {
      if (result.done == 0 && first_act == 'icon' && document.forms['theForm'].elements['do_album'].checked)
      {
        document.getElementById('time_1').id = first_act + 'done';
        first_act = 'album';
        start();
      }
      else if (result.done == 0)
      {
        document.getElementById('time_1').id = first_act + 'done';
        first_act = 'icon';
        restart = 1;
        /* 结束时，删除多余的最后一行 */
        var tbl = document.getElementById("listTable"); //获取表格对象
        tbl.deleteRow(tbl.rows.length - 1);
      }
      else
      {
        var cell;
        var tbl = document.getElementById("listTable"); //获取表格对象

        if (result.done == 1)
        {

          if (result.module_no > 0 )
          {
            if (tbl.rows.length >1)
            /* 已经换模块，删除多余的最后一行 */
            {
                tbl.deleteRow(tbl.rows.length - 1);
            }
          }
          /* 产生一个标题行 */
          var row = tbl.insertRow(-1);

          cell = row.insertCell(0);
          cell.className = 'first-cell';
          cell.colSpan = '3';
          cell.innerHTML = result.title ;
        }
        else
        {
          document.getElementById(result.row.pre_id).innerHTML = result.row.pre_time; //更新上一行执行时间
        }

        //创建新任务行
        var row = tbl.insertRow(-1);
        cell = row.insertCell(0);
        cell.innerHTML = result.row.new_page ;
        cell = row.insertCell(1);
        cell.innerHTML = result.row.new_total ;
        cell = row.insertCell(2);
        cell.id = result.row.cur_id;
        cell.innerHTML = result.row.new_time ;

        //提交任务
        Ajax.call('picture_batch.php?is_ajax=1', 'thumb=' + result.thumb + '&watermark=' + result.watermark + '&change=' + result.change + '&module_no=' + result.module_no + '&page=' + result.page + '&page_size=' + result.page_size + '&total=' + result.total + '&silent=' + result.silent + '&do_icon=' + result.do_icon + '&do_album=' + result.do_album + '&goods_id=' + result.goods_id + '&brand_id=' + result.brand_id + '&cat_id=' + result.cat_id  , start_response, 'GET', 'JSON');
      }

      if (result.silent && result.content.length > 0)
      {
        var elem = document.getElementById('errorMsg');
        elem.style.display = '';
        elem.innerHTML += result.content;
      }


    }

    if (result.message.length > 0)
    {
      //有信息则输出出错信息
      alert(result.message);
    }
}

//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>