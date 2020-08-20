<?php
session_start();
$total = 40;
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Consumption' , 'Month'],
          ['01', 29.53505445601838 , 30],
          ['02', 31.775344452479207 , 30],
          ['03', 28.999524708737834, 30],
          ['04', 33.51637949937332, 30],
          ['05', 13.971743797080679 ,30]
        ]);

        var options = {
          vAxis: {title: 'Consumption'},
          hAxis: {title: 'Date'},
          seriesType: 'bars',
          series: {1: {type: 'line'}}    // Required for Material Bar Charts.
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Consumption'],
          ['01',  29.53505445601838],
          ['02',  61.31039890849759],
          ['03',  90.30992361723543],
          ['04',  123.82630311660876],
          ['05',  137.79804691368943]
        ]);

        var options = {
          title: 'Monthly Usage',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

	<title></title>
	<?php include 'links/link.php';?>
	<?php include 'css/styles.php';?>
</head>
<body>
	<nav class="navbar navbar-expand-lg p-4 bg-dark navbar-dark">
  		<a class="navbar-brand pl-5" href="index.php">Riders Providers</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse Welcome" id="collapsibleNavbar">
		    <div class="navbar-nav ml-auto pr-5">
		      	<h2> Welcome <?php echo $_SESSION['user'] ;?> </h2>
		    </div>
		  </div> 
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div>You have entered <?php echo $_SESSION['cost'];?> as amount</div>
				<div>The total Number of units you have<?php echo $units = $_SESSION['cost']/$total;?> units</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-1">
				<h3>Daily Usage</h3>
				<div id="chart_div" style="width: 900px; height: 500px;"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-2 order-2">
				<h3>Monthly Usage</h3>
				<div id="curve_chart" style="width: 900px; height: 500px"></div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
			<p>Today you have used <?php echo $_SESSION['units'];?> of <?php $units ?></p>
		</div>
	</div>
	<footer class="mt-5 footer-style">
	  <div class="text-center container-fluid justify-content-center ml-auto">
	    <p>Copyright By RidersProviders</p>
	  </div>
	</footer>
</body>
</html>
<?php
//$phone = '91'.$_SESSION['phone'];
// Account details
//$apiKey = urlencode('yZTNHaZVXdw-7PWscpUsLcpbAzgUEIkH1pt9qkT2mr');
// Message details
//$numbers = array($phone);
//$sender = urlencode('TXTLCL');
//$message = rawurlencode('Bruh... Amount Exceeded!!!!');
 
//$numbers = implode(',', $numbers);
 
// Prepare data for POST request
//$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
// Send the POST request with cURL
//$ch = curl_init('https://api.textlocal.in/send/');
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$response = curl_exec($ch);
//curl_close($ch);
//echo $response;
?>
