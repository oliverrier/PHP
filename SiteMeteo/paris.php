<?php include_once header.php ?>
	<body>
		<?php
			for($day=0; $day<5; $day++){
				echo '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_'. $day .'.png">';
			}
		?>
		<a href="./index.php"> Retour à l'index </a>
	</body>
</html>