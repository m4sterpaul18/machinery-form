<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-5/css/bootstrap.min.css">
	<title>Machinery Form</title>
	<style type="text/css">
		@media only screen and (max-width: 485px){
			label{
				font-size: 3vw;
			}
		}
		.wrapper{
			border:1px solid #419da7;
			padding: 1rem;
		}

		table,th,td{
			border:1px solid #419da7;
		}

		#machineries-input>div{
			border:1px solid #419da7;
			padding:1rem;
		}
		#property-appraisal>div{
			border:1px solid #419da7;
			padding:1rem;
		}
	</style>
</head>
<body>
<div class="container p-5 my-5 text-light" style="border:2px solid black; border-radius:20px; background-color: #1c2a52!important">
		<h4 class="text-center my-3">
		REAL PROPERTY FIELD APPRAISAL & ASSESSMENT SHEET</h4>
		<h1 class="text-center my-3" style="color:#69dce8!important;">MACHINERY</h1>
		<!-- personal information -->
	<form action="" method="POST" enctype="multipart/form-data">
		<!-- personal information -->
		<div class="row">
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>ARP No.</label>
					<input class="form-control" type="number" name="arp-no">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="row">
					<div class="form-group col-2">
						<label>Mun.</label>
					</div>
					<div class="form-group col-2">
						<label>Dist.</label>
					</div>
					<div class="form-group col-2">
						<label>Brgy.</label>
					</div>
					<div class="form-group col-2">
						<label>Sec.</label>
					</div>
					<div class="form-group col-2">
						<label>Lot.</label>
					</div>
					<div class="form-group col-2">
						<label>Imp.</label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-2">
						<input class="form-control" type="number" name="Mun" readonly value="10">
					</div>
					<div class="form-group col-2">
						<input class="form-control" type="number" name="Dist" min=1>
					</div>
					<div class="form-group col-2">
						<select class="form-control" name="Brgy">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
						</select>
					</div>
					<div class="form-group col-2">
						<select class="form-control" name="Sec">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					<div class="form-group col-2">
						<input class="form-control" type="number" name="Lot" min=1>
					</div>
					<div class="form-group col-2">
						<input class="form-control" type="number" name="Imp" min=1>
					</div>
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>Owner</label>
					<input class="form-control" type="text" name="owner">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>Address</label>
					<input class="form-control" type="text" name="address">
				</div>
				<div class="form-group">
					<label>Tel-no.</label>
					<input class="form-control" type="text" name="tel-no.">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>User/Administrator</label>
					<input class="form-control" type="text" name="user/administrator">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>Address</label>
					<input class="form-control" type="text" name="address">
				</div>
				<div class="form-group">
					<label>Tel-no.</label>
					<input class="form-control" type="text" name="tel-no.">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>BLDG. Owner</label>
					<input class="form-control" type="text" name="bldg-owner">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>BLDG. Pin</label>
					<input class="form-control" type="number" name="bldg-pin">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>Land Owner</label>
					<input class="form-control" type="text" name="land-owner">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>Land Pin</label>
					<input class="form-control" type="number" name="land-pin">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>No./Street</label>
					<input class="form-control" type="text" name="no./street">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>BRGY./DIST</label>
					<input class="form-control" type="number" name="land-pin">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>Municipality</label>
					<input class="form-control" type="text" name="municipality">
				</div>
			</div>
			<div class="col-md-6 wrapper">
				<div class="form-group">
					<label>Province/City</label>
					<input class="form-control" type="number" name="province/city">
				</div>
			</div>		
		</div>
		
		<!-- machineries -->
		<!-- what the hell is the title here? insert title -->
		<h3 class="mt-5" style="color:#69dce8!important;">Insert title here</h3>

		<div class="btn-group mt-3">
			<button name="add-machinery" type="button" class="btn btn-success">Add</button>
			<button name="delete-machinery" type="button" class="btn btn-danger">Delete</button>
		</div>

		<div id="machineries-input" class="wrapper mt-3" >
			<div name="machinery#1" class="row mx-auto my-3">

				<h4>Machinery #1</h4>

				<div class="form-group col-md-3">
					<label>Machinery Description</label>
					<input class="form-control" type="text" name="machinery-description1">
				</div>
				<div class="form-group col-md-3">
					<label>Brand & Model No.</label>
					<input class="form-control" type="text" name="brand-model1">
				</div>
				<div class="form-group col-md-3">
					<label>Capacity</label>
					<input class="form-control" type="text" name="capacity1">
				</div>
				<div class="form-group col-md-3">
					<label>Date Acquired</label>
					<input class="form-control" type="date" name="date-acquired1">
				</div>
				<div class="form-group col-md-3">
					<label>Condition When Acquired</label>
					<select class="form-control" name="condition1">
						<option value="" selected>Choose condition</option>
						<option value="Good">Good</option>
						<option value="Poor">Poor</option>
					</select>
				</div>
				<div class="form-group col-md-3">
					<label>Economic Life</label>
					<input class="form-control" type="text" name="economic-life1">
				</div>
				<div class="form-group col-md-3">
					<label>Date of Installation</label>
					<input class="form-control" type="date" name="date-of-installation1">
				</div>
				<div class="form-group col-md-3">
					<label>Date of Operation</label>
					<input class="form-control" type="date" name="date-of-operation1">
				</div>
				<div class="form-group col-md-12">
					<label>Remarks</label>
					<input class="form-control" type="text" name="remarks1">
				</div>
			</div>

		</div>

		<!-- property appraisal --> 
		<h3 class="mt-5" style="color:#69dce8!important;">Property Appraisal</h3>

		<div class="btn-group mt-3">
			<button name="add-appraisal" type="button" class="btn btn-success">Add</button>
			<button name="remove-appraisal" type="button" class="btn btn-danger">Delete</button>
		</div>

		<div id="property-appraisal" class="wrapper mt-3">
			<div name="appraisal#1" class="row mx-auto my-3">
				<h4>Appraisal #1</h4>
				<div class="form-group col-md-3">
					<label>Machinery Description</label>
					<input class="form-control" type="text" name="machinery-description-appraisal">
				</div>
				<div class="form-group col-md-3">
					<label>No. Of Units</label>
					<input class="form-control" type="number" min="0" name="no-of-units">
				</div>
				<div class="form-group col-md-3">
					<label>Acquisition Cost</label>
					<input class="form-control" type="number" min="0" name="acquisition-cost">
				</div>
				<div class="form-group col-md-3">
					<label>Freight</label>
					<input class="form-control" type="text" name="freight">
				</div>
				<div class="form-group col-md-3">
					<label>Insurance</label>
					<input class="form-control" type="text" name="insurance">
				</div>
				<div class="form-group col-md-3">
					<label>Installation</label>
					<input class="form-control" type="text" name="installation">
				</div>
				<div class="form-group col-md-3">
					<label>Others</label>
					<input class="form-control" type="text" name="others">
				</div>
				<div class="form-group col-md-3">
					<label>Market Value</label>
					<input class="form-control" type="number" min="0" name="market-value">
				</div>
				<div class="form-group col-md-6">
					<label>Depreciation(%)</label>
					<input class="form-control" type="number" min="0" name="depreciation">
				</div>
				<div class="form-group col-md-6">
					<label>Depreciation Market Value</label>
					<input class="form-control" type="number" min="0" name="depreciation-market-value">
				</div>
			</div>
		</div>

		<h3 class="lead mt-2">Total:</h3>

		<input style="width:50%;"class="form-control" type="number" min="0" name="total-property-appraisal">
		

		<!-- property assessment -->
		<h3 class="mt-5" style="color:#69dce8!important;">Property Assessment</h3>
		<div class="row wrapper">
			<div class="form-group col-md-3">
				<label>Kind</label>
				<input class="form-control" type="text" name="kind">
			</div>
			<div class="form-group col-md-3">
				<label>Market Value</label>
				<input class="form-control" type="number" min="0" name="market-value">
			</div>
			<div class="form-group col-md-3">
				<label>Assessment Level</label>
				<input class="form-control" type="number" min="0" name="assessment-level">
			</div>
			<div class="form-group col-md-3">
				<label>Assessed Value</label>
				<input class="form-control" type="number" min="0" name="assessed-value">
			</div>
		</div>

		<!-- owners -->
		<div class="row wrapper mt-5">
			<div class="form-group col-md-6">
				<label>Previous Owner</label>
				<input class="form-control" type="text" name="prev-owner">
			</div>
			<div class="form-group col-md-6">
				<label>Taxability</label>
				<select name="taxable" class="form-control">
					<option selected value="">Choose</option>
					<option>Taxable</option>
					<option>Excempt</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label>Previous Value</label>
				<input class="form-control" type="number" name="prev-value">
			</div>
			<div class="form-group col-md-6">
				<label>Effectivity</label>
				<input class="form-control" type="date" name="effectivity">
			</div>
		</div>
		<!-- appraised/assessed/approval -->
		<div class="row wrapper mt-5">
			<div class="form-group col-md-3">
				<label>Appraised by:</label>
				<input class="form-control" type="text" name="appraised-by">
				
			</div>
			<div class="form-group col-md-3">
				<label>Date</label>
				<input class="form-control" type="date" name="appraised-date">
			</div>
			<div class="form-group col-md-3">
				<label>Assessed By:</label>
				<input class="form-control" type="text" name="assessed-by">
			</div>
			<div class="form-group col-md-3">
				<label>Date</label>
				<input class="form-control" type="date" name="assessed-date">
			</div>
			<div class="form-group col-md-6	mt-5">
				<label>Approved by:</label>
				<input class="form-control" type="text" name="approved-by">
			</div>
			<div class="form-group col-md-6 mt-5">
				<label>Date</label>
				<input class="form-control" type="date" name="approved-date">
			</div>
		</div>

		<!-- memoranda -->
		<h3 class="mt-5" style="color:#69dce8!important;">Memoranda</h3>
		<div class="form-group">
			<textarea class="form-control" name="memoranda" rows="5"></textarea>
		</div>

		<h3 class="mt-5" style="color:#69dce8!important;">Reference and Posting Summary</h3>
		<table class="table text-light">
			<thead class="text-center">
				<tr>
					<th colspan="2">Pre & Post Inspection</th>
					<th>Previous</th>
					<th>Present</th>
					<th colspan="2">Posting</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center">PIN</td>
					<td><input class="form-control" type="number" name="pin" placeholder="pin"></td>
					<td><input class="form-control" type="number" name="previous-pin" placeholder="previous"></td>
					<td><input class="form-control" type="number" name="present-pin" placeholder="present"></td>
					<td><input class="form-control" type="text" name="pin-initial" placeholder="initial"></td>
					<td><input class="form-control" type="date" name="pin-date" placeholder="date"></td>
				</tr>
				<tr>
					<td class="text-center">TDN/ARP</td>
					<td><input class="form-control" type="text" name="TDN/ARP" placeholder="TDN/ARP"></td>
					<td><input class="form-control" type="text" name="TDN/ARP-previous" placeholder="previous"></td>
					<td><input class="form-control" type="text" name="TDN/ARP-present" placeholder="present"></td>
					<td><input class="form-control" type="text" name="TDN/ARP-initial" placeholder="initial"></td>
					<td><input class="form-control" type="date" name="TDN/ARP-date" placeholder="date"></td>
				</tr>
				<tr>
					<td class="text-center">ASS.ROLL PAGE & NO.</td>
					<td><input class="form-control" type="text" name="ass-no." placeholder="Ass.roll page & no."></td>
					<td><input class="form-control" type="text" name="ass-previous" placeholder="previous"></td>
					<td><input class="form-control" type="text" name="ass-present" placeholder="present"></td>
					<td><input class="form-control" type="text" name="ass-initial" placeholder="initial"></td>
					<td><input class="form-control" type="date" name="ass-date" placeholder="date"></td>
				</tr>
			</tbody>
		</table>
		<button id="submit" type="submit" class="btn btn-success btn-block mt-5" style="width:100%;">Submit</button>
	</form>
</div>

<script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="assets/bootstrap-5/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/sweet-alert/sweet-alert.js"></script>
<script type="text/javascript" src="assets/js/machinery.js"></script>
</body>
</html>