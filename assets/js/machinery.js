$(function(){
	// all inputs area required
	$('input, select').attr('required','');
	
	// form validation
	$('input,select').on('click',function(){
		$('input,select').each(function(){
		    if($(this).val() == ''){
		        $(this).css("border","1px solid red");
		    }
		    else{
		    	$(this).css("border","1px solid green");
			}
		})
	});

	// confirm submition
	$('#submit').on('click',function(){
		if(!$('input,select').val()){
			Swal.fire('Please finish all inputs','','warning');
		}
		else{
			Swal.fire({
			title:'Do you want to submit?',
			showCancelButton:true,
			confirmButtonText:'Submit'
			}).then((result)=>{
				if(result.isConfirmed){
					Swal.fire('The form is submitted','','success');
					return true;
				}
			});
		}
		
	});

})


