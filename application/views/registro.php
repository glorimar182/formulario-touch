<?= form_open('/Site/recibirDatos'); ?>
<!doctype html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?>">
</head>
<body>
	<div class="form-group col-md-12">
			<div class="col-md-2">
			</div>
			<div class="form-group col-md-8">
				<h2>Registra tu nombre y apellido</h2><br>
				<input type="text" class="form-control" name="nombre" id="nombre" >
			</div>
		</div>
	<div class="form-group col-md-12">
		<div class="col-md-2">
		</div>
		<div class="form-group col-md-8 offset-md-2">
			<h2>Danos tu primer selfie en Mc Donald's</h2><br>
			<div id="results"></div>
			<div id="my_camera"></div>
			<br><br>
		</div>
	</div>
	<!-- First, include the Webcam.js JavaScript Library -->
	<script src="<?php echo base_url('public/webcamjs-master/webcam.min.js') ?>"></script>
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 300,
			height: 220,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	
	<form>		
		<div align="center">
			<a href="#" onclick="take_snapshot()">
				<h4>Haz click en la cámara</h4>
				<img width="120px" src="<?php echo base_url('public/img/webcam.png') ?>">
			</a>
		</div>
		<div align="right">
			<input type="hidden" name="fotoA" id="fotoA">
			<input type="submit" onclick="agradecimiento()" class="boton" name="guardar" value="Guardar" id="guardar">
		</div>			
	</form>

	
		
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<img name="foto" id="foto" src="'+data_uri+'"/>';
					document.getElementById('fotoA').value = data_uri;
			} );
		}

		function agradecimiento(){
			alert('¡Gracias por registrarte!');
		}
		
	</script>
	
</body>
</html>
