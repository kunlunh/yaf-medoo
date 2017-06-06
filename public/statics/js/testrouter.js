
$(document).ready(function() {
	// 保存初始内容。

	$('#testBtn').click(function () {
		
		$.post("/admin/doAddpost",
		{'title':$('#input_title').val(),
		 'content':$('#input_content').val()
		},	
		function(data){
			if(data.code == 1){
				$('#adTitle').html(data.Title);
				$('#test1').html(data.Content);
				$('#adImg').attr('src',data.Imgsrc);
				$('#adLocate').attr('src',escape2Html(data.LocateIMG));
				//$('#ip9').val(data.Content);
				$('#ads').show();
			}
			if(data.code == 0){
				alert(data.msg);
			}
			

		});
	});
});

function escape2Html(str) {
 var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'"'};
 return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
}