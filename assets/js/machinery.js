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

////////////////////////////////////////////////////////////////////////////////////////////

	//variables
	let machineryCurrentNumber = 1;
	let appraisalCurrentNumber = 1;

	let machineryParentTarget = $('#machineries-input');
	let appraisalParentTarget = $('#property-appraisal');
	

	$('button[name="add-machinery"]').on('click',function(){
		addInputs(machineryParentTarget);
	})
	$('button[name="add-appraisal"]').on('click',function(){
		addInputsAppraisal(appraisalParentTarget);
	})
	$('button[name="delete-machinery"]').on('click',function(){
		removeInput(machineryParentTarget);
	})
	$('button[name="remove-appraisal"]').on('click',function(){
		appraisalRemoveInput(appraisalParentTarget);
	})

	function addInputs(target){
		machineryCurrentNumber++;
		let machineryElementToAdd = `<div name="machinery" class="row mx-auto my-3">

				<h4>Machinery #${machineryCurrentNumber}</h4>

				<div class="form-group col-md-3">
					<label>Machinery Description</label>
					<input class="form-control" type="text" name="machinery-description${machineryCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Brand & Model No.</label>
					<input class="form-control" type="text" name="brand-model${machineryCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Capacity</label>
					<input class="form-control" type="text" name="capacity${machineryCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Date Acquired</label>
					<input class="form-control" type="date" name="date-acquired${machineryCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Condition When Acquired</label>
					<select class="form-control" name="condition${machineryCurrentNumber}">
						<option value="" selected>Choose condition</option>
						<option value="Good">Good</option>
						<option value="Poor">Poor</option>
					</select>
				</div>
				<div class="form-group col-md-3">
					<label>Economic Life</label>
					<input class="form-control" type="text" name="economic-life${machineryCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Date of Installation</label>
					<input class="form-control" type="date" name="date-of-installation${machineryCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Date of Operation</label>
					<input class="form-control" type="date" name="date-of-operation${machineryCurrentNumber}">
				</div>
				<div class="form-group col-md-12">
					<label>Remarks</label>
					<input class="form-control" type="text" name="remarks${machineryCurrentNumber}">
				</div>
			</div>`;

		target.append(machineryElementToAdd);
	}

	function addInputsAppraisal(target){
		appraisalCurrentNumber++;

		let appraisalElementToAdd = `<div name="appraisal" class="row mx-auto my-3">
				<h4>Appraisal #${appraisalCurrentNumber}</h4>
				<div class="form-group col-md-3">
					<label>Machinery Description</label>
					<input class="form-control" type="text" name="machinery-description-appraisal${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>No. Of Units</label>
					<input class="form-control" type="number" min="0" name="no-of-units${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Acquisition Cost</label>
					<input class="form-control" type="number" min="0" name="acquisition-cost${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Freight</label>
					<input class="form-control" type="text" name="freight${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Insurance</label>
					<input class="form-control" type="text" name="insurance${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Installation</label>
					<input class="form-control" type="text" name="installation${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Others</label>
					<input class="form-control" type="text" name="others${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-3">
					<label>Market Value</label>
					<input class="form-control" type="number" min="0" name="market-value${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-6">
					<label>Depreciation(%)</label>
					<input class="form-control" type="number" min="0" name="depreciation${appraisalCurrentNumber}">
				</div>
				<div class="form-group col-md-6">
					<label>Depreciation Market Value</label>
					<input class="form-control" type="number" min="0" name="depreciation-market-value${appraisalCurrentNumber}">
				</div>
			</div>`;

			target.append(appraisalElementToAdd);
	}

	function removeInput(target){
		if(target.children().length > 0){
			target.children().last().remove();
			machineryCurrentNumber--;
		}
	}

	function appraisalRemoveInput(target){
		if(target.children().length > 0){
			target.children().last().remove();
			appraisalCurrentNumber--;
		}
	}
})


