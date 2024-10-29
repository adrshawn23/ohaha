<!DOCTYPE html>
<html>
<head>
	<title>Using Math Functions</title>
	<link rel="stylesheet" href="style.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f3f4f6;
			margin: 0;
			padding: 0;
		}
		.container {
			width: 80%;
			margin: auto;
			overflow: hidden;
		}
		h1, h2 {
			color: #2d3748;
			text-align: center;
		}
		.box {
			background-color: #ffffff;
			border-radius: 8px;
			padding: 20px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			margin-top: 20px;
		}
		p {
			font-size: 1.1em;
			color: #4a5568;
			margin: 10px 0;
		}
		a {
			color: #4299e1;
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Using Math Functions</h1>
		<div class="box">
			<h2>Floating Point Numbers</h2>
			<p>Number 1: <?php $float1 = 15.85; echo $float1; ?></p>
			<p>Number 2: <?php $float2 = 25.99; echo $float2; ?></p>
			<p>Number 3: <?php $float3 = 35.55; echo $float3; ?></p>
			<p>Number 4: <?php $float4 = 45.77; echo $float4; ?></p>
			<p>Number 5: <?php $float5 = 55.25; echo $float5; ?></p>

			<h2>Whole Numbers</h2>
			<p>Number 1: <?php $int1 = 15; echo $int1; ?></p>
			<p>Number 2: <?php $int2 = 25; echo $int2; ?></p>
			<p>Number 3: <?php $int3 = 35; echo $int3; ?></p>
			<p>Number 4: <?php $int4 = 45; echo $int4; ?></p>
			<p>Number 5: <?php $int5 = 55; echo $int5; ?></p>

			<h2>Math Functions</h2>
			<p>abs(-20): <?php echo abs(-20); ?></p>
			<p>ceil(15.85): <?php echo ceil($float1); ?></p>
			<p>floor(15.85): <?php echo floor($float1); ?></p>
			<p>round(15.85): <?php echo round($float1); ?></p>
			<p>sqrt(144): <?php echo sqrt(144); ?></p>
			<p>pow(3, 4): <?php echo pow(3, 4); ?></p>
			<p>exp(2): <?php echo exp(2); ?></p>
			<p>log(100): <?php echo log(100); ?></p>
			<p>log10(100): <?php echo log10(100); ?></p>
			<p>sin(PI()/3): <?php echo sin(PI()/3); ?></p>
			<p>cos(PI()/3): <?php echo cos(PI()/3); ?></p>
			<p>tan(PI()/3): <?php echo tan(PI()/3); ?></p>
			<p>min(15, 25, 35): <?php echo min($int1, $int2, $int3); ?></p>
			<p>max(15, 25, 35): <?php echo max($int1, $int2, $int3); ?></p>

			<p><a href="index.html">Return to Main Page</a></p>
		</div>
	</div>
	<center>John Carlo G. Romera<br>October 12, 2024</center>
</body>
</html>
