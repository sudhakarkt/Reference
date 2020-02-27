/* JS FOR PLACEHOLDER MOVING EFFECTS STARTS  */
	
	 

$('input').on('blur', function(){
	 var getTextval=$(this).val()
	 if(getTextval == "" || getTextval == null){

	 $(this).parent().removeClass('added-placeholder');
	 }
	 else{$(this).parent().addClass('added-placeholder')}
  	}).on('focus', function(){
		var getTextval=$(this).val()
		if(getTextval == "" || getTextval == null){
			
	$(this).parent().removeClass('').addClass('added-placeholder');
}
else{$(this).parent().addClass('added-placeholder')}
    });
	

var getTextval=$('#emailfield').val();
if(getTextval == "" || getTextval == null){
	 $('#emailfield').parent().removeClass('added-placeholder');
}
	 else{ $('#emailfield').parent().addClass('added-placeholder')}

	
	/* JS FOR PLACEHOLDER MOVING EFFECTS ENDS */