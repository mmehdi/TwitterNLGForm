<?php include('core/init.core.php');?>
<?php include('header.php');?>
<div class="container">

	<div class="col-lg-8 col-lg-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Input form</h3>
			</div>
			<div class="panel-body">
				<form role="form" method="post" id="nlg-form" role="form" action="">

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="event">Event</label>
						<div class="col-sm-4">
							<select class="form-control" id="event" name="event" required>
								<option>diversion</option>
								<option>delay</option>
							</select>						
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="bus-services">Bus service(s)</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Comma separated bus services which are effected" id="bus_services" name="bus_services" class="form-control">
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="problem">Problem reason</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Road works, accident, traffic congestion" id="problem" name="problem" class="form-control">
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="location">Primary location</label>
						<div class="col-sm-8">
							<input type="text" placeholder="St Machar Dr" id="location" name="location" class="form-control">
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="diversion_road">Diversion road(s)</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Comma separated Road/Streets which are effected by diversion" id="diversion_road" name="diversion_road" class="form-control">
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="duration">Duration</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Effected duration: 5mins, 15mins" id="duration" name="duration" class="form-control">
						</div>
					</div>


					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="service_status">Service status</label>
						<div class="col-sm-8">
							<input type="text" placeholder="normal, suspended." id="service_status" name="service_status" class="form-control">
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-3 control-label" for="start_date_radio">Start date/time</label>
						<label class="radio-inline"><input type="radio" name="start_date_radio" value=1>Yes</label>
						<label class="radio-inline"><input type="radio" name="start_date_radio" value=0>No</label>

					</div>




					<!-- Text input-->
					<fieldset id="start-date-form" style="display:none;">
						<legend>Start date details</legend>
						*All fields are optional. (Not entering a date will assume it's for today)
						<div class="form-group">
							<label class="col-sm-2 control-label" for="start_time">Time</label>
							<div class="col-sm-4">
								<input type="number" placeholder="1200 or 1831" id="start_time" name="start_time" class="form-control">
							</div>

							<label class="col-sm-2 control-label" for="start_date">Date</label>
							<div class="col-sm-4">
								<input type="number" placeholder="01 or 25 etc" id="start_date" name="start_date" class="form-control">
							</div>
							<label class="col-sm-2 control-label" for="start_month">Month</label>
							<div class="col-sm-4">
								<input type="number" placeholder="01 or 11 etc" id="start_month" name="start_month" class="form-control">
							</div>

							<label class="col-sm-2 control-label" for="start_year">Year</label>
							<div class="col-sm-4">
								<input type="number" placeholder="2015 or 2014 etc" id="start_year" name="start_year" class="form-control">
							</div>
						</div>

					</fieldset>


					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-3 control-label" for="end_date_radio">End date/time</label>
						<label class="radio-inline"><input type="radio" name="end_date_radio" value=1>Yes</label>
						<label class="radio-inline"><input type="radio" name="end_date_radio" value=0>No</label>

					</div>

					<!-- Text input-->
					<fieldset id="end-date-form" style="display:none;">
						<legend>End date details</legend>
						*All fields are optional. (Not entering a date will assume it's for today)
						<div class="form-group">
							<label class="col-sm-2 control-label" for="end_time">Time</label>
							<div class="col-sm-4">
								<input type="number" placeholder="1200 or 1831" id="end_time" name="end_time" class="form-control">
							</div>

							<label class="col-sm-2 control-label" for="end_date">Date</label>
							<div class="col-sm-4">
								<input type="number" placeholder="01 or 25 etc" id="end_date" name="end_date" class="form-control">
							</div>

							<label class="col-sm-2 control-label" for="end_month">Month</label>
							<div class="col-sm-4" >
								<input type="number" placeholder="01 or 11 etc" id="end_month" name="end_month" class="form-control">
							</div>

							<label class="col-sm-2 control-label" for="end_year">Year</label>
							<div class="col-sm-4">
								<input type="number" placeholder="2015 or 2014 etc" id="end_year" name="end_year" class="form-control">
							</div>
						</div>

					</fieldset>

					<div class="form-group">
						<div class="col-sm-10">
							<div class="pull-right">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>

	<div class="col-lg-8 col-lg-offset-2" id="output-form">
		<div class="panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">NLG output</h3>
			</div>
			<div class="panel-body">
				<p id="output">Waiting for input...</p>
			</div>

		</div>
	</div>
</div>


<?php include('footer.php');?>
<script type="text/javascript">

/*
show/hide start and end time
*/
$("input[name$='end_date_radio']").click(function() {
	var radioVal = $(this).val();
	if(radioVal==1) {
		$('#end-date-form').fadeIn('slow');
	} else {
		$('#end-date-form').fadeOut('slow');
	} 
});

$("input[name$='start_date_radio']").click(function() {
	var radioVal = $(this).val();
	if(radioVal==1) {
		$('#start-date-form').fadeIn('slow');
	} else {
		$('#start-date-form').fadeOut('slow');
	} 
});

/*
form submission method
*/

$("#nlg-form").submit(function(e) {       
	e.preventDefault();
	var form=$("#nlg-form");

	$.ajax({
		type:"POST",
		url:"nlg-callback.php",
		data:form.serialize(),
		success: function(response) {
			console.log(JSON.stringify(response));
			$('#output').text(response);
			

		},
		error: function(response){
                  //console.log(JSON.stringify(response));
                  alert('something went wrong!');
                  //window.location.replace("http://localhost:8888/DesireLines");
              }
          });
});

</script>