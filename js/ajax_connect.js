$(function(){
    $("#changeClass").change(function (){
			x = $("#changeClass option:selected").text();
			// url = "/EasyMVC/controllers/connect.php?letter=" + x;
			url = "/EasyMVC/connect/guide/" + x;
			console.log(url);
			$.get(url, function(data){
				$("#cooking").html(data);
			})
		});
		$("#changeClass").trigger("change");
		x = true;
});
