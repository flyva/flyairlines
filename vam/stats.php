<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2015 Alejandro Garcia
	 * VAM is licensed under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<?php

	include('get_va_data.php');
	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");

	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	// select current day
	$sql = " select day(now()) as 'current_day'; ";
	$current_day;
	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}

	while ($row = $result->fetch_assoc()) {
		$current_day = $row['current_day'];
	}
	// Calculation for flights per month
	$days = '';
	$count_per_day = '';

	for ($i = 1 ; $i <= $current_day ; $i++) {
		$days = $days . ',' . $i;
		$sql2 = "select IFNULL(sum(c),0) as co from v_flights_pilots where date_format(flightdate,'%m')=date_format(now(),'%m') and date_format(flightdate,'%d')=$i";		
		if (!$result2 = $db->query($sql2)) {
			die('There was an error running the query [' . $db->error . ']');
		}
		while ($row2 = $result2->fetch_assoc()) {
			$count_per_day = $count_per_day . ',' . $row2['co'];
		}
	}
	$days = substr($days , 1);
	$count_per_day = substr($count_per_day , 1);


	// Calculation global % Charter VS Regular

	$totalflights = $num_pireps + $num_reports + $num_fskeeper + $num_vamacars;	
	$totalregularflights = $num_reports_reg + $num_pireps_reg + $num_fskeeper_reg + $num_vamacars_reg;
	$totalcharterflights = $totalflights - $totalregularflights;
	if ($totalflights == 0) {
		$percregularflights = 0;
	} else {
		$percregularflights = round(($totalregularflights * 100) / $totalflights , 2);
	}

	$perccharterflights = round(100 - $percregularflights , 2);

	// Calculation for type of report
	if ($totalflights == 0) {
		$percfsacars = 0;
	} else {
		$percfsacars = round(($num_reports * 100) / $totalflights , 2);
	}
	if ($totalflights == 0) {
		$percfskeeper = 0;
	} else {
		$percfskeeper = round(($num_fskeeper * 100) / $totalflights , 2);
	}	
	if ($totalflights == 0) {		$percvamacars = 0;	} 
	else {		
		$percvamacars = round(($num_vamacars * 100) / $totalflights , 2);	
	}	

	$percmanual = round((100 - $percfskeeper - $percfsacars - $percvamacars) , 2);


	//Calculation  per plane type

	$planetype = '';
	$countpanepertype = '';
	$vardatagraph = '';

	$sql = 'SELECT count(*) AS c, ft.plane_icao AS plane_icao FROM fleets f, fleettypes ft WHERE f.fleettype_id=ft.fleettype_id GROUP BY ft.fleettype_id ORDER BY plane_icao ASC';
	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}

	while ($row = $result->fetch_assoc()) {
		$planetype = $planetype . ',"' . $row['plane_icao'] . '"';
		$percplanetype = round(($row['c'] * 100) / $num_planes , 2);
		$countpanepertype = $countpanepertype . ',' . $percplanetype;
		$vardatagraph = $vardatagraph . '
    {
          value: ' . $percplanetype . ',
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "' . $row['plane_icao'] . '"
      },';
	}
	$planetype = substr($planetype , 1);
	$countpanepertype = substr($countpanepertype , 1);
?>
<!-- Row 1-->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH; ?></h3>
			</div>
			<div class="panel-body">
				<canvas id="monthflights" height="400" width="800"></canvas>
				<script>
					var barChartData = {
						labels: [<?php echo $days?>],
						datasets: [
							{
								fillColor: "rgba(73,193,20,0.5)",
								strokeColor: "rgba(220,220,220,0.8)",
								highlightFill: "rgba(220,220,220,0.75)",
								highlightStroke: "rgba(220,220,220,1)",
								data: [<?php echo $count_per_day?>]
							}
						]
					};

					var canvas_monthflights = document.getElementById("monthflights");
					var ctx_monthflights = canvas_monthflights.getContext("2d");
					new Chart(ctx_monthflights).Bar(barChartData,{responsive: true});
				</script>
			</div>
		</div>
		<div class="clearfix visible-lg"></div>
	</div>
</div>

<!-- Row 2 -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_PILOT_HOURS_YEAR_MONTH; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'pilots_hours_per_months.php'; ?>
			</div>
		</div>
	</div>
</div>

<!-- Row 2 -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_PILOT_FLIGHTS_YEAR_MONTH; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'pilots_flights_per_months.php'; ?>
			</div>
		</div>
	</div>
</div>

<!-- Row 3-->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE; ?></h3>
			</div>
			<div class="panel-body">
				<canvas id="typeplane" height="400" width="800"></canvas>
				<script>
					var barChartData2 = {
						labels: [<?php echo $planetype?>],
						datasets: [
							{
								fillColor: "rgba(73,193,20,0.5)",
								strokeColor: "rgba(220,220,220,0.8)",
								highlightFill: "rgba(220,220,220,0.75)",
								highlightStroke: "rgba(220,220,220,1)",
								data: [<?php echo $countpanepertype?>]
							}
						]
					};

					var canvas_planetype = document.getElementById("typeplane");
					var ctx_planetype = canvas_planetype.getContext("2d");
					new Chart(ctx_planetype).Bar(barChartData2,{responsive: true});
				</script>
			</div>
		</div>
		<div class="clearfix visible-lg"></div>
	</div>
</div>
<!-- Row 4-->
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_PERCENTAGE_REG_VS_CHARTER; ?></h3>
			</div>
			<div class="panel-body">
				<canvas id="myChart" height="300" width="400"></canvas>
				<script>
					var data2 = [
						{
							value: <?php echo $percregularflights?>,
							color: "#0B610B",							highlight: "#58FA58",
							label: "% Regular"
						},
						{
							value: <?php echo $perccharterflights?>,
							color: "#FFCC00",
							highlight: "#66CCFF",
							label: "% Charter"
						}
					];

					//Get the context of the canvas element we want to select
					var c = $('#myChart');
					var ct = c.get(0).getContext('2d');
					var ctx = document.getElementById("myChart").getContext("2d");
					/*************************************************************************/
					myNewChart = new Chart(ct).Doughnut(data2,{ responsive: true});
				</script>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_PERCENTAGE_BY_REPORT_TYPE; ?></h3>
			</div>
			<div class="panel-body">
				<canvas id="report" height="300" width="400"></canvas>
				<script>
					var data2 = [
						{
							value: <?php echo $percfsacars?>,
							color: "#F7464A",
							highlight: "#CC66FF",
							label: "% FS ACARS "
						},
						{
							value: <?php echo $percfskeeper?>,
							color: "#46BFBD",
							highlight: "#000099",
							label: "% FS Keeper"
						},
						{
							value: <?php echo $percmanual?>,
							color: "#0B610B",
							highlight: "#58FA58",
							label: "% Manual"
						}						,						{							value: <?php echo $percvamacars?>,							color: "#FFCC00",							highlight: "#66CCFF",							label: "% VAM ACARS"						}
					];

					//Get the context of the canvas element we want to select
					var c = $('#report');
					var ct = c.get(0).getContext('2d');
					var ctx = document.getElementById("myChart").getContext("2d");
					/*************************************************************************/
					myNewChart = new Chart(ct).Doughnut(data2,{responsive: true});
				</script>
			</div>
		</div>
		<div class="clearfix visible-lg"></div>
	</div>
</div>
<!-- Row 5 -->
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_TOP5_HOUR; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'top_five_hour.php'; ?>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_TOP5_FLIGTH; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'top_five_fligths.php'; ?>
			</div>
		</div>
	</div>
</div>
<!-- Row 6 -->
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_TOP5_LANDING; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'top_five_vs.php'; ?>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_TOP5_ROUTES; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'top_five_route.php'; ?>
			</div>
		</div>
	</div>
</div>

<!-- Row 7 -->
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_FLIGHTS_AIRCRAFT_TYPE; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'stats_fleet_type_counter.php'; ?>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo STATISTICS_TOP5_AIRCRAFTS; ?></h3>
			</div>
			<div class="panel-body">
				<?php include 'stats_fleet_counter.php'; ?>
			</div>
		</div>
	</div>
</div>
