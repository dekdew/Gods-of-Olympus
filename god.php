<?php
    $json = file_get_contents('data.json');
    $data = json_decode($json);

	$god = $_POST["god"];
	$greekName = $data->$god->greekName;
	$romanName = $data->$god->romanName;
	$img = $data->$god->img;
	$symbol = $data->$god->symbols;
	$animal = $data->$god->animals;
	$power = $data->$god->power;
	$info = $data->$god->info;
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>
		<?php echo $greekName; ?>
	</title>
	<link rel="stylesheet" href="god.css">
	<link rel="stylesheet" href="nav.css">
	<link href="https://fonts.googleapis.com/css?family=Athiti|Bai+Jamjuree|Kanit" rel="stylesheet">
</head>

</head>

<body>

	<nav>
		<ul>
			<li><a href="map.html">Map</a></li>
			<li><a href="index.php">HOME</a></li>
		</ul>
	</nav>

	<section id="info">
		<div id="black-ov"></div>
		<table>
			<tr>
				<td id="img" style="background-image: url('<?php echo $img ;?>');">
				</td>
				<td id="data">
					<div id="name">
						<h1>
							<?php echo $greekName; ?>
						</h1>
						<h2>
							<?php echo $romanName; ?>
						</h2>
					</div>
					<table id="ability">
						<tr>
							<td id="symbol">
								<img src="img/icons/symbol.png">
								<p>
									<?php echo $symbol[0]; ?>
								</p>
							</td>
							<td id="power">
								<img src="img/icons/power.png">
								<p>
									<?php echo $power[0]; ?>
								</p>
							</td>
							<td id="animal">
								<img src="img/icons/animal.png">
								<p>
									<?php echo $animal[0]; ?>
								</p>
							</td>
						</tr>
					</table>
					<div class="p">
						<?php
							foreach ($info as $p) {
								echo "<p>&nbsp";
								echo $p;
								echo "</p><br>";
							}
						?>
					</div>
				</td>
			</tr>
		</table>
	</section>

	<section id="gods">
		<form action="god.php" id="sendGod" method="POST">
			<ul>
				<button name="god" type="submit" value="zeus">
					<p>ซุส</p><img src="img/symbols/symbolZeus.svg">
				</button>
				<button name="god" type="submit" value="poseidon">
					<p>โพไซดอน</p><img src="img/symbols/symbolPoseidon.svg">
				</button>
				<button name="god" type="submit" value="demeter">
					<p>ดีมิเตอร์</p><img src="img/symbols/symbolDemeter.svg">
				</button>
				<button name="god" type="submit" value="ares">
					<p>แอรีส</p><img src="img/symbols/symbolAres.svg">
				</button>
				<button name="god" type="submit" value="apollo">
					<p>อพอลโล</p><img src="img/symbols/symbolApollo.svg">
				</button>
				<button name="god" type="submit" value="artemis">
					<p>อาร์เทมิส</p><img src="img/symbols/symbolArtemis.svg">
				</button>
				<button name="god" type="submit" value="hermes">
					<p>เฮอร์มีส</p><img src="img/symbols/symbolHermes.svg">
				</button>
				<button name="god" type="submit" value="athena">
					<p>อธีนา</p><img src="img/symbols/symbolAthena.svg">
				</button>
				<button name="god" type="submit" value="aphrodite">
					<p>อโฟร์ได</p><img src="img/symbols/symbolAphrodite.svg">
				</button>
				<button name="god" type="submit" value="hephaestus">
					<p>ฮีฟีสทัส</p><img src="img/symbols/symbolHephaestus.svg">
				</button>
				<button name="god" type="submit" value="dionysus">
					<p>ไดโอนิซัส</p><img src="img/symbols/symbolDionysus.svg">
				</button>
				<button name="god" type="submit" value="hera">
					<p>เฮรา</p><img src="img/symbols/symbolHera.svg">
				</button>
			</ul>
		</form>
	</section>
</body>

</html>