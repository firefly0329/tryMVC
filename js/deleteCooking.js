function click_delete(x){
            url = "/EasyMVC/deleteCooking/hello/" + x;
            // alert(url);
			$.get(url, function(data){
				// alert(data);
				if(data == true){
				    if(confirm('您確定要刪除本篇文章?')){
				        url = "/EasyMVC/deleteCooking_2/hello/" + x;
				        alert('刪除成功!!');
				        location.href = url;
				    }
				}else{
				    alert("您不是本篇作者");
				}
			});
        }