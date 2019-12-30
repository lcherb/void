<!-- https://www.chartjs.org/ -->
<?php
	require_once('chart.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$title?></title>
<link rel="stylesheet" href="./style_1.css">
<script src="./Chart.min.js"></script>
<script src="./utils_1.js"></script>
<script src="./analyser_1.js"></script>
</head>
<body>
<div class="content">
	<div class="wrapper">
		<canvas id="chart-0"></canvas>
	</div>
	<div class="toolbar">
		<!-- <button onclick="togglePropagate(this)">Propagate</button> -->
		<!-- <button onclick="toggleSmooth(this)">Smooth</button> -->
		<!-- <button onclick="randomize(this)">Randomize</button> -->
	</div>
	<div id="chart-analyser" class="analyser"></div>
</div>

<script>
	var presets = window.chartColors;
	var utils = Samples.utils;
	var inputs = {
		min: 20,
		max: 80,
		count:12,
		decimals: 2,
		continuity: 1
	};

	function generateData(i) {
		console.log(i);
		// return utils.numbers(inputs);
		let dates = '<?=$dates_in_json?>';
		let obj = JSON.parse(dates);
		var _dates = [];
		for ( let j = 0; j < obj.length; j++){
			_dates.push(obj[j].date);
		}
		console.log(_dates);
		return _dates;
	}

	function generateLabels() {
		return utils.months({count:12});//inputs.count
	}

	utils.srand(42);
	var data = {
		labels: generateLabels(),
		datasets: [{
			backgroundColor: utils.transparentize(presets.blue),
			borderColor: presets.blue,
			data: generateData(),
			hidden: false,
			label: "Quantity",
			fill: false
		}]
	};
	// , {
	// 		backgroundColor: utils.transparentize(presets.orange),
	// 		borderColor: presets.orange,
	// 		data: generateData(),
	// 		label: 'D1',
	// 		fill: 20
	// 	}, {
	// 		backgroundColor: utils.transparentize(presets.yellow),
	// 		borderColor: presets.yellow,
	// 		data: generateData(),
	// 		hidden: true,
	// 		label: 'D2',
	// 		fill: 1
	// 	}, {
	// 		backgroundColor: utils.transparentize(presets.green),
	// 		borderColor: presets.green,
	// 		data: generateData(),
	// 		label: 'D3',
	// 		fill: '20'
	// 	}, {
	// 		backgroundColor: utils.transparentize(presets.blue),
	// 		borderColor: presets.blue,
	// 		data: generateData(),
	// 		label: 'to user',
	// 		fill: '10'
	// 	}, {
	// 		backgroundColor: utils.transparentize(presets.grey),
	// 		borderColor: presets.grey,
	// 		data: generateData(),
	// 		label: 'D5',
	// 		fill: '2'
	// 	}, {
	// 		backgroundColor: utils.transparentize(presets.purple),
	// 		borderColor: presets.purple,
	// 		data: generateData(),
	// 		label: 'D6',
	// 		fill: false
	// 	}, {
	// 		backgroundColor: utils.transparentize(presets.red),
	// 		borderColor: presets.red,
	// 		data: generateData(),
	// 		label: 'D7',
	// 		fill: 8
	// 	}, {
	// 		backgroundColor: utils.transparentize(presets.orange),
	// 		borderColor: presets.orange,
	// 		data: generateData(),
	// 		hidden: true,
	// 		label: 'D8',
	// 		fill: '9'
	// 	},{
	// 		backgroundColor: utils.transparentize(presets.orange),
	// 		borderColor: presets.orange,
	// 		data: generateData(),
	// 		hidden: true,
	// 		label: 'D9',
	// 		fill: 'end'
	// 	}
	
	var options = {
		maintainAspectRatio: false,
		spanGaps: false,
		elements: {
			line: {
				tension: 0.000001
			}
		},
		// scales: {
		// 	y: {
		// 		stacked: true,
		// 	}
		// },
		// plugins: {
		// 	filler: {
		// 		propagate: false
			// }, //show info
			// 'samples-filler-analyser': {
			// 	target: 'chart-analyser'
			// }
		}
	// };

	var chart = new Chart('chart-0', {
		type: 'line',
		data: data,
		options: options
	});

	// eslint-disable-next-line no-unused-vars
	// function togglePropagate(btn) {
	// 	var value = btn.classList.toggle('btn-on');
	// 	chart.options.plugins.filler.propagate = value;
	// 	chart.update();
	// }

	// // eslint-disable-next-line no-unused-vars
	// function toggleSmooth(btn) {
	// 	var value = btn.classList.toggle('btn-on');
	// 	chart.options.elements.line.tension = value ? 0.4 : 0.000001;
	// 	chart.update();
	// }

	// eslint-disable-next-line no-unused-vars
	function randomize() {
		var i = 0;
		chart.data.datasets.forEach(function(dataset) {
			console.log(i);
			dataset.data = generateData(i);
			i++;
		});
		chart.update();
	}
</script>
</body>
</html>

