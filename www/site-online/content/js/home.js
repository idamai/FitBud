//Place holder for scripts on home page
$(document).ready(function(){
	$("#search-user").on("click", function(){
		var zipQuery = $("search-zip").val();
		ajaxOnCallChangePage("search",{searchQ : zipQuery},"/results.html","Search Results: "+zipQuery,resultsCallback);		
	});
});


function resultsCallback(data, textStatus, xhr){
	$.getScript("js/results.js");
	$.getScript("js/ratings.js");
	$(".starrr").starrr();
};

function signUpCallback(data, textStatus, xhr){
};