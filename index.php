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
			border:1px solid white;
			padding: 0.7rem;
		}

		table,th,td{
			border:1px solid white;
		}
	</style>
</head>
<body>
<div class="container p-5 my-5 bg-dark text-light" style="border:2px solid black; border-radius:20px;">
		<h1 class="text-center my-3">
		REAL PROPERTY FIELD APPRAISAL & ASSESSMENT SHEET - MACHINERY</h1>
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
		<button type="button" class="btn btn-success mt-5">Add +</button>
		<!-- machineries -->
		<table class="table table-dark mt-3">
			<thead>
				<tr class="text-center">
					<th>Machinery Description</td>
					<th>Brand & Model No.</th>
					<th>Capacity</th>
					<th>Date Acquired</th>
					<th>Condition When Acquired</th>
					<th>Economic Life</th>
					<th>Date of Installation</th>
					<th>Date of Operation</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
				</tr>
			</tbody>
		</table>

		<button type="button" class="btn btn-success mt-5">Add +</button>
		<h3 class="my-3">Property Appraisal</h3>
		<table class="table table-dark mt-3">
			<thead>
				<tr>
					<th>Machinery Description</th>
					<th>No. Of Units</th>
					<th>Acquisition Cost</th>
					<th>Freight</th>
					<th>Insurance</th>
					<th>Installation</th>
					<th>Others</th>
					<th>Market Value</th>
					<th>Depreciation</th>
					<th>Deprectiation Market Value</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
					<td>
						<input class="form-control" type="text" name="">
					</td>
				</tr>	
			</tbody>
		</table>
		<!-- total -->
		<h3>Total:</h3>
		<p>0.00 PHP</p>

		<!-- property assessment -->
		<h3 class="mt-5">Property Assessment</h3>
		<table class="table table-dark">
			<thead>
				<tr>
					<th>Kind</th>
					<th>Market Value</th>
					<th>Assessment Level</th>
					<th>Assessed Value</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input class="form-control" type="text" name="kind">
					</td>
					<td>
						<input class="form-control" type="number" name="market-value">
					</td>
					<td>
						<input class="form-control" type="text" name="assessment-level">
					</td>
					<td>
						<input class="form-control" type="number" name="assessed-value">
					</td>
				</tr>
				<tr>
					<td colspan="4">Total</td>
				</tr>
			</tbody>
		</table>
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
		<div class="row mt-5">
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
		<h3 class="mt-5">Memoranda</h3>
		<div class="form-group">
			<textarea class="form-control" name="memoranda" rows="5"></textarea>
		</div>

		<h3 class="mt-5">Reference and Posting Summary</h3>
		<table class="table table-dark">
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
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name="" placeholder="initial"></td>
					<td><input class="form-control" type="text" name="" placeholder="date"></td>
				</tr>
				<tr>
					<td class="text-center">TDN/ARP</td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name="" placeholder="initial"></td>
					<td><input class="form-control" type="text" name="" placeholder="date"></td>
				</tr>
				<tr>
					<td class="text-center">ASS.ROLL PAGE & NO.</td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name="" placeholder="initial"></td>
					<td><input class="form-control" type="text" name="" placeholder="date"></td>
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