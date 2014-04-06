$(document).ready(function(){
	$("#logout-button").on("click",function(){
		$.ajax({
			url:'logout.php',
			success: function(data, textStatus, xhr){
				document.location.href = '/';
			}
		});
	});
});
										