/* $Id : shopping_flow.js 4865 2007-01-31 14:04:10Z paulgao $ */

/*******************************************************************************
 * 检查收货地址信息表单中填写的内容
 */
function trainRecruit(frm) {
	var msg = new Array();
	var err = false;

	if (frm.elements['name'] && Utils.isEmpty(frm.elements['name'].value)) {
		err = true;
		msg.push('报名人姓名不能为空');
	}
	
	if (frm.elements['tel'] && Utils.isEmpty(frm.elements['tel'].value)) {
		err = true;
		msg.push('联系方式不能为空');
	}
	
	if (frm.elements['province'] && frm.elements['province'].value == 0 && frm.elements['province'].length > 1) {
		err = true;
		msg.push('请您选择所在省份');
	}

	if (frm.elements['city'] && frm.elements['city'].value == 0 && frm.elements['city'].length > 1) {
		err = true;
		msg.push('请您选择所在城市');
	}

	if (frm.elements['area'] && frm.elements['area'].length > 1) {
		if (frm.elements['area'].value == 0) {
			err = true;
			msg.push('请您选择所在区域');
		}
	}
	
	if (err) {
		message = msg.join("\n");
		alert(message);
	}
	return !err;
}

function doHousewifery() {
    var msg = new Array();
    var err = false;
	
    var name = $("#name").val();
    if (name=='') {
            err = true;
            msg.push('姓名不能为空');
    }
    
    if ($("#tel").val()=='') {
            err = true;
            msg.push('联系方式不能为空');
    }
    
    if ($("#age").val()=='') {
            err = true;
            msg.push('年龄不能为空');
    }
    if ($("#title").val()=='') {
            err = true;
            msg.push('标题不能为空');
    }
    
    if ($("#price").val()=='') {
            err = true;
            msg.push('薪资不能为空');
    }
    if ($("#selCities").val()=='') {
            err = true;
            msg.push('请您选择所在区域');
    }
    if ($("#address").val()=='') {
            err = true;
            msg.push('详细地址不能为空');
    }

    /*if (frm.elements['name'] && Utils.isEmpty(frm.elements['name'].value)) {
            err = true;
            msg.push('姓名不能为空');
    }

    if (frm.elements['tel'] && Utils.isEmpty(frm.elements['tel'].value)) {
            err = true;
            msg.push('联系方式不能为空');
    }
    
    if (frm.elements['age'] && Utils.isEmpty(frm.elements['age'].value)) {
            err = true;
            msg.push('年龄不能为空');
    }
    
    if (frm.elements['title'] && Utils.isEmpty(frm.elements['title'].value)) {
            err = true;
            msg.push('标题不能为空');
    }
    
    if (frm.elements['price'] && Utils.isEmpty(frm.elements['price'].value)) {
            err = true;
            msg.push('薪资不能为空');
    }

    if (frm.elements['province'] && frm.elements['province'].value == 0 && frm.elements['province'].length > 1) {
            err = true;
            msg.push('请您选择所在省份');
    }

    if (frm.elements['city'] && frm.elements['city'].value == 0 && frm.elements['city'].length > 1) {
            err = true;
            msg.push('请您选择所在城市');
    }

    if (frm.elements['area'] && frm.elements['area'].length > 1) {
            if (frm.elements['area'].value == 0) {
                    err = true;
                    msg.push('请您选择所在区域');
            }
    }
    
    if (frm.elements['address'] && Utils.isEmpty(frm.elements['address'].value)) {
            err = true;
            msg.push('详细地址不能为空');
    }*/

    if (err) {
            message = msg.join("\n");
            alert(message);
    }else{
        document.formTrain.action = 'release.php?act=do_housewifery'; 
	document.formTrain.submit(); 
    }
    //return !err;
}

function findHousewifery(frm) {
    var msg = new Array();
    var err = false;

    if (frm.elements['title'] && Utils.isEmpty(frm.elements['title'].value)) {
            err = true;
            msg.push('标题不能为空');
    }
    
    if (frm.elements['price'] && Utils.isEmpty(frm.elements['price'].value)) {
            err = true;
            msg.push('薪资不能为空');
    }
    
    if (frm.elements['name'] && Utils.isEmpty(frm.elements['name'].value)) {
            err = true;
            msg.push('联系人不能为空');
    }

    if (frm.elements['tel'] && Utils.isEmpty(frm.elements['tel'].value)) {
            err = true;
            msg.push('联系电话不能为空');
    }

    if (frm.elements['province'] && frm.elements['province'].value == 0 && frm.elements['province'].length > 1) {
            err = true;
            msg.push('请您选择所在省份');
    }

    if (frm.elements['city'] && frm.elements['city'].value == 0 && frm.elements['city'].length > 1) {
            err = true;
            msg.push('请您选择所在城市');
    }

    if (frm.elements['area'] && frm.elements['area'].length > 1) {
            if (frm.elements['area'].value == 0) {
                    err = true;
                    msg.push('请您选择所在区域');
            }
    }
    
    if (frm.elements['address'] && Utils.isEmpty(frm.elements['address'].value)) {
            err = true;
            msg.push('详细地址不能为空');
    }

    if (err) {
            message = msg.join("\n");
            alert(message);
    }
    return !err;
}

function rental() {
    var msg = new Array();
    var err = false;
	
	var district_name = $("#district_name").val();
    if (district_name=='') {
            err = true;
            msg.push('小区不能为空');
    }

    /*if (frm.elements['selProvinces'] && frm.elements['selProvinces'].value == 0 && frm.elements['selProvinces'].length > 1) {
            err = true;
            msg.push('请您选择所在省份');
    }

    if (frm.elements['selCities'] && frm.elements['selCities'].value == 0 && frm.elements['selCities'].length > 1) {
            err = true;
            msg.push('请您选择所在城市');
    }

    if (frm.elements['selDistricts'] && frm.elements['selDistricts'].length > 1) {
            if (frm.elements['selDistricts'].value == 0) {
                    err = true;
                    msg.push('请您选择所在区域');
            }
    }*/
    
	if ($("#selCities").val()=='') {
            err = true;
            msg.push('请您选择所在区域');
    }
    
    if ($("#address").val()=='') {
            err = true;
            msg.push('具体地址不能为空');
    }
    
    if ($("#title").val()=='') {
            err = true;
            msg.push('标题不能为空');
    }
    
    if ($("#name").val()=='') {
            err = true;
            msg.push('联系人不能为空');
    }

    if ($("#tel").val()=='') {
            err = true;
            msg.push('联系电话不能为空');
    }

    if (err) {
            message = msg.join("\n");
            alert(message);
    }else{
        document.formTrain.action = 'release.php?act=do_rental'; 
		document.formTrain.submit(); 
    }
    //return !err;
}

function wanted(frm) {
    var msg = new Array();
    var err = false;

    if (frm.elements['selProvinces'] && frm.elements['selProvinces'].value == 0 && frm.elements['selProvinces'].length > 1) {
            err = true;
            msg.push('请您选择所在省份');
    }

    if (frm.elements['selCities'] && frm.elements['selCities'].value == 0 && frm.elements['selCities'].length > 1) {
            err = true;
            msg.push('请您选择所在城市');
    }

    if (frm.elements['selDistricts'] && frm.elements['selDistricts'].length > 1) {
            if (frm.elements['selDistricts'].value == 0) {
                    err = true;
                    msg.push('请您选择所在区域');
            }
    }
    
    if (frm.elements['address'] && Utils.isEmpty(frm.elements['address'].value)) {
            err = true;
            msg.push('主要路段不能为空');
    }
    
    if (frm.elements['name'] && Utils.isEmpty(frm.elements['name'].value)) {
            err = true;
            msg.push('联系人不能为空');
    }

    if (frm.elements['tel'] && Utils.isEmpty(frm.elements['tel'].value)) {
            err = true;
            msg.push('联系电话不能为空');
    }
    

    if (err) {
            message = msg.join("\n");
            alert(message);
    }
    return !err;
}

function qiugou(frm) {
    var msg = new Array();
    var err = false;

    if (frm.elements['title'] && Utils.isEmpty(frm.elements['title'].value)) {
            err = true;
            msg.push('标题不能为空');
    }
    
    if (frm.elements['selProvinces'] && frm.elements['selProvinces'].value == 0 && frm.elements['selProvinces'].length > 1) {
            err = true;
            msg.push('请您选择所在省份');
    }

    if (frm.elements['selCities'] && frm.elements['selCities'].value == 0 && frm.elements['selCities'].length > 1) {
            err = true;
            msg.push('请您选择所在城市');
    }

    if (frm.elements['selDistricts'] && frm.elements['selDistricts'].length > 1) {
            if (frm.elements['selDistricts'].value == 0) {
                    err = true;
                    msg.push('请您选择所在区域');
            }
    }
    
    if (frm.elements['name'] && Utils.isEmpty(frm.elements['name'].value)) {
            err = true;
            msg.push('联系人不能为空');
    }

    if (frm.elements['tel'] && Utils.isEmpty(frm.elements['tel'].value)) {
            err = true;
            msg.push('联系电话不能为空');
    }
    

    if (err) {
            message = msg.join("\n");
            alert(message);
    }
    return !err;
}

function chushou() {
    var msg = new Array();
    var err = false;

    var district_name = $("#district_name").val();
    if (district_name=='') {
            err = true;
            msg.push('小区不能为空');
    }
    
    /*if (frm.elements['selProvinces'] && frm.elements['selProvinces'].value == 0 && frm.elements['selProvinces'].length > 1) {
            err = true;
            msg.push('请您选择所在省份');
    }

    if (frm.elements['selCities'] && frm.elements['selCities'].value == 0 && frm.elements['selCities'].length > 1) {
            err = true;
            msg.push('请您选择所在城市');
    }

    if (frm.elements['selDistricts'] && frm.elements['selDistricts'].length > 1) {
            if (frm.elements['selDistricts'].value == 0) {
                    err = true;
                    msg.push('请您选择所在区域');
            }
    }*/
    
    if ($("#selCities").val()=='') {
            err = true;
            msg.push('请您选择所在区域');
    }
    
    if ($("#address").val()=='') {
            err = true;
            msg.push('具体地址不能为空');
    }
    
    if ($("#title").val()=='') {
            err = true;
            msg.push('标题不能为空');
    }
    
    if ($("#name").val()=='') {
            err = true;
            msg.push('联系人不能为空');
    }

    if ($("#tel").val()=='') {
            err = true;
            msg.push('联系电话不能为空');
    }
    

    if (err) {
            message = msg.join("\n");
            alert(message);
            //return false;
    }else{
        document.formTrain.action = 'release.php?act=do_chushou'; 
		document.formTrain.submit(); 
    }
    //return !err;
}

function rentalType(id){
    if(id==1){
        $("#squareMeter").show();
        $("#rentalRoom").hide();
        $("#selectAll").hide();
        $("#bedRoom").hide();
    }
    else if(id==2){
        $("#squareMeter").hide();
        $("#rentalRoom").show();
        $("#selectAll").show();
        $("#bedRoom").hide();
    }
    else if(id==3){
        $("#squareMeter").hide();
        $("#rentalRoom").hide();
        $("#bedRoom").show();
        $("#selectAll").hide();
    }
}

/*function supply(id){
    if(id==1){
        $("#qiugou").show();
        $("#chushou").hide();
    }
    else if(id==2){
        $("#qiugou").hide();
        $("#chushou").show();
    }
}*/

function selectAll(){
    $("#selectAll input").attr("checked",true);
    $(".select_all").html("<i onclick='cancelAll()'>取消</i>");
}

function cancelAll(){
    $("#selectAll input").attr("checked", false);
    $(".select_all").html("<i onclick='selectAll()'>全选</i>");
}

function paymen_tel(id){
	 var a =window.confirm("这将花费您1元的账户余额");
	 if(!a){
		 return;
	 }
    $.ajax({
        url  : "release.php?act=paymen_view_tel",
        type : "POST",
        data : {id:id},
        error : function(){alert('Error loading PHP document');},
        success: function(data){
            var data = eval('('+data+')');
            if(data.state == 1){
                //$('#del'+id).remove();
				$(".showtel").html(data.content);
                return false;
            } else {
                //alert('Delete failed !');
				$(".showtel").html(data.content);
                return false;
            }
        }
    });
}

function del(sign,id,img){
    $.ajax({
        url  : "release.php?act=del_release",
        type : "POST",
        data : {id:id,img:img},
        error : function(){alert('Error loading PHP document');},
        success: function(data){
            var data = eval('('+data+')');
            if(data == 1){
                $('#del'+sign).remove();
                return false;
            } else {
                alert('Delete failed !');
                return false;
            }
        }
    });
}