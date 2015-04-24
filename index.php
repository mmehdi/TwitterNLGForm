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
					<div class="row form-group" id="bus_services_directions_group" style="display:none;">
						<label class="col-sm-2 control-label" for="">Bus service(s) direction(s)</label>
						<div class="col-sm-8">
							<input type="text" placeholder="comma separated. E.g: both directions, heading from St Machar Dr." id="bus_services_directions" name="bus_services_directions" class="form-control">
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
					<div class="row form-group" style="display:none;" id="delay_size_group">
						<label class="col-sm-2 control-label" for="delay_size">Delay size</label>
						<div class="col-sm-4">
							<select class="form-control" id="delay_size" name="delay_size">
								<option></option>
								<option>slight</option>
								<option>minor</option>
								<option>major</option>
							</select>						
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
					<div class="row form-group" id="diversion_roads_group">
						<label class="col-sm-2 control-label" for="diversion_roads">Diversion road(s)</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Comma separated Road/Streets which are effected by diversion" id="diversion_roads" name="diversion_roads" class="form-control">
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-2 control-label" for="duration">Duration/ Timeinterval</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Effected duration: 5mins, 15mins" id="duration" name="duration" class="form-control">
						</div>
					</div>


					<!-- Text input-->
					<div class="row form-group" style="display:none;" id="service_status">
						<label class="col-sm-2 control-label" for="service_status">Service status</label>
						<div class="col-sm-4">
							<select class="form-control" id="service_status" name="service_status">
								<option></option>
								<option>normal</option>
								<option>suspended</option>
							</select>						
						</div>
					</div>

					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-3 control-label" for="start_date_radio">Start date/time</label>
						<label class="radio-inline"><input type="radio" name="start_date_radio" value=1>Yes</label>
						<label class="radio-inline"><input type="radio" name="start_date_radio" value=0>No</label>

					</div>



					<div class="row form-group" id="start-date-form" style="display:none;">
						<label class="col-sm-3 control-label" for="start_date_radio">Hr:min d-m-y</label>
						<input type="text" id="start_datetime" name="start_datetime" data-format="HH:mm DD-MM-YYYY" data-template="HH : mm DD / MMM / YYYY" >
					</div>


					<!-- Text input-->
					<fieldset id="start-date-formx" style="display:none;">
						<legend>Start date time details</legend>
						<div class="form-group" style="display:none;">

							<label class="col-sm-2 control-label" for="start_date">Date</label>
							<div class="col-sm-2">
								<select name="start_date" id="start_date" class="form-control" title="Select date">
									<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option>
									<option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
									<option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
									<option value="31">31</option>
					            </select>
								<!--input type="number" placeholder="01 or 25 etc" id="start_date" name="start_date" class="form-control"-->
							</div>
							<label class="col-sm-2 control-label" for="start_month">Month</label>
							<div class="col-sm-2">
								<select name="start_month" id="start_month" class="form-control" title="Select month">
									<option value="01">Jan</option><option value="02">Feb</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">Aug</option><option value="09">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
								</select>
								<!--input type="number" placeholder="01 or 11 etc" id="start_month" name="start_month" class="form-control"-->
							</div>

							<label class="col-sm-2 control-label" for="start_year">Year</label>
							<div class="col-sm-4">
								<select name="start_year" id="start_year" class="form-control" title="Select year">
									<option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
								</select>
								<!--input type="number" placeholder="2015 or 2014 etc" id="start_year" name="start_year" class="form-control"-->
							</div>
						</div>

					</fieldset>


					<!-- Text input-->
					<div class="row form-group">
						<label class="col-sm-3 control-label" for="end_date_radio">End date/time</label>
						<label class="radio-inline"><input type="radio" name="end_date_radio" value=1>Yes</label>
						<label class="radio-inline"><input type="radio" name="end_date_radio" value=0>No</label>

					</div>


					<div class="row form-group" id="end-date-form" style="display:none;">
						<label class="col-sm-3 control-label" for="end_date_radio">Hr:min d-m-y</label>
						<input type="text" id="end_datetime" name="end_datetime" data-format="HH:mm DD-MM-YYYY" data-template="HH : mm DD / MMM / YYYY" >
					</div>

					<!-- Text input-->
					<fieldset id="end-date-formx" style="display:none;">
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


$('input:radio[name=end_date_radio]')[1].checked = true;
$('input:radio[name=start_date_radio]')[1].checked = true;

var today = new Date();
var dd = format(today.getDate(),2);
var mm = format(today.getMonth()+1,2); //January is 0!
var yyyy = today.getFullYear();
var HH = format(today.getHours(),2); 
var min = format(today.getMinutes(),2);
var current_date = HH+':'+min+' '+dd+'-'+mm+'-'+yyyy;
//alert(current_date);

$('#start_datetime').combodate({
	value: current_date
});  

$('#end_datetime').combodate({
	value: current_date
}); 

/*
formats an interger to N (size) digits
*/
function format(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

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


$("#event").change(function () {
        switch(this.value){
        	case 'delay':{
        	$("#diversion_roads_group").hide();
        	$("#bus_services_directions_group").show();
        	$("#delay_size_group").show();
        	
        	break;	
        	}
        	
        	case 'diversion':{
        	$("#diversion_roads_group").show();
        	$("#bus_services_directions_group").hide();
        	$("#delay_size_group").hide();
        	
        	break;	
        	}
        	
        	default:
        	break;
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
			var result = response.split("<p>");
			var output="";
			/*for (var key in result) {
			   //console.log(key, result[key]);
			   	var message = response.split("<br>");
			   	for (var key in message)

			}*/
			
			$('#output').text(response);
			//$('#output').wrapInner(response);
			$('#output').html(response);


		},
		error: function(response){
                  //console.log(JSON.stringify(response));
                  alert('something went wrong!');
                  //window.location.replace("http://localhost:8888/DesireLines");
              }
          });
});

</script>