<style>
.pay-margin{margin:2% 4%;font-size:22px;}
.panel-drops{margin:1%; background:#fff; filter:drop-shadow(0px 0px 2.4px rgba(0,0,0,0.2)); }
</style>
<!---------------------------------------------------------------------------------------sec---------------------------------->
	
<div class="container-fluid">
	<div class="col-sm-12 section">
		<div class="col-sm-9 float-left single" style="padding:3%!important">
			<h2 id="" class="single-pro-head"><?php print_r($get_single_project['proj_name']);?></h2>
		</div>
		
		<div class="col-sm-7 mx-auto d-block" style="padding:2%; background:#fff; filter:drop-shadow(0px 0px 8px rgba(0,0,0,0.2))">
			<h4 style="color:#00B964;">Payment Method</h4><hr style="opacity:0.18;">
			<div class="payment-panel" style="padding:2%;">
				<center class="panel-drops">
				<form>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Onetime</label>
					</div>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">Reccuring</label>
					</div>
				</form>
				</center>
				
				<center class="panel-drops">
				<form>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Credit / debit</label>
					</div>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">Net Banking</label>
					</div>
				</form>
				</center>
				
				<center class="panel-drops">
				<form>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">199</label>
					</div>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">299</label>
					</div>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">499</label>
					</div>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">999</label>
					</div>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">1199</label>
					</div>
				</form>
				</center>
				
				<center class="panel-drops">
				<form>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Lotus Pay</label>
					</div>
					<div class="form-check form-check-inline pay-margin">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">Razor Pay</label>
					</div>
				</form>
				</center>
				<center>
				<button class="col-sm-5 ngo-btn mx-auto d-block">Submit</button>
				</center>
				
				
			</div>
		</div>
		<div class="row" style="padding:5%;">
		</div>
	</div>
</div>
