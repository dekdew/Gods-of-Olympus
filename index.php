<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>เทพเจ้าแห่งโอลิมปัส</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="nav.css">
	<link href="https://fonts.googleapis.com/css?family=Athiti|Bai+Jamjuree|Kanit" rel="stylesheet">
</head>

<body>

	<nav>
		<ul>
			<li><a href="#api">API</a></li>
			<li><a href="#home">HOME</a></li>
		</ul>
	</nav>

	<section id="header">
		<div id="black-ov"></div>
		<div id="header-message">
			<h1>เทพเจ้าแห่งโอลิมปัส</h1>
			<h2>สภาเทพแห่งโอลิมปัส เหล่าทวยเทพสูงสุดตามความเชื่อของชาวกรีกโบราณ</h2>
		</div>
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