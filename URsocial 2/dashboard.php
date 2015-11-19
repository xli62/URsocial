<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">



        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>

            body {

                padding-top: 50px;

                padding-bottom: 20px;

            }

        </style>

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="css/main.css">



        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

    <body>

<?php include "inc/nav.inc" ?>

        

				<div id="chartdiv" style="width: 100%; height: 600px;"></div>
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<script src="amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/pie.js" type="text/javascript"></script>

        
		
		<?php
		$serverName = "GARRETTSURFACE"; //serverName\instanceName
		$connectionInfo = array( "Database"=>"URSocial", "UID"=>"sa", "PWD"=>"Ralphie08");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);

		if( $conn ) {
		}else{
     		echo "Connection could not be established.<br /> Please contact the sweet administrative crew.";
     		die( print_r( sqlsrv_errors(), true));
		}
		
		$locations = array("1","2","3","4","5","6","7","8");
		$locationValues = array();
        foreach($locations as $value){
		$sql1 = "SELECT COUNT(*) FROM STUDENTS WHERE locationID= $value";
		$stmt = sqlsrv_query($conn,$sql1,$params);
		
		if( sqlsrv_fetch( $stmt ) === false) {
     		die( print_r( sqlsrv_errors(), true));
		}
		
		$name = sqlsrv_get_field( $stmt, 0);
		$locationValues[]=$name;

		}	
		
		$a= $locationValues[0];
		$b= $locationValues[1];
		$c= $locationValues[2];
		$d= $locationValues[3];
		$e= $locationValues[4];
		$f= $locationValues[5];
		$g= $locationValues[6];
		$h= $locationValues[7];
		
		
		echo "<script>
            var chart;
            var legend;

            var chartData = [
                {
                    \"country\": \"Mex\",
                    \"value\": $a,
                },
                {
                    \"country\": \"Daily\",
                    \"value\": $b,
                },
				                {
                    \"country\": \"Gleason\",
                    \"value\": $c,
                },
				                {
                    \"country\": \"PRR\",
                    \"value\": $d,
                },
				                {
                    \"country\": \"Stacks\",
                    \"value\": $e,
                },
				                {
                    \"country\": \"Off-Campus\",
                    \"value\": $f,
                },
				                {
                    \"country\": \"One\",
                    \"value\": $g,
                },
				                {
                    \"country\": \"Pearl\",
                    \"value\": $h,
                }
            ];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = \"country\";
                chart.valueField = \"value\";
                chart.outlineColor = \"black\";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                chart.balloonText = \"[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>\";
                chart.depth3D = 15;
                chart.angle = 30;

                // WRITE
                chart.write(\"chartdiv\");
            });
        </script>";
		?>
		
		

    </body>

</html>



