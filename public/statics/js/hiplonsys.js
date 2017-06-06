//点击注销后的具体实现
$(document).ready(function(){
	$('#logoutBtn').click(function(){
		$('#logoutmodal').modal('show'); //弹出第一个提示框
	});
	//在弹出第一个提示框点击确认后的处理
	$('#confirmlogout').click(function(){
		$('#logoutmodal').modal('hide');
		$.post("/public/index.php/common/logout",	
		function(data){
			if(data.code == 0){
				$('#confirmlogoutmodalmsg').text(data.msg);
			}
			if(data.code == 1){
				$('#confirmlogoutmodalmsg').text(data.msg);
				$('#confirmlogoutmodal').modal('show');
				$('#confirmlogoutmodal').on('hide.bs.modal',
					function() {
					window.location.href = data.url;
				})
			}
		});
		
	});
}); 

function refreshVerify() {
    var ts = Date.parse(new Date())/1000;
    $('#verify_img').attr("src", "/public/index.php/captcha?id="+ts);
}

function loginCheckVerify() {
	$.post("/public/index.php/common/doCheckVerify",
	{'verify':$('#input_verify').val()},	
	function(data){
		if(data.status == 0){
			alert(data.msg);
			$("#verify_img").click();
		}
		if(data.status == 1){
			
			$('#loginform').submit();
			$("#verify_img").click();
		}

    });
	return false;
}

function regCheckVerify() {
	$.post("/public/index.php/common/doCheckVerify",
	{'verify':$('#input_verify').val()},	
	function(data){
		if(data.status == 0){
			alert(data.msg);
			$("#verify_img").click();
		}
		if(data.status == 1){
			
			$('#registerform').submit();
			$("#verify_img").click();
		}

    });
	return false;
}


//左侧导航nav根据url动态显示active的效果
$(function(){
		var _nava= $('.nav .nav-item a');
		var _url = window.location.href;
		var _host = window.location.host;
		for(var i = 0; i<_nava.length ; i++){
			var _astr = _nava.eq(i).attr('href');
            if(_url.indexOf(_astr) != -1){
               _nava.eq(i).addClass('active').siblings().removeClass('active');
            }else if(_url == ('http://'+_host+'/')){
            	_nava.eq(0).addClass('active').siblings().removeClass('active');
            }
		}
})

$(document).ready(function() {
$('#resetAdv').click(function () {
    // 清空内容。
    // 不能传入空字符串，而必须传入如下参数
	$("#input_title").val(""); 
    editor.$txt.html('<p><br></p>');
	//$('#input_title').attr("value",'');

});
});




