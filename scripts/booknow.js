var $ = jQuery.noConflict(); 
var formSubmitted = 'false';

jQuery(document).ready(function($) {	

	$('#formSuccessMessageWrap').hide(0);
	$('.formValidationError').fadeOut(0);
	
	// fields focus function starts
	$('input[type="text"], input[type="password"], textarea').focus(function(){
		if($(this).val() == $(this).attr('data-dummy')){
			$(this).val('');
		};	
	});
	// fields focus function ends
		
	// fields blur function starts
	$('input, textarea').blur(function(){
    	if($(this).val() == ''){		    
			$(this).val($(this).attr('data-dummy'));				
		};			
	});
	// fields blur function ends

	// submit form data starts	   
    function submitData(currentForm, formType){     
		formSubmitted = 'true';		
		var formInput = $('#' + currentForm).serialize();		
		$('#progress,#email-status').show();
		$.post($('#' + currentForm).attr('action'),formInput, function(data){
			$('#' + currentForm).hide();
			$('#formSuccessMessageWrap').fadeIn(500);
			$('#progress,#email-status').hide();						
		}).fail(function(err){
			$('#progress,#email-status').hide();
			alert('Something went wrong. Please try again. If this error keeps coming, please notify the site admin at info@prive-yachts.com . Thanks.')
		});

	};
	// submit form data function starts	
	// validate form function starts
	function validateForm(currentForm, formType){	
		let errorState = false;	
		// hide any error messages starts
	    $('.formValidationError').hide();
		$('.fieldHasError').removeClass('fieldHasError');
	    // hide any error messages ends
	    // declare state var
	    
		$('#' + currentForm + ' .requiredField').each(function(i){		   	 
			if($(this).val() == '' || $(this).val() == $(this).attr('data-dummy')){				
				// $(this).val($(this).attr('data-dummy'));
				if (i===0)
				$(this).focus();
				$(this).addClass('fieldHasError');
				$('#' + $(this).attr('id') + 'Error').fadeIn(300);
				errorState = true;					   
			};		
			if($(this).hasClass('requiredEmailField')){				  
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				var tempField = '#' + $(this).attr('id');				
				if(!emailReg.test($(tempField).val())) {
					$(tempField).focus();
					$(tempField).addClass('fieldHasError');
					$(tempField + 'ValidError').fadeIn(300);
					errorState = true;
				};			
			};
					
						  
   		});
   		$('#' + currentForm + ' .requiredRadio').each(function(i){		   	 
			if($(this).prop('checked') === false){
				$(this).addClass('fieldHasError');
				$('#' + $(this).attr('id') + 'Error').fadeIn(300);			
				errorState = true;					   
			};
		});
   		if (errorState === true) {
   			$('html,body').animate({scrollTop: $('#formTop').offset().top},'slow');
			return false;
		}else{
			if(formSubmitted == 'false'){
			 	submitData(currentForm, formType);
			};
		}		
	};
	// validate form function ends	
	
	// contact button function starts
	$('#bookingSubmitButton').click(function(e) {
		e.preventDefault();	
		validateForm($(this).attr('data-formId'));	
	    return false;		
	});
	// contact button function ends
	
	
	
});
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Document Ready Function Ends                                                                       */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
