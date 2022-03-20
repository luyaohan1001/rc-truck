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
    }
?>


<!-- HTML -->
<html>
<body>
    <form method="post">

			<div class='input-parent'>	
				<input class='input-parent' name='input' value="<?php echo $input?>" readonly></label>
			</div>

			<br>

			<div class='forward-class'>	
    		<button class='button-class' name="forward-button">Forward</button>
			</div>

			<br>

			<div class='left-right-class'>	
    		<button class='button-class' name="left-button">Left</button>
    		<button class='button-class' name="right-button">Right</button>
			</div>

			<br>

			<div class='backward-class'>	
    		<button class='button-class' name="backward-button">Backward</button>
			</div>	

			<br>

			<div class='panel-class'>	
				<input type="checkbox" class="laser-switch" /><label for="laser-switch">toggle</label>	
				<input type="checkbox" class="light-switch" /><label for="light-switch">toggle</label>	
			</div>	

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
	}


	/* ---- ---- button styles ---- ----*/
	.button-class {
		border: 2px solid black;
		color: black; 								/* text color */
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
 	  transition-duration: 1.6s;
	}

	.button-class:hover {				/* hover style */
  	background-color: blue; 
  	color: white;
	}


	/*---- ---- laser switch / light switch---- ----*/
	.laser-switch, .light-switch{ 	/* hides the small checkbox*/
		height: 20;
		width: 20;
		/* visibility: hidden; */
	}




</style>

