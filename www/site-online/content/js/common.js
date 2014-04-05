var api_url = "/api/api.php";
var api_path = "/api/";

 function processAjaxData(response, urlPath, pageTitle){
	//load ajax data
	//load html data
	//MAKE THIS WORK MAN!
     $("#content").html(response);
     document.title = pageTitle;
	
     window.history.pushState({"html":response,"pageTitle":pageTitle},"", urlPath);
 };
 
 function ajaxOnCallChangePage(action, param, urlPath, pageTitle, callbackMethod ){
	$.ajax({
	  url: urlPath,
	  type: "GET",
	  dataType: "html",
	  success: function(data, textStatus, xhr){
		processAjaxData(data, urlPath, pageTitle);
	  }
	});
	$.ajax({
	  url: api_url,
	  type: "POST",
	  data: {	action:action,
				param:param
	  },
	  dataType: "json",
	  success: function(data, textStatus, xhr){
		callbackMethod(data, textStatus, xhr);
	  }
	});
};
 
 window.onpopstate = function(e){
    if(e.state){
        document.getElementById("content").innerHTML = e.state.html;
        document.title = e.state.pageTitle;
    }
};