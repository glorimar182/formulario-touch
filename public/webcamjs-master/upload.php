<?php
define('UPLOAD_DIR', 'uploads/');
$img = $_POST['foto'];
$name= $_POST['nombre'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR .$name;
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
?>