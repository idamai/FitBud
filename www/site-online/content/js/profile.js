$(document).ready(function(){
	
	$(function () {
            $('#datetimepicker1').datetimepicker();
        });
	$("#payment-form").validate({
		rules: {
        	cardNumber: {
                required: true
            },
            cardName: {
                required: true
			},
            cardExpMonth: {
                required: true,
                min: 1,
                max: 12
            },
            cardExpYear:{
            	required:true,
            	min:1,
            	number: true
            },
            cardCvv:{
            	required:true
            }
        },
		errorLabelContainer: '#payment-errors',
		errorClass: 'has-error',
        submitHandler: function(form) {
            $("#paymentModal").modal('hide');
        }
	});
	$("#card-number").mask("0000-0000-0000-0000");
	$("#card-exp-month").mask("00");	
	$("#card-exp-year").mask("00");
});