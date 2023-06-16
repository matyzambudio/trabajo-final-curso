<?php
session_start();
ob_clean();
// Envía la imagen como respuesta
header("Content-type: image/jpeg");
// Genera un nuevo captcha aleatorio de 6 caracteres
$captcha = substr(str_shuffle("123456789abcdefghijmnpqrtvwxyzABCDEGHIJKLMNPQRSTU@$%&"), 0, 6);

// Almacena el captcha en la variable de sesión
$_SESSION['captcha'] = $captcha;

// Crea la imagen del captcha
$imgCaptcha = imageCreate(70,50);  
$fondo = imagecolorallocate($imgCaptcha,35,203,233);
$texto = imagecolorallocate($imgCaptcha,82,4,34);

// Agrega el texto del captcha a la imagen
imagestring($imgCaptcha, 5, 8, 15, $captcha, $texto);


imagejpeg($imgCaptcha);

// Libera la memoria utilizada por la imagen
imagedestroy($imgCaptcha);
?>