<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inegi Test</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php
		$url = "http://www.inegi.org.mx/sistemas/BIE/ConsultaExporta.aspx?aamin=2010&aamax=9999&cveser=,428065,&ordena=a&ordenaPeriodo=ap&orientacion=v&frecuencia=Todo&estadistico=False&esquema=&bdesplaza=False&FileFormat=iqt";
		//  Initiate curl
		/*$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		// Will dump a beauty json :3
		var_dump(json_decode($result));*/
		//$test = file_get_contents('http://www.inegi.org.mx/sistemas/BIE/ConsultaExporta.aspx?aamin=2010&aamax=9999&cveser=,428065,&ordena=a&ordenaPeriodo=ap&orientacion=v&frecuencia=Todo&estadistico=False&esquema=&bdesplaza=False&FileFormat=html');
		// $test = file_put_contents("Tmpfile.zip", fopen("http://www.inegi.org.mx/sistemas/BIE/ConsultaExporta.aspx?aamin=2010&aamax=9999&cveser=,428065,&ordena=a&ordenaPeriodo=ap&orientacion=v&frecuencia=Todo&estadistico=False&esquema=&bdesplaza=False&FileFormat=iqt", 'r'));
		// var_dump($test);
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		//var_dump($data);
	?>
	<div id="container"><?php echo $data; ?></div>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script>
		/*$(document).ready(function() {
		    var options = {
		        chart: {
		            renderTo: 'container',
		            type: 'spline'
		        },
		        series: [{}]
		    };

		    //var data = "http://www3.inegi.org.mx/sistemas/api/indicadores/v1/Indicador/5300000011/31/es/false/json/8532e74b-3201-d12a-94ba-01d81393354a";
		    var data = '[[1,12],[2,5],[3,18],[4,13],[5,7],[6,4],[7,9],[8,10],[9,15],[10,22]]';
		    console.log(JSON.parse(data));

		    $.getJSON(data, function(data) {
		        options.series[0].data = data;
		        var chart = new Highcharts.Chart(options);
		        //console.log(data);
		    });

		});*/
	</script>
</body>
</html>