<?php include("header.php"); ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">
				<div class="index-intro-text">
					<h1>Demographics (2018)</h1><br>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
						  ['Branch', 'No. of students'],
						  ['Computer Science and Engineering',     30],
						  ['Electrical Engineering',      23],
						  ['Mechanical Engineering',  26],
							['Civil Engineering', 11],
							['Chemical Science and Engineering', 10]
						]);

						var options = {
						  title: 'Btech Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart" style="float: left;width: 50%; height: 300px;"></div>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
						  ['Branch', 'No. of students'],
						 ['Computer Science and Engineering',     25],
						  ['Electrical Engineering',      26],
						  ['Mechanical Engineering',  25],
							['Civil Engineering', 13],
							['Chemical Science and Engineering', 11]
						]);

						var options = {
						  title: 'Btech Pre-Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart2" style="float: left;width: 50%; height: 300px;"></div>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
						  ['Branch', 'No. of students'],
						  ['Civil & Infrastructure Engineering',  7],
						  ['Communication System Engineering',  7],
						  ['Computer Science and Engineering',  17],
						  ['Materials Science and Engineering', 10],
						  ['Mathematics & Computing', 14],
						  ['Mechanical Engineering', 14],
						  ['Mechatronics', 16],
						  ['Nano Science & Technology', 8],
						  ['VLSI & Embedded Systems', 7]
						]);

						var options = {
						  title: 'Mtech Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart3" style="float: left;width: 50%; height: 300px;"></div>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
							['Branch', 'No. of students'],
						  ['Civil & Infrastructure Engineering',  12],
						  ['Communication System Engineering',  12],
						  ['Computer Science and Engineering',  15],
						  ['Materials Science and Engineering', 9],
						  ['Mathematics & Computing', 12],
						  ['Mechanical Engineering', 10],
						  ['Mechatronics', 13],
						  ['Nano Science & Technology', 10],
						  ['VLSI & Embedded Systems', 7]
						]);

						var options = {
						  title: 'Mtech Pre-Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart4" style="float: left;width: 50%; height: 300px;"></div>
				</div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
