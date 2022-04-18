<!-- PHP code -->
<?php

	if (isset($_POST['forward-button']))
	{
			 // exec('notify-send \'forward\'');
			$input='↑';
	} elseif (isset($_POST['backward-button'])) {
			$input='↓';
	} elseif (isset($_POST['left-button'])) {
			$input='←';
	} elseif (isset($_POST['right-button'])) {
			$input='→';
	} elseif (isset($_POST['laser-on-button'])) {
			$input='LASER ON';
      exec('echo 21 > /sys/class/gpio/export');
      exec('echo out > /sys/class/gpio/gpio21/direction');
      exec('echo 1 > /sys/class/gpio/gpio21/value');

	} elseif (isset($_POST['laser-off-button'])) {
			$input='LASER OFF';
      exec('echo 21 > /sys/class/gpio/export');
      exec('echo out > /sys/class/gpio/gpio21/direction');
      exec('echo 0 > /sys/class/gpio/gpio21/value');

	} elseif (isset($_POST['servo-pan-N90-button'])) {
			$input='SERVO PAN -90';
			exec('echo 2700000 > /sys/class/pwm/pwmchip0/pwm0/duty_cycle');

	} elseif (isset($_POST['servo-pan-0-button'])) {
			$input='SERVO PAN 0';
			exec('echo 1800000 > /sys/class/pwm/pwmchip0/pwm0/duty_cycle');
	} elseif (isset($_POST['servo-pan-P90-button'])) {
			$input='SERVO PAN +90';
			exec('echo 600000 > /sys/class/pwm/pwmchip0/pwm0/duty_cycle');
	} elseif (isset($_POST['scan-button'])) {
			$input='SERVO SCAN';
			exec('bash ./servo-pan-scan.sh');
	}





?>


<!-- HTML -->
<html>
<body>
    <form method="post">

      <!-- Print $input to the input text box-->
      <input class='input-parent' name='input' value="<?php echo $input?>" readonly></label>

			<br>

      <button class='button-class' name="forward-button">Forward</button>

			<br>

      <button class='button-class' name="left-button">Left</button>
      <button class='button-class' name="right-button">Right</button>

			<br>

      <button class='button-class' name="backward-button">Backward</button>


			<br>

      <button class='button-class' name="laser-on-button">LASER ON</button>
      <button class='button-class' name="laser-off-button">LASER OFF</button>

			<br>

      <button class='button-class' name="servo-pan-N90-button">PAN -90</button>
      <button class='button-class' name="servo-pan-0-button">PAN 0</button>
      <button class='button-class' name="servo-pan-P90-button">PAN +90</button>
      <button class='button-class' name="scan-button">PAN +90</button>

			<br>


    </form>
</body>

<!-- STYLE -->
<style>
	body {
		background-color: c0c0c0;
	}

	/*---- ---- text box ---- ----*/
	.input-parent {
		border: none;
		color: green;
		padding-top: 10px 20px; 		/* padding = white space */
		text-align: center;
		text-decoration: none;
		display: inline-block;	
		font-size: 30px;
		margin: 40px 40px;	/* margin is how much distance the element want to be away from others*/
		display: flex;
		justify-content: center;
	}

	/* ---- ---- forward class ---- ----*/
	.forward-class {
		display: flex;
		justify-content: center;
	}

	/* ---- ---- left-right class ---- ----*/
	.left-right-class {
		display: flex;
		justify-content: center;
	}


	.left-right-class > button {
		margin: 100px; /* For each button type in 'left-right-class', make them separate by gap of 100px*/
	}


	/* ---- ---- backward class ---- ----*/
	.backward-class {
		display: flex;
		justify-content: center;

	}


	/* ---- ---- panel class ---- ----*/
	.panel-class {
		display: flex;
		justify-content: center;
		margin: 100px 100px;
	}



	/* ---- ---- button styles ---- ----*/
	.button-class {
		border: 2px solid black;
		color: black; 								/* text color */
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 40px;
		margin: 4px 2px;
 	  transition-duration: 0.2s;
	}

	.button-class:hover {				/* hover style */
  	background-color: blue; 
  	color: white;
	}






</style>

