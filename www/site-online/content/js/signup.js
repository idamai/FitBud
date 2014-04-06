
 var geocoder;
 var map;
 

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
      'callback=initializeGeocoder';
  document.body.appendChild(script);
}

 function initializeGeocoder() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(37.4419, -97.1419);
    var mapOptions = {
      zoom: 3,
      center: latlng
    }
	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
 }

  function codeAddress(address) {
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
		map.setZoom(16);
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }

window.onload = loadScript;



$(document).ready(function(){
	$("#address1-input, #address2-input, #city-input,#state-input, #zip-input").on("blur",function(){
		var address1 = $("#address1-input").val();
		var address2 = $("#address2-input").val();
		var city = $("#city-input").val();
		var state = $("#state-input").val();
		var zip = $("#zip-input").val();
		if (address1!="" && city != "" && state !="" && city != "" && zip != "") {
			var search_string= address1+", "+address2+", "+city+", "+state+", "+zip;
			codeAddress(search_string);
		}
	});
	
	$("#signup-form").validate({
		rule: {
			signupName:{
				required:true
			},
			signupEmail:{
				required:true,
				email:true
			},
			signupPassword : {
                    minlength : 5,
					required:true
            },
			signupPasswordCfm : {
				minlength : 5,
				required:true,
				equalTo : "#password-input"
			},
			signupBirthday :{
				required:true,
				date: true
			},
			signupGender :{
				required:true
			}
		},
		errorClass: 'has-error',
		submitHandler: function(form){
			$.ajax({
				url:"signup-process.php",
				type:"post",
				success: function(data, textStatus,xhr){
					document.location.href='/profile.php';
				}
			});
		}
	});
});