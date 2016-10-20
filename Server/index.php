<?php
if(isset($_POST['cmd'])) {
	$string = implode("", $_POST['cmd']);
	if(is_numeric($string))
		file_put_contents("cmd.txt", $string);
}
?>
<head>
	<script src="https://code.jquery.com/jquery-2.2.3.js" integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4=" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		body {
			background: #546e7a;
			margin: 20px;
			margin-top: 40px;
		}

		/* The Movements Buttons */
		#forward, #stop, #backward, #rleft, #rright{
			display: inline-block;
			color: #ffc107;
			padding: 22px;
			border: 1px solid gray;
			box-shadow: 0px 0px 10px #263238;
		}
		#forward {
			background: #1b5e20;
			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
		}
		#stop {
			background: #b71c1c;
		}
		#backward {
			background: #1b5e20;
			border-bottom-left-radius: 6px;
			border-bottom-right-radius: 6px;
		}
		#rleft {
			background: #827717;
			border-top-left-radius: 6px;
			border-bottom-left-radius: 6px;
			margin-right: 0px;
		}
		#rright {
			background: #827717;
			border-top-right-radius: 6px;
			border-bottom-right-radius: 6px;
			margin-left: 0px;
		}

		/* Behaviour While Pressing The buttons*/
		#forward:active, #backward:active, #stop:active, #rleft:active, #rright:active{
			border-radius: 22px;
			box-shadow: 0px 0px 8px #455a64;
		}
		#forward:active, #backward:active{
			background: #43a047;
		}
		#stop:active{
			background: #e53935;
		}
		#rleft:active, #rright:active{
			background: #c0ca33;
		}

		/* Movement Buttons' Containers */
		.motor_control {
			display: inline-block;
			cursor:pointer;
			width:60px;
			margin: 10%;
		}
		.leftright{
			width: 150px;
		}
	</style>
</head>

<body>
	<header>
		<h1 style="text-align: center; color: #1a237e;">CoderDojo Thessaloniki</h1>
		<h3 style="text-align: center; color: #283593;">RC WiFi Car with WeMOS</h3>
	</header>
	<form id="form" method="POST">
		<div class="motor_control upstopback">
			<div id="forward">
				<i class="material-icons">keyboard_arrow_up</i>
			</div>
			<div id="stop">
				<i class="material-icons">pause</i>
			</div>
			<div id="backward">
				<i class="material-icons">keyboard_arrow_down</i>  
			</div>
		</div>
		<div class="motor_control leftright">
			<div id="rleft">
				<i class="material-icons">rotate_left</i>
			</div>
			<div id="rright">
				<i class="material-icons">rotate_right</i>
			</div>
		</div>
		<input type="hidden" value=0 name="cmd[]" id="motor1">
		<input type="hidden" value=0 name="cmd[]" id="motor2">
		<script>
			function submitForm() {
				$.ajax({
					type: "POST",
					url: 'index.php',
					data: $("#form").serialize()
				});

			}
			$('#forward').click(function() {
				$('#motor1').val(1);
				$('#motor2').val(1);
				submitForm();
			});
			$('#stop').click(function() {
				$('#motor1').val(0);
				$('#motor2').val(0);
				submitForm();
			});
			$('#backward').click(function() {
				$('#motor1').val(2);
				$('#motor2').val(2);
				submitForm();
			});
			$('#rright').click(function() {
				$('#motor1').val(1);
				$('#motor2').val(2);
				submitForm();
			});

			$('#rleft').click(function() {
				$('#motor1').val(2);
				$('#motor2').val(1); 
				submitForm();
			});
		</script>
	</form>
</body>