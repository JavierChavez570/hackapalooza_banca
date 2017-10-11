<?php  
define('UPLOAD_DIR', 'fotos/'); 
$img = $_POST['imgBase64']; 
$ced = $_POST['cedula']; 
$img = str_replace('data:image/png;base64,', '', $img); 
$img = str_replace(' ', '+', $img); 
$data = base64_decode($img); 
$file = UPLOAD_DIR.$ced.'.png'; 
$success = file_put_contents($file, $data); 
print $success ? $file : 'Unable to save the file.'; 

?>