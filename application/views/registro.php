<?= form_open('/Site/recibirDatos'); 
$nombre= date('YmdHis').'.png';
?>
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
	<div class="registro">
		<img src="<?php echo base_url('public/img/top.jpg') ?>">
	</div>
	<div class="form-group col-md-12">
			<div class="col-md-2">
			</div>
			<div class="form-group col-md-7">
				<input type="text" class="form-control texto" name="nombre" id="nombre" placeholder="Nombre" >
			</div>
	</div>
	<div class="form-group col-md-12">
			<div class="col-md-2">
			</div>
			<div class="form-group col-md-7">
				<input type="text" class="form-control texto" name="apellido" id="apellido" placeholder="Apellido" >
			</div>
	</div>
	<div class="form-group col-md-12">
		<div class="col-md-2">
		</div>
		<div class="form-group col-md-8 offset-md-2">
			<img class="grafica" src="<?php echo base_url('public/img/selfie.jpg') ?>"><br>
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
				<br>
				<img width="120px" title="Tomar selfie" src="<?php echo base_url('public/img/webcam.png') ?>">
			</a>
		</div>
		<div align="center" class="col-md-4 offset-md-2">
			<br>
			<input type="hidden" name="fotoA" id="fotoA" value="<?= $nombre; ?>">
			<input type="submit" onclick="agradecimiento()" class="btn btn-danger btn-lg" name="guardar" value="Guardar" id="guardar">
		</div>			
	</form>

	
		
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
			} );
		}

		function agradecimiento(){
			alert('¡Gracias por registrarte!');
			
			var file =  document.getElementById("foto").src;
			var nombre= document.getElementById("fotoA").value;
		    var formdata = new FormData();
		    formdata.append("foto", file);
		    formdata.append("nombre",nombre);
    		var ajax = new XMLHttpRequest();
    		ajax.open("POST", "<?php echo base_url('public/webcamjs-master/upload.php')?>",);
   		 	ajax.send(formdata);
		}
		
	</script>
	
</body>
</html>
